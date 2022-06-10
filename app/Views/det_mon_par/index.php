<?php echo $this->extend('plantilla'); ?>
<?php echo $this->section('contenido'); ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Detalle monitoreos</h3>
        <div class="col-auto">
        </div>
    </div>
    <table class="table table-stripeded table-hover">
        <thead>
            <tr>
                <td>Id planta</td>
                <td>Id del parametro</td>
                <td>Id del monitoreo</td>
                <td>Valor del parametro</td>
                <td>Observaciones del monitoreo</td>
                <td>Seleccionar</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($det_mon_par as $i => $det_mon_par) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?= $det_mon_par->id_parametros; ?></td>
                    <td><?= $det_mon_par->id_monitoreo; ?></td>
                    <td><?= $det_mon_par->valor_parametro; ?></td>
                    <td><?= $det_mon_par->observaciones_monitoreo; ?></td>
                    <td>
                        <a href="<?php echo base_url('detalle/editar/' . $det_mon_par->id_detalle_planta_datos); ?>" class="btn btn-outline-primary btn-sm">Editar</a>
                        <a href="<?php echo base_url('detalle/eliminar/' . $det_mon_par->id_detalle_planta_datos); ?>" class="btn btn-outline-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links(); ?>
</div>
</div>
<?php echo $this->endSection(); ?>