<?php
session_start();
require "../Sistema/conexion.php";

if(!isset($_SESSION["usuario"])){
header("Location: ../Sistema/loginVS.php");
exit();
}

if($_SESSION["rol"] != "admin"){
echo "Acceso denegado";
exit();
}

$sql = "SELECT * FROM usuarios";
$stmt = $conexion->prepare($sql);
$stmt->execute();

$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Lista de usuarios</h2>

<a href="registrarUsuarioVS.php">Nuevo Usuario</a>
<br><br>

<table border="1">

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Email</th>
<th>Rol</th>
<th>Acciones</th>
</tr>

<?php foreach($usuarios as $u){ ?>

<tr>

<td><?php echo $u["id"]; ?></td>
<td><?php echo $u["nombre"]; ?></td>
<td><?php echo $u["email"]; ?></td>
<td><?php echo $u["rol"]; ?></td>

<td>

<a href="editarUsuariosVS.php?id=<?php echo $u["id"]; ?>">Editar</a>

<a href="eliminarUsuarios.php?id=<?php echo $u["id"]; ?>">Eliminar</a>

</td>

</tr>

<?php } ?>

</table>