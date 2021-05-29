<?php
$conexion = mysqli_connect('remotemysql.com','h8qOqGOcag','7ZW9xkBv7V','h8qOqGOcag') or die(mysqli_error($mysqli));
insertar($conexion);
function insertar($conexion){
$nombre = $_POST['Nombre'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];

$consulta =" INSERT INTO productos (nompro,valor,descri) VALUES ( '$nombre','$precio','$descripcion')";
mysqli_query($conexion,$consulta);
mysqli_close($conexion);
header("location:index.html");
}
?>