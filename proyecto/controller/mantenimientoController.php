<?php
class mantenimientoController
{
    private $model;

    public function __construct()
    {
        require_once("C:/xampp/htdocs/proyecto/model/mantenimientoModel.php");
        $this->model = new mantenimientoModel();
    }

    public function guardar($Origen, $Destino, $Distancia, $Duracionviajes, $Atracc_cercanas, $Servicios_y_comodidad, $sucursal_trabaja,$Dificultaddecamino)
    {
        $id = $this->model->insertar($Origen, $Destino, $Distancia, $Duracionviajes, $Atracc_cercanas, $Servicios_y_comodidad, $sucursal_trabaja,$Dificultaddecamino);

        return ($id != false) ? header("Location:show.php?id=" . $id) : header("Location:create.php");
    }

    public function show($id)
    {
        return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
    }

    public function index()
    {
        return ($this->model->index()) ? $this->model->index() : false;
    }

    public function update($id,$Origen, $Destino, $Distancia, $Duracionviajes, $Atracc_cercanas, $Servicios_y_comodidad, $sucursal_trabaja,$Dificultaddecamino,$iva)
    {
        return ($this->model->update($id, $Origen, $Destino, $Distancia, $Duracionviajes, $Atracc_cercanas, $Servicios_y_comodidad, $sucursal_trabaja,$Dificultaddecamino, $iva) != false) ? header("Location:show.php?id=" . $id) : header("Location:index.php");
    }

    public function delete($id)
    {
        return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=" . $id);
    }
}
?>
