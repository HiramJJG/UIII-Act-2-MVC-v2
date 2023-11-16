<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/head.php");
    require_once("C:/xampp/htdocs/proyecto/controller/mantenimientoController.php");
    $obj = new mantenimientoController();
    $rows = $obj->index();
?>
<div class="mb-3">
    <a href="create.php" class="btn btn-primary">Agregar nuevo destino</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Origen</th>
            <th scope="col">Destino del viaje</th>
            <th scope="col">Distancia del viaje</th>
            <th scope="col">Duracion del viaje </th>
            <th scope="col">Atracciones cercanas</th>
            <th scope="col"> Servicios y comodidad </th>
            <th scope="col"> Dificultad del camino  </th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th><?= $row[0] ?></th>
                    <th><?= $row[1] ?></th>
                    <th><?= $row[2] ?></th>
                    <th><?= $row[3] ?></th>
                    <th><?= $row[4] ?></th>
                    <th><?= $row[5] ?></th>
                    <th><?= $row[6] ?></th>
                    <th><?= $row[7] ?></th>
                    <th>
                        <a href="show.php?id=<?= $row[0]?>" class="btn btn-primary">Ver</a>
                        <a href="edit.php?id=<?= $row[0]?>" class="btn btn-success">Modificar destino</a>
                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#id<?=$row[0]?>">Eliminar</a>

                        <!-- Modal -->
                        <div class="modal fade" id="id<?=$row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro del destino?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Una vez eliminado no se podra recuperar el registro del destino
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="delete.php?id=<?= $row[0]?>" class="btn btn-danger">Eliminar </a>
                                    <!-- <button type="button" >Eliminar</button> -->
                                </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No hay registros actualmente</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/footer.php");
?>