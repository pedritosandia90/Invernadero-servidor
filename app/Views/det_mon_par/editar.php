<?= $this->extend('plantilla') ?>
<?= $this->section('contenido') ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Editar detalle</h3>
        <div class="col-auto">
            <button form="formularioEmpleado" class="btn btn-primary btn-sm" title="Editar detalle">
                Actualizar
            </button>
        </div>
    </div>
    <form action="<?php echo base_url('detalle/actualizar/' . $det_mon_par->id_detalle_planta_datos); ?>" method="post" class="row g-3" id="formularioEmpleado">
    <div class="col-md-6">
            <label for="observaciones_monitoreo" class="form-label"> Observaciones del monitoreo </label>
            <input required type="text" size="5" class="form-control" name="observaciones_monitoreo" id="observaciones_monitoreo">
        </div>
        <div class="col-md-6">
            <label for="valor_parametro" class="form-label">Valor parametro</label>
            <select class="form-select" aria-label="Default select example" name="valor_parametro">
                <?php foreach ($valor_parametro as $det_mon_par):?>
                    <option value ="<?php echo $det_mon_par -> valor_parametro ?>">
                    <?php echo $det_mon_par -> valor_parametro ?>
                    </option>
                    <?php endforeach; ?>
            </select>
        </div>
    </form>
</div>
<?= $this->endSection() ?>