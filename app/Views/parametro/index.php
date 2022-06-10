<?php echo $this->extend('plantilla'); ?>
<?php echo $this->section('contenido'); ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Parametros</h3>
        <div class="col-auto">
            <a href="<?php echo base_url('parametros/crear'); ?>" class="btn btn-primary btn-sm" title="Nuevo parametro">
                <i class="bi bi-plus-circle"></i>
                Nuevo
            </a>
        </div>
    </div>
    <table class="table table-stripeded table-hover">
        <thead>
            <tr>
                <td> Id parametro </td>
                <td> Parametro </td>
                <td> Frecuencia de dias </td>
                <td> Valor del parametro </td>
                <td> Comentarios </td>
                <td> Seleccionar </td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($parametros as $i => $parametro) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?= $parametro->parametros_nombre; ?></td>
                    <td><?= $parametro->frecuencia_dias; ?></td>
                    <td><?= $parametro->valor_parametro; ?></td>
                    <td><?= $parametro->comentario; ?></td>
                    <td>
                        <a href="<?php echo base_url('parametros/editar/' . $parametro->id_parametros); ?>" class="btn btn-outline-primary btn-sm">Editar</a>
                        <a href="<?php echo base_url('parametros/eliminar/' . $parametro->id_parametros); ?>" class="btn btn-outline-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links(); ?>
</div>
</div>
<?php echo $this->endSection(); ?>