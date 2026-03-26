<?php
session_start();

if(!isset($_SESSION["usuario"])){
header("Location: loginVS.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>

<body>

<h2>Bienvenido <?php echo $_SESSION["usuario"]; ?></h2>
<p>Rol: <?php echo $_SESSION["rol"]; ?></p>

<hr>

<a href="../Cursos/listarCursoVS.php">Ver Cursos</a>
<br><br>

<?php if($_SESSION["rol"] == "admin"){ ?>

<a href="../Usuarios/listarUsuariosVS.php">Gestionar Usuarios</a>

<?php } ?>

<br><br>

<a href="logout.php">Cerrar sesión</a>

</body>
</html>