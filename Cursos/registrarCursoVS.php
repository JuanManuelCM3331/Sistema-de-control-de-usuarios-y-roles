<?php
session_start();

if(!isset($_SESSION["usuario"])){
header("Location: ../Sistema/loginVS.php");
exit();
}

if($_SESSION["rol"] != "admin"){
echo "Acceso denegado";
exit();
}
?>

<h2>Registrar Curso</h2>

<form action="insertarCurso.php" method="POST">

Nombre del curso
<br>
<input type="text" name="nombre">

<br><br>

Descripción
<br>
<input type="text" name="descripcion">

<br><br>

<button type="submit">Guardar</button>

</form>
