<?php

require "../Sistema/conexion.php";


$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$profesor = $_POST["profesor"];

$sql = "INSERT INTO cursos(nombre,descripcion,profesor)
VALUES(:nombre,:descripcion,:profesor)";

$stmt = $conexion->prepare($sql);

$stmt->bindParam(":nombre",$nombre);
$stmt->bindParam(":descripcion",$descripcion);
$stmt->bindParam(":profesor",$profesor);

$stmt->execute();

header("Location: listarCursoVS.php");

?>