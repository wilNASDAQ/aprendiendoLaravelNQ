<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title', 'notDefine')</title>

    @stack('styles')
</head>

<body>
    <div class="max-w-7xl mx-auto px-4">

        @yield('content')

    </div>

</body>

</html>


{{--Este es el layout principal de la aplicacion, desde aqui se extienden las demas vistas, 
se define una seccion para el titulo y otra para el contenido, ademas se utiliza @stack 
para agregar estilos personalizados desde las vistas hijas.--}}