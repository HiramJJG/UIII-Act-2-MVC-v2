<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/head.php");
    require_once("C:/xampp/htdocs/proyecto/controller/mantenimientoController.php");
    $obj = new mantenimientoController();
    $date = $obj->show($_GET['id']);
?>
<h2 class="text-center">Detalles del registro de destinos</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $date[0]?>" class="btn btn-success">Actualizar</a>
    
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro del destino?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Una vez eliminado no se podra recuperar el registro del fabricante
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
            <!-- <button type="button" >Eliminar</button> -->
        </div>
        </div>
    </div>
    </div>
</div>

<table class="table container-fluid">
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
        <tr>
            <td scope="col"><?= $date["id"]?></td>
            <td scope="col"><?= $date["Origen"]?></td>
            <td scope="col"><?= $date["Destino"]?></td>
            <td scope="col"><?= $date["Distancia"]?></td>
            <td scope="col"><?= $date["Duracionviajes"]?></td>
            <td scope="col"><?= $date["Atracc_cercanas"]?></td>
            <td scope="col"><?= $date["Servicios_y_comodidad"]?></td>
            <td scope="col"><?= $date["Dificultaddecamino"]?></td>
        </tr>
    </tbody>
</table>



<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/footer.php");
?>