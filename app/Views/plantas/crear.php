<?= $this->extend('plantilla') ?>
<?= $this->section('contenido') ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Nuevo planta</h3>
        <div class="col-auto">
            <button form="formularioEmpleado" class="btn btn-primary btn-sm" title="Registrar planta">
                Registrar
            </button>
        </div>
    </div>
    <form action="<?php echo base_url('planta/registrar'); ?>" method="post" class="row g-3" id="formularioEmpleado">
    <div class="col-md-6">
            <label for="planta_nombre" class="form-label">Planta</label>
            <input required type="text" class="form-control" name="planta_nombre" id="planta_nombre">
        </div>
        <div class="col-md-6">
            <label for="ambiente" class="form-label">Ambiente</label>
            <input required type="text" class="form-control" name="ambiente" id="ambiente">
        </div>
        <div class="col-md-6">
            <label for="tipoluz" class="form-label">Tipo de luz</label>
            <input required type="text" class="form-control" name="tipoluz" id="tipoluz">
        </div>
    </form>
</div>
<?= $this->endSection() ?>