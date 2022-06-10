<?= $this->extend('plantilla') ?>
<?= $this->section('contenido') ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Editar parcelas</h3>
        <div class="col-auto">
            <button form="formularioEmpleado" class="btn btn-primary btn-sm" title="Editar plantas">
                Actualizar
            </button>
        </div>
    </div>
    <form action="<?php echo base_url('parcela/actualizar/' . $parcela->id_parcela); ?>" method="post" class="row g-3" id="formularioEmpleado">
        <div class="col-md-6">
            <label for="extension_metros2" class="form-label"> extension (metros cuadrados) </label>
            <input required type="text" size="5" class="form-control" value="<?php echo $parcela->extension_metros2; ?>" name="extension_metros2" id="extension_metros2">
        </div>
        <div class="col-md-6">
            <label for="id_agricultor" class="form-label">ID agricultor</label>
            <input required type="text" class="form-control" value="<?php echo $parcela->id_agricultor; ?>" name="id_agricultor" id="id_agricultor">
        </div>
        <div class="col-md-6">
            <label for="id_planta" class="form-label">ID planta</label>
            <input required type="text" class="form-control" value="<?php echo $parcela->id_planta; ?>" name="id_planta" id="id_planta">
        </div>
    </form>
</div>
<?= $this->endSection() ?>