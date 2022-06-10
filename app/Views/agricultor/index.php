<?php echo $this->extend('plantilla'); ?>
<?php echo $this->section('contenido'); ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Agricultor</h3>
        <div class="col-auto">
            <a href="<?php echo base_url('agricultores/crear'); ?>" class="btn btn-primary btn-sm" title="Nuevo monitoreo">
                <i class="bi bi-plus-circle"></i>
                Nuevo
            </a>
        </div>
    </div>
    <table class="table table-stripeded table-hover">
        <thead>
            <tr>
                <td>Id agricultor</td>
                <td>Usuario</td>
                <td>Nombre</td>
                <td>Seleccionar</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($agricultores as $i => $agricultor) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?= $agricultor->Usuario; ?></td>
                    <td><?= $agricultor->ag_nombre_completo; ?></td>
                    <td>
                        <a href="<?php echo base_url('agricultores/editar/' . $agricultor->id_agricultor); ?>" class="btn btn-outline-primary btn-sm">Editar</a>
                        <a href="<?php echo base_url('agricultores/eliminar/' . $agricultor->id_agricultor); ?>" class="btn btn-outline-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links(); ?>
</div>
</div>
<?php echo $this->endSection(); ?>