<?php
session_start();
require "../Sistema/conexion.php";

if(!isset($_SESSION["usuario"])){
header("Location: ../Sistema/loginVS.php");
exit();
}

$sql = "SELECT * FROM cursos";
$stmt = $conexion->prepare($sql);
$stmt->execute();

$cursos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Lista de Cursos</h2>

<?php if($_SESSION["rol"] == "admin"){ ?>
<a href="registrarCursoVS.php">Nuevo Curso</a>
<?php } ?>

<br><br>

<table border="1">

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Descripción</th>

<?php if($_SESSION["rol"] == "admin"){ ?>
<th>Acciones</th>
<?php } ?>

</tr>

<?php foreach($cursos as $c){ ?>

<tr>

<td><?php echo $c["id"]; ?></td>
<td><?php echo $c["nombre"]; ?></td>
<td><?php echo $c["descripcion"]; ?></td>

<?php if($_SESSION["rol"] == "admin"){ ?>

<td>

<a href="editarCursoVS.php?id=<?php echo $c["id"]; ?>">Editar</a>

<a href="eliminarCurso.php?id=<?php echo $c["id"]; ?>">Eliminar</a>

</td>

<?php } ?>

</tr>

<?php } ?>

</table>