<?php

require "../Sistema/conexion.php";


$id = $_GET["id"];

$sql = "SELECT * FROM cursos WHERE id=:id";

$stmt = $conexion->prepare($sql);
$stmt->bindParam(":id",$id);
$stmt->execute();

$curso = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>

<title>Editar Curso</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Editar Curso</h2>

<form action="actualizarCurso.php" method="POST">

<input type="hidden" name="id" value="<?php echo $curso["id"]; ?>">

<div class="mb-3">
<label>Nombre</label>
<input type="text" name="nombre" class="form-control" value="<?php echo $curso["nombre"]; ?>">
</div>

<div class="mb-3">
<label>Descripción</label>
<textarea name="descripcion" class="form-control"><?php echo $curso["descripcion"]; ?></textarea>
</div>

<div class="mb-3">
<label>Profesor</label>
<input type="text" name="profesor" class="form-control" value="<?php echo $curso["profesor"]; ?>">
</div>

<button class="btn btn-primary">Actualizar</button>

</form>

</div>

</body>
</html>