<?php

require "../Sistema/conexion.php";


$id = $_POST["id"];
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST["password"];
$rol = $_POST["rol"];

$sql = "UPDATE usuarios 
SET nombre=:nombre, email=:email, password=:password, rol=:rol
WHERE id=:id";

$stmt = $conexion->prepare($sql);

$stmt->bindParam(":nombre",$nombre);
$stmt->bindParam(":email",$email);
$stmt->bindParam(":password",$password);
$stmt->bindParam(":rol",$rol);
$stmt->bindParam(":id",$id);

$stmt->execute();

header("Location: listarUsuarios.php");

?>