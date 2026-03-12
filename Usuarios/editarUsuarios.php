<?php

require "../Sistema/conexion.php";


$id = $_GET["id"];

$sql = "SELECT * FROM usuarios WHERE id=:id";

$stmt = $conexion->prepare($sql);

$stmt->bindParam(":id",$id);

$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>

<title>Editar Usuario</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Editar Usuario</h2>

<form action="actualizarUsuarios.php" method="POST">

<input type="hidden" name="id" value="<?php echo $usuario["id"]; ?>">

<div class="mb-3">
<label>Nombre</label>
<input type="text" name="nombre" class="form-control" value="<?php echo $usuario["nombre"]; ?>">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" value="<?php echo $usuario["email"]; ?>">
</div>

<div class="mb-3">
<label>Password</label>
<input type="text" name="password" class="form-control" value="<?php echo $usuario["password"]; ?>">
</div>

<div class="mb-3">
<label>Rol</label>

<select name="rol" class="form-control">

<option value="admin" <?php if($usuario["rol"]=="admin") echo "selected"; ?>>Admin</option>
<option value="usuario" <?php if($usuario["rol"]=="usuario") echo "selected"; ?>>Usuario</option>

</select>

</div>

<button class="btn btn-success">Actualizar</button>

</form>

</div>

</body>
</html>