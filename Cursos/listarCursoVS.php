<?php
session_start();
require "../Sistema/conexion.php";

if(!isset($_SESSION["usuario"])){
header("Location: ../Sistema/loginVS.php");
exit();
}

$sql = "SELECT * FROM cursos";
$stmt = $conexion->prepare($sql);
$stmt->execute();

$cursos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Lista de Cursos</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-slate-200 to-slate-300 min-h-screen font-sans">

    <div class="max-w-5xl mx-auto py-10">

        <div class="bg-white p-8 rounded-2xl shadow-xl">

            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                Lista de Cursos
            </h2>

            <?php if($_SESSION["rol"] == "admin"){ ?>
                <div class="mb-4 text-right">
                    <a href="registrarCursoVS.php"
                       class="px-4 py-2 rounded-lg text-white font-medium bg-gradient-to-r from-indigo-500 to-purple-500 hover:opacity-90 transition">
                       Nuevo Curso
                    </a>
                </div>
            <?php } ?>

            <div class="overflow-x-auto">
                <table class="w-full border-collapse">

                    <thead>
                        <tr class="bg-gray-100 text-gray-700">
                            <th class="py-3 px-4 text-left">ID</th>
                            <th class="py-3 px-4 text-left">Nombre</th>
                            <th class="py-3 px-4 text-left">Descripción</th>

                            <?php if($_SESSION["rol"] == "admin"){ ?>
                                <th class="py-3 px-4 text-left">Acciones</th>
                            <?php } ?>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach($cursos as $c){ ?>
                        <tr class="border-t hover:bg-gray-50">

                            <td class="py-2 px-4"><?php echo $c["id"]; ?></td>
                            <td class="py-2 px-4"><?php echo $c["nombre"]; ?></td>
                            <td class="py-2 px-4"><?php echo $c["descripcion"]; ?></td>

                            <?php if($_SESSION["rol"] == "admin"){ ?>
                            <td class="py-2 px-4 space-x-2">

                                <a href="editarCursoVS.php?id=<?php echo $c["id"]; ?>"
                                   class="text-indigo-600 hover:underline">
                                   Editar
                                </a>

                                <a href="eliminarCurso.php?id=<?php echo $c["id"]; ?>"
                                   class="text-red-600 hover:underline">
                                   Eliminar
                                </a>

                            </td>
                            <?php } ?>

                        </tr>
                        <?php } ?>

                    </tbody>

                </table>
            </div>

        </div>

    </div>

</body>
</html>