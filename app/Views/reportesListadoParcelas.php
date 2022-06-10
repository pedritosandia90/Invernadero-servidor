<?php echo $this->extend('plantilla'); ?>

<?php echo $this->section('contenido'); ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Monitoreos realizados</h3>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>Id parcela</td>
                <td>Fecha del monitoreo</td>
                <td>Planta</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ListadoParcelas as $i => $monitoreo) : ?>
                <tr>
                    <td><?= $monitoreo->id_parcela; ?></td>
                    <td><?= $monitoreo->fecha_monitoreo; ?></td>
                    <td><?= $monitoreo->planta_nombre; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links(); ?>
</div>
</div>
<?php echo $this->endSection(); ?>