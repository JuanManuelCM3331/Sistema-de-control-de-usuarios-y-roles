<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Educativo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-100 to-indigo-200 min-h-screen font-sans">

    <header class="bg-white shadow-md">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-center">
            <h1 class="text-xl font-bold text-indigo-600">Sistema Educativo</h1>
        </div>
    </header>

    <main class="flex items-center justify-center px-6 py-16">
        <div class="bg-white rounded-2xl shadow-xl p-10 max-w-2xl text-center">

            <h2 class="text-4xl font-bold text-gray-800 mb-4">
                Gestión Educativa
            </h2>

            <p class="text-gray-600 mb-6 leading-relaxed">
                Una plataforma diseñada para la gestión eficiente de usuarios, 
                roles y procesos dentro de entornos educativos. 
                Ideal para instituciones que buscan organización y control.
            </p>

            <div class="flex justify-center gap-4">
                <a href="loginVS.php"
                   class="bg-indigo-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-indigo-700 transition duration-300">
                   Iniciar sesión
                </a>

                <a href="#"
                   class="border border-indigo-600 text-indigo-600 px-6 py-3 rounded-lg hover:bg-indigo-600 hover:text-white transition duration-300">
                   Saber más
                </a>
            </div>

        </div>
    </main>

    <section class="max-w-6xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-6">

        <div class="bg-white p-6 rounded-xl shadow-md text-center">
            <h3 class="font-bold text-lg mb-2 text-indigo-600">Usuarios</h3>
            <p class="text-gray-600">Administra estudiantes, docentes y administradores fácilmente.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md text-center">
            <h3 class="font-bold text-lg mb-2 text-indigo-600">Roles</h3>
            <p class="text-gray-600">Define permisos y accesos según cada tipo de usuario.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md text-center">
            <h3 class="font-bold text-lg mb-2 text-indigo-600">Seguridad</h3>
            <p class="text-gray-600">Control y protección de la información en todo momento.</p>
        </div>

    </section>

</body>
</html>