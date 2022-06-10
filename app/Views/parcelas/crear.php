<?= $this->extend('plantilla') ?>
<?= $this->section('contenido') ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Nueva parcela</h3>
        <div class="col-auto">
            <button form="formularioEmpleado" class="btn btn-primary btn-sm" title="Registrar parcelas">
                Registrar
            </button>
        </div>
    </div>
    <form action="<?php echo base_url('parcela/registrar'); ?>" method="post" class="row g-3" id="formularioEmpleado">
        <div class="col-md-6">
            <label for="extension_metros2" class="form-label">Extension (metros cuadrados)</label>
            <input required type="text" class="form-control" name="extension_metros2" id="extension_metros2">
        </div>
        <div class="col-md-6">
            <label for="id_agricultor" class="form-label">Id agricultor</label>
            <input required type="text" class="form-control" name="id_agricultor" id="id_agricultor">
        </div>
        <div class="col-md-6">
            <label for="id_planta" class="form-label">Id planta</label>
            <input required type="text" class="form-control" name="id_planta" id="id_planta">
        </div>
    </form>
</div>
<?= $this->endSection() ?>