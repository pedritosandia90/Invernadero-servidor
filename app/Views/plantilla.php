<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primero van los LINK A  CSS -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Despues van los SCRIPTS de JS -->
    <!-- JS puede ir en el head o antes de terminar la etiqueta de <body> -->
    <title>invernadero_proyecto</title>
</head>

<body>
    <!-- Inicio Navbar -->
    <nav class="navbar navbar-light bg-light navbar-expand-lg " aria-label="Eighth navbar example">
        <div class="container">
            <!-- BRAND -- nombre de la app  -->
            <a class="navbar-brand" href="#">NARTURNERGY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                    <li class="nav-item"> 
                        <a class="nav-link " aria-current="page" href="<?php echo base_url('agricultores'); ?>">Agricultor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="<?php echo base_url('monitoreos'); ?>">Monitoreo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="<?php echo base_url('detalle'); ?>">Detalle Monitoreo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="<?php echo base_url('planta'); ?>">Plantas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="<?php echo base_url('parcela'); ?>">Parcelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="<?php echo base_url('parametros'); ?>">Parametros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="<?php echo base_url('reportes'); ?>">Reportes</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#"><?php echo session('empleado')->usuario ?? ''; ?></a>
                    </li>
                    <li class="nav-item">
                        <!-- Muestra un icono de Fontawesome con la etiqueta <i></i> -->
                        <a class="nav-link"<?php  echo session('empleado')->usuario ?? ''; ?> aria-current="page" href="<?php echo base_url('/auth/logout'); ?> " title="Cerrar sesión">
                            <i aria-current="page" class="fa-solid fa-arrow-right-from-bracket"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- También se pueden importar componentes -->
    <?php if (session('error')) : ?>
        <div class="container alert alert-danger" role="alert">
            <?php echo session('error'); ?>
        </div>
    <?php endif; ?>
    <?php if (session('success')) : ?>
        <div class="container alert alert-success" role="alert">
            <?php echo session('success'); ?>
        </div>
    <?php endif; ?>
    <!-- Fin Navbar -->
    <!-- Inicio Contenido -->
    <?php echo $this->renderSection('contenido'); ?>
    <!-- Fin Contenido -->

    <!-- Inicio footer -->
    <!-- Fin footer -->

    <!-- Scripts de JS  -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>