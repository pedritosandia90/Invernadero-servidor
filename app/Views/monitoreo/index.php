<?php echo $this->extend('plantilla'); ?>
<?php echo $this->section('contenido'); ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Monitoreo</h3>
        <div class="col-auto">
            <a href="<?php echo base_url('monitoreos/crear'); ?>" class="btn btn-primary btn-sm" title="Nuevo monitoreo">
                <i class="bi bi-plus-circle"></i>
                Nuevo
            </a>
        </div>
    </div>
    <table class="table table-stripeded table-hover">
        <thead>
            <tr>
                <td>Id del Monitoreo</td>
                <td>fecha del monitoreo</td>
                <td>ID de la parcela</td>
                <td>Seleccionar</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($monitoreos as $i => $monitoreo) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?= $monitoreo->fecha_monitoreo; ?></td>
                    <td><?= $monitoreo->id_parcela; ?></td>
                    <td>
                        <a href="<?php echo base_url('monitoreos/editar/' . $monitoreo->id_monitoreo); ?>" class="btn btn-outline-primary btn-sm">Editar</a>
                        <a href="<?php echo base_url('monitoreos/eliminar/' . $monitoreo->id_monitoreo); ?>" class="btn btn-outline-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links(); ?>
</div>
</div>
<?php echo $this->endSection(); ?>