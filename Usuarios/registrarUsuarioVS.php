<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registrar Usuario</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-slate-200 to-slate-300 min-h-screen flex items-center justify-center font-sans">

    <div class="bg-white p-10 rounded-2xl shadow-xl w-full max-w-lg">

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Registrar Usuario
        </h2>

        <form action="insertarUsuario.php" method="POST">

            <div class="mb-4">
                <label class="block text-gray-600 mb-1">Nombre</label>
                <input type="text" name="nombre"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition"
                    required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-600 mb-1">Email</label>
                <input type="email" name="email"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition"
                    required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-600 mb-1">Password</label>
                <input type="text" name="password"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition"
                    required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-600 mb-1">Rol</label>

                <select name="rol"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition">

                    <option value="admin">Admin</option>
                    <option value="usuario">Usuario</option>

                </select>

            </div>

            <div class="flex gap-3">

                <button
                    class="w-full py-2 rounded-lg text-white font-medium bg-gradient-to-r from-indigo-500 to-purple-500 hover:opacity-90 transition">
                    Guardar
                </button>

                <a href="listarUsuariosVS.php"
                   class="w-full text-center py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 transition">
                   Volver
                </a>

            </div>

        </form>

    </div>

</body>
</html>