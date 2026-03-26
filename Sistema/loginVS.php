<!DOCTYPE html>
<html>

<head>

<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Iniciar Sesión</h2>

<form action="validar.php" method="POST">

<div class="mb-3">

<label>Email</label>

<input type="email" name="email" class="form-control" required>

</div>

<div class="mb-3">

<label>Contraseña</label>

<input type="password" name="password" class="form-control" required>

</div>

<button class="btn btn-success">Ingresar</button>

</form>

</div>

</body>

</html>