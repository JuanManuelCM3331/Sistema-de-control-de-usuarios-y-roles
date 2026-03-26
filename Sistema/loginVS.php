<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-slate-200 to-slate-300 min-h-screen flex items-center justify-center font-sans">

    <div class="bg-white p-10 rounded-2xl shadow-xl w-full max-w-md">

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Iniciar Sesión
        </h2>

        <form action="validar.php" method="POST">

            <div class="mb-4">
                <label class="block text-gray-600 mb-1">Email</label>
                <input type="email" name="email"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition"
                    required>
            </div>

            <div class="mb-5">
                <label class="block text-gray-600 mb-1">Contraseña</label>
                <input type="password" name="password"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition"
                    required>
            </div>

            <button
                class="w-full py-2 rounded-lg text-white font-medium bg-gradient-to-r from-indigo-500 to-purple-500 hover:opacity-90 transition">
                Ingresar
            </button>

        </form>

    </div>

</body>

</html>