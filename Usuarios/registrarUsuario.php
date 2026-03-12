<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<title>Registrar Usuario</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Registrar Usuario</h2>

<form action="insertarUsuario.php" method="POST">

<div class="mb-3">
<label>Nombre</label>
<input type="text" name="nombre" class="form-control" required>
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label>Password</label>
<input type="text" name="password" class="form-control" required>
</div>

<div class="mb-3">
<label>Rol</label>

<select name="rol" class="form-control">

<option value="admin">Admin</option>
<option value="usuario">Usuario</option>

</select>

</div>

<button class="btn btn-success">Guardar</button>

<a href="listarUsuarios.php" class="btn btn-secondary">Volver</a>

</form>

</div>

</body>
</html>