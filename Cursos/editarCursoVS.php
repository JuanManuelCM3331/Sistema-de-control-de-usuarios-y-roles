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
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Curso</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-slate-200 to-slate-300 min-h-screen flex items-center justify-center font-sans">

    <div class="bg-white p-10 rounded-2xl shadow-xl w-full max-w-lg">

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Editar Curso
        </h2>

        <form action="actualizarCurso.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $curso["id"]; ?>">

            <div class="mb-4">
                <label class="block text-gray-600 mb-1">Nombre</label>
                <input type="text" name="nombre"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition"
                    value="<?php echo $curso["nombre"]; ?>">
            </div>

            <div class="mb-4">
                <label class="block text-gray-600 mb-1">Descripción</label>
                <textarea name="descripcion"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition"><?php echo $curso["descripcion"]; ?></textarea>
            </div>

            <div class="mb-6">
                <label class="block text-gray-600 mb-1">Profesor</label>
                <input type="text" name="profesor"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition"
                    value="<?php echo $curso["profesor"]; ?>">
            </div>

            <button
                class="w-full py-2 rounded-lg text-white font-medium bg-gradient-to-r from-indigo-500 to-purple-500 hover:opacity-90 transition">
                Actualizar
            </button>

        </form>

    </div>

</body>
</html>