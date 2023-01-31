<?php
header('Content-Type: application/json');
$id=$_POST["id"];
$nombre = $_POST["nombre"];
$estado = $_POST["estado"];
$especie = $_POST["especie"];
$genero = $_POST["genero"];
$location = $_POST["location"];
$imagen=$_POST["imagen"];
if($id!=""){
    $servidor = "localhost";
$usuario = "root";
$password = "";
$dbname = "rick_y_morti";
$conexion = mysqli_connect($servidor, $usuario, $password, $dbname);
if (!$conexion) {
    echo ("Error en la conexion a MySQL: ".mysqli_connect_error());
exit();
}
 $sql = "INSERT INTO personajes VALUES ('.$id.','".$nombre."','".$estado."','".$especie."','".$genero."','".$location."','".$imagen."')";
if (mysqli_query($conexion, $sql)) {
    echo json_encode("Registro insertado correctamente.");
} else {
    echo json_encode("Error al insertar registros.");
}
}




?>
