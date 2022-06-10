<?= $this->extend('plantilla') ?>
<?= $this->section('contenido') ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Editar monitoreo</h3>
        <div class="col-auto">
            <button form="formularioEmpleado" class="btn btn-primary btn-sm" title="Registrar monitoreo">
                Actualizar
            </button>
        </div>
    </div>
    <form action="<?php echo base_url('monitoreos/actualizar/' . $monitoreo->id_monitoreo); ?>" method="post" class="row g-3" id="formularioEmpleado">
        <div class="col-md-6">
            <label for="fecha_monitoreo" class="form-label">Fecha</label>
            <input required type="DATE" size="5" class="form-control" value="<?php echo $monitoreo->fecha_monitoreo; ?>" name="fecha_monitoreo" id="fecha_monitoreo">
        </div>
        <div class="col-md-6">
            <label for="id_parcela" class="form-label">Id parcela</label>
            <select class="form-select" aria-label="Default select example" name="id_parcela">
                <?php foreach ($parcelas as $parcela):?>
                    <option value ="<?php echo $parcela -> id_parcela ?>">
                        parcela 
                    <?php echo $parcela -> id_parcela ?>
                    </option>
                    <?php endforeach; ?>
            </select>
        </div>
    </form>
</div>
    </form>
</div>
<?= $this->endSection() ?>