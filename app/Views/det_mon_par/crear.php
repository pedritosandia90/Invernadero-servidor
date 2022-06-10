<?= $this->extend('plantilla') ?>
<?= $this->section('contenido') ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Agregar detalles</h3>
        <div class="col-auto">
            <button form="formularioEmpleado" class="btn btn-primary btn-sm" title="Registrar Detalle">
                Registrar
            </button>
        </div>
    </div>
    <form action="<?php echo base_url('detalle/registrar/'. $id_parcela); ?>" method="post" class="row g-3" id="formularioEmpleado">
    <div class="col-md-6">
            <label for="id_parametros" class="form-label">Id parametro</label>
            <select class="form-select" aria-label="Default select example" name="id_parametros">
                <?php foreach ($parametros as $parametro):?>
                    <option value ="<?php echo $parametro -> id_parametros ?>"> 
                    <?php echo $parametro -> parametros_nombre ?>
                    </option>
                    <?php endforeach; ?>
            </select>
        </div>
<div class="col-md-6">
            <label for="parametro" class="form-label"> Parametro </label>
            <input required type="text" size="5" class="form-control" name="parametro" id="parametro">
        </div>
        <div class="col-md-6">
            <label for="observaciones_monitoreo" class="form-label"> Observaciones del monitoreo </label>
            <input required type="text" size="5" class="form-control" name="observaciones_monitoreo" id="observaciones_monitoreo">
        </div>
        <div class="col-md-6">
            <label for="valor_parametro" class="form-label">Valor del parametro</label>
            <input required type="text" class="form-control" name="valor_parametro" id="valor_parametro">
        </div>
        </template>
    </form>
<?= $this->endSection() ?>