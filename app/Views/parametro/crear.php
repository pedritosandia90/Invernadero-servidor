<?= $this->extend('plantilla') ?>
<?= $this->section('contenido') ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Nuevo parametro</h3>
        <div class="col-auto">
            <button form="formularioEmpleado" class="btn btn-primary btn-sm" title="Registrar empleado">
                Registrar
            </button>
        </div>
    </div>
    <form action="<?php echo base_url('parametros/registrar'); ?>" method="post" class="row g-3" id="formularioEmpleado">
    <div class="col-md-6">
            <label for="parametros_nombre" class="form-label">Parametro</label>
            <input required type="text" class="form-control" name="parametros_nombre" id="parametros_nombre">
        </div>
        <div class="col-md-6">
            <label for="frecuencia_dias" class="form-label">Frecuencia</label>
            <input required type="text" class="form-control" name="frecuencia_dias" id="frecuencia_dias">
        </div>
        <div class="col-md-6">
            <label for="valor_parametro" class="form-label">Valor de parametro</label>
            <input required type="text" class="form-control" name="valor_parametro" id="valor_parametro">
        </div>
        <div class="col-md-6">
            <label for="comentario" class="form-label">Comentario</label>
            <input required type="text" class="form-control" name="comentario" id="comentario">
        </div>
    </form>
</div>
<?= $this->endSection() ?>