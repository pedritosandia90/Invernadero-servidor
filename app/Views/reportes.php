<?php echo $this->extend('plantilla'); ?>

<?php echo $this->section('contenido'); ?>
<?= $this->extend('plantilla') ?>
<?= $this->section('contenido') ?>
<!-- DIV para un contenido o header de presentación -->
<div class="container">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Reportes</h3>
    </div>
    <div class="row my-3 mx-1 gap-2">
        <div class="card bg-light border-0 shadow-sm col-md-3">
            <div class="card-body">
                <h5 class="card-title">Monitoreo de registro</h5>
                <h6 class="card-subtitle mb-2 text-muted">Reporte</h6>
                <p class="card-text">Listado de registros en el monitoreo</p>
                <a href="<?= base_url('/reportes/MonitorioPorDia'); ?>" class="btn btn-primary btn-sm">Ver reportes</a>
            </div>
        </div>
        <div class="card bg-light border-0 shadow-sm col-md-3">
            <div class="card-body">
                <h5 class="card-title">Monitoreo de las parcelas</h5>
                <h6 class="card-subtitle mb-2 text-muted">Reporte</h6>
                <p class="card-text">Listado de los monitoreos realizados a la parcelas desde la fecha mas reciente</p>
                <a href="<?php echo base_url('/reportes/ListadoParcelas'); ?>" class="btn btn-primary btn-sm">Ver reportes</a>
            </div>
        </div>
        <div class="card bg-light border-0 shadow-sm col-md-3">
            <div class="card-body">
                <h5 class="card-title">Listado de parametros</h5>
                <h6 class="card-subtitle mb-2 text-muted">Reporte</h6>
                <p class="card-text">Listado de los parametros que contiene cada parcela con su valor</p>
                <a href="<?php echo base_url('/reportes/ListadoParametros'); ?>" class="btn btn-primary btn-sm">Ver reportes</a>
            </div>
    </div>
</div>
<?= $this->endSection() ?>
<?php echo $this->endSection(); ?>