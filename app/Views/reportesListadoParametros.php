<?php echo $this->extend('plantilla'); ?>

<?php echo $this->section('contenido'); ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Monitoreos realizados</h3>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>Parametro</td>
                <td>Id parcela</td>
                <td>valor del parametro</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ListadoParametros as $i => $monitoreo) : ?>
                <tr>
                    <td><?= $monitoreo->parametros_nombre; ?></td>
                    <td><?= $monitoreo->id_parcela; ?></td>
                    <td><?= $monitoreo->valor_parametro; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links(); ?>
</div>
</div>
<?php echo $this->endSection(); ?>