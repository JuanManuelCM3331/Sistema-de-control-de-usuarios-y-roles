<?php

require "../Sistema/conexion.php";


$id = $_GET["id"];

$sql = "DELETE FROM cursos WHERE id=:id";

$stmt = $conexion->prepare($sql);

$stmt->bindParam(":id",$id);

$stmt->execute();

header("Location: listarCurso.php");

?>