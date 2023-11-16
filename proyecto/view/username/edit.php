<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/head.php");
    require_once("C:/xampp/htdocs/proyecto/controller/mantenimientoController.php");
    $obj = new mantenimientoController();
    $user = $obj->show($_GET['id']);
?>
  <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro del destino</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Origen" class="col-sm-2 col-form-label">Origen</label>
        <div class="col-sm-10">
            <input type="text" name="Origen" class="form-control" id="inputPassword" value="<?= $user[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Destino" class="col-sm-2 col-form-label">Destino</label>
        <div class="col-sm-10">
            <input type="text" name="Destino" class="form-control" id="inputPassword" value="<?= $user[2]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Distancia" class="col-sm-2 col-form-label">Distancia</label>
        <div class="col-sm-10">
            <input type="text" name="Distancia" class="form-control" id="inputPassword" value="<?= $user[3]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Duracionviajes" class="col-sm-2 col-form-label">Duracion del viaje </label>
        <div class="col-sm-10">
            <input type="text" name="Duracionviajes" class="form-control" id="inputPassword" value="<?= $user[4]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Atracc_cercanas" class="col-sm-2 col-form-label">Atracciones cercanas</label>
        <div class="col-sm-10">
            <input type="text" name="Atracc_cercanas" class="form-control" id="inputPassword" value="<?= $user[5]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Servicios_y_comodidad" class="col-sm-2 col-form-label">Servicios y comodidad</label>
        <div class="col-sm-10">
            <input type="text" name="Servicios_y_comodidad" class="form-control" id="inputPassword" value="<?= $user[6]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Dificultaddecamino" class="col-sm-2 col-form-label">Dificultad de camino</label>
        <div class="col-sm-10">
            <input type="text" name="Dificultaddecamino" class="form-control" id="inputPassword" value="<?= $user[7]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/footer.php");
?>