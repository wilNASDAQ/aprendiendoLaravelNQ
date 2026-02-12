# Aprendiendo Laravel NQ

Proyecto de practica con Laravel. Incluye un CRUD basico para la tabla `usuarios` y vistas con listado, formulario, edicion y paginacion.

## Requisitos

- Laravel 12.x
- PHP 8.2+
- Composer
- Node.js 18+ y npm
- Base de datos (PostgreSQL)
- Extension PHP: pdo_pgsql

## Instalacion

1) Instala dependencias de PHP:

```
composer install
```

2) Instala dependencias front:

```
npm install
```

3) Copia el archivo de entorno y genera la clave:

```
copy .env.example .env
php artisan key:generate
```

4) Configura la DB en `.env`:

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=


```

## Migraciones

Ejecuta las migraciones:

```
php artisan migrate
```

## Ejecutar la app

Servidor local:

```
php artisan serve
```

Assets (Vite):

```
npm run dev
```

## Rutas principales

- `/bdFormulario` Formulario para crear usuarios
- `/bdMostrar` Listado con paginacion
- `/bdEditar/{windaq}` Editar usuario
- `/bdEliminar/{windaq}` Eliminar usuario

## Datos de prueba

Puedes crear datos fake con la ruta:

```
/ttt/{cantidad?}
```

Ejemplo para 20 registros:

```
/ttt/20
```

## Paginacion

El listado usa paginacion. La vista esta personalizada en:

```
resources/views/vendor/pagination/tailwind.blade.php
```

## Tests

```
php artisan test
```

## Notas

- El modelo usado en el CRUD es `windaq`.
- El campo `correo_electronico` es unico.
- Si ves errores de assets, ejecuta `npm run dev`.
