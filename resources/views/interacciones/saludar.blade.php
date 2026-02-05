<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>SALUDO</title>
</head>

<body>

    <div class="max-w-7xl mx-auto px-4">

            <h1> HOLA {{ strtoupper($nombre) }} </h1>

        <x-alerta-logica title="SALUDO" type="success">
            BIENVENIDO A LA APLICACION, {{ strtoupper($nombre) }}
        </x-alerta-logica>

        <h1>cosas</h1>

    </div>

</body>

</html>
