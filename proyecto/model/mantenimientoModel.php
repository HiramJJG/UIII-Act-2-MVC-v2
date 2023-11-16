<?php
class mantenimientoModel
{
    private $PDO;

    public function __construct()
    {
        require_once("c://xampp/htdocs/proyecto/config/db.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function insertar($Origen, $Destino, $Distancia, $Duracionviajes, $Atracc_cercanas, $Servicios_y_comodidad,$Dificultaddecamino)
    {
        $stament = $this->PDO->prepare("INSERT INTO rutas VALUES(null,:Origen,:Destino,:Distancia,:Duracionviajes,:Atracc_cercanas,:Servicios_y_comodidad,:Dificultaddecamino)");
        $stament->bindParam(":Origen", $Origen);
        $stament->bindParam(":Destino", $Destino);
        $stament->bindParam(":Distancia", $Distancia);
        $stament->bindParam(":Duracionviajes", $Duracionviajes);
        $stament->bindParam(":Atracc_cercanas", $Atracc_cercanas);
        $stament->bindParam(":Servicios_y_comodidad", $Servicios_y_comodidad);
        $stament->bindParam(":Dificultaddecamino", $Dificultaddecamino);

        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function show($id)
    {
        $stament = $this->PDO->prepare("SELECT * FROM rutas where id = :id limit 1");
        $stament->bindParam(":id", $id);

        return ($stament->execute()) ? $stament->fetch() : false;
    }

    public function index()
    {
        $stament = $this->PDO->prepare("SELECT * FROM rutas");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }

    public function update($id,$Origen, $Destino, $Distancia, $Duracionviajes, $Atracc_cercanas, $Servicios_y_comodidad,$Dificultaddecamino)
    {
        $stament = $this->PDO->prepare("UPDATE rutas SET Origen = :Origen, Destino = :Destino, Distancia = :Distancia, Duracionviajes = :Duracionviajes, Atracc_cercanas = :Atracc_cercanas, Servicios_y_comodidad = :Servicios_y_comodidad, Dificultaddecamino = :Dificultaddecamino  WHERE id = :id");
        $stament->bindParam(":Origen", $Origen);
        $stament->bindParam(":Destino", $Destino);
        $stament->bindParam(":Distancia", $Distancia);
        $stament->bindParam(":Duracionviajes", $Duracionviajes);
        $stament->bindParam(":Atracc_cercanas", $Atracc_cercanas);
        $stament->bindParam(":Servicios_y_comodidad", $Servicios_y_comodidad);
        $stament->bindParam(":Dificultaddecamino", $Dificultaddecamino);
        $stament->bindParam(":id", $id);

        return ($stament->execute()) ? $id : false;
    }

    public function delete($id)
    {
        $stament = $this->PDO->prepare("DELETE FROM rutas WHERE id = :id");
        $stament->bindParam(":id", $id);

        return ($stament->execute()) ? true : false;
    }
}
?>
