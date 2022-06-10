<?= $this->extend('plantilla') ?>
<?= $this->section('contenido') ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Editar parametro</h3>
        <div class="col-auto">
            <button form="formularioEmpleado" class="btn btn-primary btn-sm" title="Registrar parametro">
                Actualizar
            </button>
        </div>
    </div>
    <form action="<?php echo base_url('parametros/actualizar/' . $parametros->id_parametros); ?>" method="post" class="row g-3" id="formularioEmpleado">
    <div class="col-md-6">
            <label for="id_parametro" class="form-label">Parametro nombre</label>
            <select class="form-select" aria-label="Default select example" name="parametros_nombre">
                <?php foreach ($parametros_nombre as $parametro):?>
                    <option value ="<?php echo $parametro -> parametros_nombre ?>">
                        parametro
                    <?php echo $parametro -> parametros_nombre ?>
                    </option>
                    <?php endforeach; ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="frecuencia_dias" class="form-label">Frecuencia</label>
            <input required type="text" class="form-control" value="<?php echo $parametros->frecuencia_dias; ?>" name="frecuencia_dias" id="frecuencia_dias">
        </div>
        <div class="col-md-6">
            <label for="valor_parametro" class="form-label">Valor</label>
            <select class="form-select" aria-label="Default select example" name="valor_parametro">
                <?php foreach ($valor_parametro as $parametro):?>
                    <option value ="<?php echo $parametro -> valor_parametro ?>">
                    <?php echo $parametro -> valor_parametro ?>
                    </option>
                    <?php endforeach; ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="comentario" class="form-label">Comentario</label>
            <input required type="text" class="form-control" value="<?php echo $parametros->comentario; ?>" name="comentario" id="comentario">
        </div>
    </form>
</div>
<?= $this->endSection() ?>