<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/head.php");
?>


    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Origen</label>
        <input type="text" name="Origen" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Destino  </label>
        <input type="text" name="Destino" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Distancia</label>
        <input type="text" name="Distancia" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Duracion del viaje </label>
        <input type="text" name="Duracionviajes" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Atracciones cercanas</label>
        <input type="text" name="Atracc_cercanas" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Servicios y comodidad </label>
        <input type="text" name="Servicios_y_comodidad" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Dificultad de camino </label>
        <input type="text" name="Dificultaddecamino" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="../../index.php">Cancelar</a>
    </form>

<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/footer.php");
?>