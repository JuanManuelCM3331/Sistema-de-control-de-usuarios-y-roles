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
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Usuario</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-slate-200 to-slate-300 min-h-screen flex items-center justify-center font-sans">

    <div class="bg-white p-10 rounded-2xl shadow-xl w-full max-w-lg">

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Editar Usuario
        </h2>

        <form action="actualizarUsuarios.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $usuario["id"]; ?>">

            <div class="mb-4">
                <label class="block text-gray-600 mb-1">Nombre</label>
                <input type="text" name="nombre"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition"
                    value="<?php echo $usuario["nombre"]; ?>">
            </div>

            <div class="mb-4">
                <label class="block text-gray-600 mb-1">Email</label>
                <input type="email" name="email"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition"
                    value="<?php echo $usuario["email"]; ?>">
            </div>

            <div class="mb-4">
                <label class="block text-gray-600 mb-1">Password</label>
                <input type="text" name="password"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition"
                    value="<?php echo $usuario["password"]; ?>">
            </div>

            <div class="mb-6">
                <label class="block text-gray-600 mb-1">Rol</label>

                <select name="rol"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition">

                    <option value="admin" <?php if($usuario["rol"]=="admin") echo "selected"; ?>>Admin</option>
                    <option value="usuario" <?php if($usuario["rol"]=="usuario") echo "selected"; ?>>Usuario</option>

                </select>

            </div>

            <button
                class="w-full py-2 rounded-lg text-white font-medium bg-gradient-to-r from-indigo-500 to-purple-500 hover:opacity-90 transition">
                Actualizar
            </button>

        </form>

    </div>

</body>
</html>