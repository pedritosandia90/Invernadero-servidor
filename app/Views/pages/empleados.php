<!-- Inicio Contenido -->



<!-- DIV para contenido de la app [tablas, forms, etc.] -->
<div class="container  px-4  gy-5">
    <h4>Tabla agricultor</h4>
    <button class="btn btn-primary">Registrar agricultor</button>
    <table class="table table-hover" id="tablaEmpleados" name="tablaEmpleados">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Usuario</th>
                <th scope="col">ID</th>
            </tr>
        </thead>
        <tbody id="resultEmpleados" name="resultEmpleados">

            <!-- Aqui se cargaran las filas por medio de JS con .innerHTML-->

        </tbody>
    </table>
    <div class=" container text-center" style="display : none;" id="mensajesServer" name="mensajesServer">
    </div>
</div>

<!-- se puede agregar mas contenido para ocultar o mostrar con js -->
<div id="result">
    <button onclick="btnCall(10)">mandar funcion </button>
</div>
<!-- Fin Contenido -->

<script>
    function btnCall($id) {
        console.log($id);
        /*
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            //console.log(this.responseText);
            let json = JSON.parse(this.responseText);
            //console.log(Object.keys(json['datos']).length);
            console.log(json['response']['result']);
        }

        xhttp.open("POST", base_URL + "api/deleteEmpleado" + $id);
        xhttp.send();
        */
    }
</script>
<script>
    window.onload = getEmpleados;

    function getEmpleados() {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            //console.log(this.responseText);
            let json = JSON.parse(this.responseText);
            //console.log(Object.keys(json['datos']).length);
            console.log(json['response']['result']);
            switch (json['response']['result']) {
                case true:

                    for (var i = 0; i < Object.keys(json['datos']).length; i++) {
                        /* Con .innerHTML agregamos elemntos e inicia con tr = table row = fila*/
                        document.querySelector('#resultEmpleados').innerHTML += '<tr>' +
                            /* carga los datos a la tabla */
                            '<td>' + json['datos'][i]['nombre'] + '</td>' +
                            '<td>' + json['datos'][i]['usuario'] + '</td>' +
                            /* 
                             *esta td es para la columna de acciones
                             * Eliminar empleado
                             * Editar empleado
                             * Cambiar contraseña 
                             */
                            '<td><div class="d-grid gap-2 d-md-block">' +
                            '<button type="button" class="btn btn-primary">Editar</button>' +
                            '<button type="button" class="btn btn-danger">Eliminar</button>' +
                            '</div></td>' +

                            '</tr>'; /* final de table row */


                    }
                    break;
                case false:
                    document.querySelector("#tablaEmpleados").style.display = 'none';
                    document.querySelector("#mensajesServer").style.display = 'contents';
                    document.querySelector('#mensajesServer').innerHTML = '<h1>' + json['response']['message'] + '</h1>';
                    break;
                default:
                    document.querySelector("#tablaEmpleados").style.display = 'none';
                    document.querySelector("#mensajesServer").style.display = 'contents';
                    document.querySelector('#mensajesServer').innerHTML = '<h1>Ha ocurrido un problema con el servidor</h1>';
                    break;

            }

        }

        xhttp.open("POST", base_URL + "api/readEmpleados");
        xhttp.send();


    }
</script>