<?= $this->extend('plantilla') ?>
<?= $this->section('contenido') ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Editar agricultor</h3>
        <div class="col-auto">
            <button form="formularioEmpleado" class="btn btn-primary btn-sm" title="Registrar monitoreo">
                Actualizar
            </button>
        </div>
    </div>
    <form action="<?php echo base_url('agricultores/actualizar/' . $agricultor->id_agricultor); ?>" method="post" class="row g-3" id="formularioEmpleado">
        <div class="col-md-6">
            <label for="Usuario" class="form-label">Usuario</label>
            <input required type="text" size="5" class="form-control" value="<?php echo $agricultor->Usuario; ?>" name="Usuario" id="Usuario">
        </div>
        <div class="col-md-6">
            <label for="ag_nombre_completo" class="form-label">Nombre</label>
            <input required type="text" class="form-control" value="<?php echo $agricultor->ag_nombre_completo; ?>" name="ag_nombre_completo" id="ag_nombre_completo">
        </div>
        <div class="col-md-6">
            <label for="contrasena" class="form-label">Contraseña</label>
            <input required type="text" class="form-control" value="<?php echo $agricultor->contrasena; ?>" name="contrasena" id="contrasena">
        </div>
    </form>
</div>
<?= $this->endSection() ?>