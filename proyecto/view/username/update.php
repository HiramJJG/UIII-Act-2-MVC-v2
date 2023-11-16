<?php
require_once("C:/xampp/htdocs/proyecto/view/head/head.php");
require_once("C:/xampp/htdocs/proyecto/controller/mantenimientoController.php");

$obj = new mantenimientoController();

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $id = $_POST['id'];
    $Origen = $_POST['Origen'];
    $Destino = $_POST['Destino'];
    $Distancia = $_POST['Distancia'];
    $Duracionviajes = $_POST['Duracionviajes'];
    $Atracc_cercanas = $_POST['Atracc_cercanas'];
    $Servicios_y_comodidad = $_POST['Servicios_y_comodidad'];
    $Dificultaddecamino = $_POST['Dificultaddecamino'];

    // Actualizar en la base de datos
    $result = $obj->update($id, $Origen, $Destino, $Distancia, $Duracionviajes, $Atracc_cercanas, $Servicios_y_comodidad, $Dificultaddecamino);

    if ($result) {
        // Redirigir a la página de detalles después de la actualización exitosa
        header("Location: show.php?id=" . $id);
        exit();
    } else {
        // Manejar el caso en que la actualización falló
        echo "Error al actualizar el registro.";
    }
}

// Si no se ha enviado el formulario o la actualización falló, mostrar el formulario de edición
$user = $obj->show($_GET['id']);

// Verificar si el usuario existe antes de mostrar el formulario
if (!$user) {
    echo "Usuario no encontrado.";
    exit();
}
?>

<!-- Tu formulario HTML aquí -->

<?php
require_once("C:/xampp/htdocs/proyecto/view/head/footer.php");
?>
