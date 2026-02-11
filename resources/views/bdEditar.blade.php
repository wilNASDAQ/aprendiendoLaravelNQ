@extends('layouts.deafultView')

@section('title', 'Editar Registro a WINDAQ')

@section('content')

    <section class="my-10 max-w-2xl rounded-lg border border-stone-200 bg-white p-6 shadow-sm">
        <h1 class="text-2xl font-semibold text-stone-800">Actualiza tu registro</h1>
        <p class="mt-2 text-sm text-stone-600">Revisa y guarda los cambios.</p>

        <form action="{{ url('/bdActualizar/' . $windaq->id) }}" method="POST" class="mt-6 grid gap-4">
            @csrf
            @method('PUT')
            
            <div>
                <label class="text-sm font-medium text-stone-700" for="nombre">Conozcámonos, ¿cómo te llamas trader?
                </label>
                <input
                    class="mt-2 w-full rounded-md border border-stone-300 px-3 py-2 text-stone-800 focus:border-stone-400 focus:outline-none"
                    id="nombre" name="nombre" type="text"
                    value="{{ old('nombre', $windaq->nombre) }}"
                    placeholder=" Ej: Wilmer (tranquilo, no es un interrogatorio" required>
            </div>

            <div>
                <label class="text-sm font-medium text-stone-700" for="correo_electronico">¿A qué correo te mandamos las
                    buenas noticias? </label>
                <input
                    class="mt-2 w-full rounded-md border border-stone-300 px-3 py-2 text-stone-800 focus:border-stone-400 focus:outline-none"
                    id="correo_electronico" name="correo_electronico" type="email"
                    value="{{ old('correo_electronico', $windaq->correo_electronico) }}"
                    placeholder="Prometido: cero spam, cero cadenas, cero “buenos días grupo”" required>
            </div>

            <div>
                <label class="text-sm font-medium text-stone-700" for="contrasena">Crea una contraseña (prometemos no
                    olvidarla)</label>
                <input
                    class="mt-2 w-full rounded-md border border-stone-300 px-3 py-2 text-stone-800 focus:border-stone-400 focus:outline-none"
                    id="contrasena" name="contrasena" type="password"
                    value="{{ old('contrasena', $windaq->contrasena) }}"
                    placeholder="Mínimo 8 caracteres. Tip: “12345678” no cuenta" required>
            </div>

            <div>
                <label class="text-sm font-medium text-stone-700" for="razon">Ahora sí, ¿qué plan tienes con
                    nosotros?</label>
                <textarea
                    class="mt-2 min-h-[110px] w-full rounded-md border border-stone-300 px-3 py-2 text-stone-800 focus:border-stone-400 focus:outline-none"
                    id="razon" name="razon" placeholder="Ej: Sacar a la familia adelante" required>{{ old('razon', $windaq->razon) }}</textarea>
            </div>

            <div>
                <label class="text-sm font-medium text-stone-700" for="campo_nuevo">¿Qué tipo de trader eres?</label>
                <select
                    class="mt-2 w-full rounded-md border border-stone-300 bg-white px-3 py-2 text-stone-800 focus:border-stone-400 focus:outline-none"
                    id="campo_nuevo" name="campo_nuevo" required>
                    <option value="" disabled {{ old('campo_nuevo', $windaq->campo_nuevo) ? '' : 'selected' }}>No esta el tipo flojo </option>
                    <option value="Conservador" {{ old('campo_nuevo', $windaq->campo_nuevo) === 'Conservador' ? 'selected' : '' }}>Conservador</option>
                    <option value="Moderado" {{ old('campo_nuevo', $windaq->campo_nuevo) === 'Moderado' ? 'selected' : '' }}>Moderado</option>
                    <option value="Agresivo" {{ old('campo_nuevo', $windaq->campo_nuevo) === 'Agresivo' ? 'selected' : '' }}>Agresivo</option>
                </select>
            </div>

            <div class="pt-2">
                <button class="rounded-md bg-stone-800 px-4 py-2 text-sm font-semibold text-white hover:bg-stone-900"
                    type="submit">
                    Actualizar
                </button>
            </div>
        </form>
    </section>
    <div class="pt-2">
                <a href="{{ url('/bdMostrar') }}"
                    class="inline-flex items-center rounded-md bg-stone-800 px-4 py-2 text-sm font-semibold text-white hover:bg-stone-900">
                    VER REGISTROS
                </a>
            </div>
@endsection
