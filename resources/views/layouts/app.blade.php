<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Productos</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="container mx-auto grid grid-cola-6 py-10 px-6 mt-7">
        <div class=col-span-1>
            @yield('menu')
        </div>
        <div class="col-span-3">
            @yield('contenido')
        </div>
        <div class="col-span-3">
            @yield('formulario')
        </div>
    </div>
</body>
</html>
