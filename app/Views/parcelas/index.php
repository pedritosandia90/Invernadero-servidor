<?php echo $this->extend('plantilla'); ?>
<?php echo $this->section('contenido'); ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Parcelas</h3>
        <div class="col-auto">
            <a href="<?php echo base_url('parcela/crear'); ?>" class="btn btn-primary btn-sm" title="Nueva parcela">
                <i class="bi bi-plus-circle"></i>
                Nuevo
            </a>
        </div>
    </div>
    <table class="table table-stripeded table-hover">
        <thead>
            <tr>
                <td>Id parcela</td>
                <td>Extension (metros cuadrados)</td>
                <td>Id Agricultor</td>
                <td>Id Planta</td>
                <td>Seleccionar</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($parcela as $i => $parcelas) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?= $parcelas->extension_metros2; ?></td>
                    <td><?= $parcelas->id_agricultor; ?></td>
                    <td><?= $parcelas->id_planta; ?></td>
                    <td>
                        <a href="<?php echo base_url('parcela/editar/' . $parcelas->id_parcela); ?>" class="btn btn-outline-primary btn-sm">Editar</a>
                        <a href="<?php echo base_url('parcela/eliminar/' . $parcelas->id_parcela); ?>" class="btn btn-outline-danger btn-sm">Eliminar</a>
                        <a href="<?php echo base_url('detalle/crear/' . $parcelas->id_parcela); ?>" class="btn btn-primary btn-sm" title="Nuevo monitoreo Detalle">
                <i class="bi bi-plus-circle"></i>
                Nuevo Detalle
            </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links(); ?>
</div>
</div>
<?php echo $this->endSection(); ?>