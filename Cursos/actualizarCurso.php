<?php

require "../Sistema/conexion.php";


$id = $_POST["id"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$profesor = $_POST["profesor"];

$sql = "UPDATE cursos 
SET nombre=:nombre, descripcion=:descripcion, profesor=:profesor
WHERE id=:id";

$stmt = $conexion->prepare($sql);

$stmt->bindParam(":nombre",$nombre);
$stmt->bindParam(":descripcion",$descripcion);
$stmt->bindParam(":profesor",$profesor);
$stmt->bindParam(":id",$id);

$stmt->execute();

header("Location: listarCursoVS.php");

?>