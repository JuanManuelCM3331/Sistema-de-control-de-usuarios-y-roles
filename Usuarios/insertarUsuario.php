<?php

require "../Sistema/conexion.php";


$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST["password"];
$rol = $_POST["rol"];

$sql = "INSERT INTO usuarios(nombre,email,password,rol)
VALUES(:nombre,:email,:password,:rol)";

$stmt = $conexion->prepare($sql);

$stmt->bindParam(":nombre",$nombre);
$stmt->bindParam(":email",$email);
$stmt->bindParam(":password",$password);
$stmt->bindParam(":rol",$rol);

$stmt->execute();

header("Location: listarUsuarios.php");

?>