<?php echo $this->extend('plantilla'); ?>
<?php echo $this->section('contenido'); ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">plantas</h3>
        <div class="col-auto">
            <a href="<?php echo base_url('planta/crear'); ?>" class="btn btn-primary btn-sm" title="Nueva planta">
                <i class="bi bi-plus-circle"></i>
                Nuevo
            </a>
        </div>
    </div>
    <table class="table table-stripeded table-hover">
        <thead>
            <tr>
                <td>Id planta</td>
                <td>Nombre</td>
                <td>Ambiente</td>
                <td>Tipo de luz</td>
                <td>Seleccionar</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($planta as $i => $plantas) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?= $plantas->planta_nombre; ?></td>
                    <td><?= $plantas->ambiente; ?></td>
                    <td><?= $plantas->tipoluz; ?></td>
                    <td>
                        <a href="<?php echo base_url('planta/editar/' . $plantas->id_planta); ?>" class="btn btn-outline-primary btn-sm">Editar</a>
                        <a href="<?php echo base_url('planta/eliminar/' . $plantas->id_planta); ?>" class="btn btn-outline-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links(); ?>
</div>
</div>
<?php echo $this->endSection(); ?>