<?php
session_start();
require "conexion.php";

if(isset($_POST["email"]) && isset($_POST["password"])){

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM usuarios 
        WHERE email=:email AND password=:password";

$stmt = $conexion->prepare($sql);

$stmt->bindParam(":email",$email);
$stmt->bindParam(":password",$password);

$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if($usuario){

$_SESSION["usuario"] = $usuario["nombre"];
$_SESSION["rol"] = $usuario["rol"];

header("Location: dashboardVS.php");
exit();

}else{

echo "Usuario o contraseña incorrectos <br>";
echo "<a href='loginVS.php'>Volver</a>";

}

}
?>