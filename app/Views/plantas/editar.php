<?= $this->extend('plantilla') ?>
<?= $this->section('contenido') ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Editar planta</h3>
        <div class="col-auto">
            <button form="formularioEmpleado" class="btn btn-primary btn-sm" title="Registrar planta">
                Actualizar
            </button>
        </div>
    </div>
    <form action="<?php echo base_url('planta/actualizar/' . $planta->id_planta); ?>" method="post" class="row g-3" id="formularioEmpleado">
    <div class="col-md-6">
            <label for="planta_nombre" class="form-label">Planta</label>
            <select class="form-select" aria-label="Default select example" name="planta_nombre">
                <?php foreach ($planta_nombre as $planta):?>
                    <option value ="<?php echo $planta -> planta_nombre ?>">
                    <?php echo $planta -> planta_nombre ?>
                    </option>
                    <?php endforeach; ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="ambiente" class="form-label">ambiente</label>
            <input required type="text" class="form-control" value="<?php echo $planta->ambiente; ?>" name="ambiente" id="ambiente">
        </div>
        <div class="col-md-6">
            <label for="tipoluz" class="form-label">Tipo de luz</label>
            <input required type="text" class="form-control" value="<?php echo $planta->tipoluz; ?>" name="tipoluz" id="tipoluz">
        </div>
    </form>
</div>
<?= $this->endSection() ?>