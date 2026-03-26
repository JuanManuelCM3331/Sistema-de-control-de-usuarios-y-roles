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

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registrar Curso</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-slate-200 to-slate-300 min-h-screen flex items-center justify-center font-sans">

    <div class="bg-white p-10 rounded-2xl shadow-xl w-full max-w-md">

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Registrar Curso
        </h2>

        <form action="insertarCurso.php" method="POST">

            <div class="mb-4">
                <label class="block text-gray-600 mb-1">Nombre del curso</label>
                <input type="text" name="nombre"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition">
            </div>

            <div class="mb-6">
                <label class="block text-gray-600 mb-1">Descripción</label>
                <input type="text" name="descripcion"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition">
            </div>

            <button type="submit"
                class="w-full py-2 rounded-lg text-white font-medium bg-gradient-to-r from-indigo-500 to-purple-500 hover:opacity-90 transition">
                Guardar
            </button>

        </form>

    </div>

</body>
</html>
