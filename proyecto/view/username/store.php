<?php
    require_once("C:/xampp/htdocs/proyecto/controller/mantenimientoController.php");
    $obj = new mantenimientoController();
    $obj->guardar($_POST['Origen'],$_POST['Destino'],$_POST['Distancia'],$_POST['Duracionviajes'],$_POST['Atracc_cercanas'],$_POST['Servicios_y_comodidad'],$_POST['Dificultaddecamino']);
?>