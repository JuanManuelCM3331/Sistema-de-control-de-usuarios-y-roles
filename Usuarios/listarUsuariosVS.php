<?php
session_start();
require "../Sistema/conexion.php";

if(!isset($_SESSION["usuario"])){
header("Location: ../Sistema/loginVS.php");
exit();
}

if($_SESSION["rol"] != "admin"){
echo "Acceso denegado";
exit();
}

$sql = "SELECT * FROM usuarios";
$stmt = $conexion->prepare($sql);
$stmt->execute();

$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Lista de usuarios</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-slate-200 to-slate-300 min-h-screen font-sans">

    <div class="max-w-5xl mx-auto py-10">

        <div class="bg-white p-8 rounded-2xl shadow-xl">

            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                Lista de usuarios
            </h2>

            <div class="mb-4 text-right">
                <a href="registrarUsuarioVS.php"
                   class="px-4 py-2 rounded-lg text-white font-medium bg-gradient-to-r from-indigo-500 to-purple-500 hover:opacity-90 transition">
                   Nuevo Usuario
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full border-collapse">

                    <thead>
                        <tr class="bg-gray-100 text-gray-700">
                            <th class="py-3 px-4 text-left">ID</th>
                            <th class="py-3 px-4 text-left">Nombre</th>
                            <th class="py-3 px-4 text-left">Email</th>
                            <th class="py-3 px-4 text-left">Rol</th>
                            <th class="py-3 px-4 text-left">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach($usuarios as $u){ ?>
                        <tr class="border-t hover:bg-gray-50">

                            <td class="py-2 px-4"><?php echo $u["id"]; ?></td>
                            <td class="py-2 px-4"><?php echo $u["nombre"]; ?></td>
                            <td class="py-2 px-4"><?php echo $u["email"]; ?></td>
                            <td class="py-2 px-4"><?php echo $u["rol"]; ?></td>

                            <td class="py-2 px-4 space-x-2">

                                <a href="editarUsuariosVS.php?id=<?php echo $u["id"]; ?>"
                                   class="text-indigo-600 hover:underline">
                                   Editar
                                </a>

                                <a href="eliminarUsuarios.php?id=<?php echo $u["id"]; ?>"
                                   class="text-red-600 hover:underline">
                                   Eliminar
                                </a>

                            </td>

                        </tr>
                        <?php } ?>

                    </tbody>

                </table>
            </div>

        </div>

    </div>

</body>
</html>