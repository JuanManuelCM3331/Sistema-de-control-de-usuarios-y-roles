<?php
session_start();

if(!isset($_SESSION["usuario"])){
header("Location: loginVS.php");
exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-slate-200 to-slate-300 min-h-screen flex items-center justify-center font-sans">

    <div class="bg-white p-10 rounded-2xl shadow-xl w-full max-w-lg text-center">

        <h2 class="text-2xl font-bold text-gray-800 mb-2">
            Bienvenido <?php echo $_SESSION["usuario"]; ?>
        </h2>

        <p class="text-gray-600 mb-6">
            Rol: <?php echo $_SESSION["rol"]; ?>
        </p>

        <hr class="mb-6">

        <div class="space-y-3">

            <a href="../Cursos/listarCursoVS.php"
               class="block w-full py-2 rounded-lg text-white font-medium bg-gradient-to-r from-indigo-500 to-purple-500 hover:opacity-90 transition">
               Ver Cursos
            </a>

            <?php if($_SESSION["rol"] == "admin"){ ?>

            <a href="../Usuarios/listarUsuariosVS.php"
               class="block w-full py-2 rounded-lg text-white font-medium bg-gradient-to-r from-indigo-500 to-purple-500 hover:opacity-90 transition">
               Gestionar Usuarios
            </a>

            <?php } ?>

            <a href="logout.php"
               class="block w-full py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 transition">
               Cerrar sesión
            </a>

        </div>

    </div>

</body>
</html>