@extends('layouts.deafultView')

@section('title', 'BD')

@section('content')

    <h1 class="text-2xl font-bold text-stone-800">USUARIOS DE WINDAQ</h1>

    <div class="pt-2">
        <a href="{{ url('/bdFormulario') }}"
            class="inline-flex items-center rounded-md bg-stone-800 px-4 py-2 text-sm font-semibold text-white hover:bg-stone-900">
            VOLVER AL FORMULARIO
        </a>
    </div>

    @if ($windaq->isEmpty())
        <p class="mt-4 text-sm text-stone-600">No hay datos guardados.</p>
    @else
        <div class="mt-6 overflow-x-auto rounded-lg border border-stone-200 bg-white shadow-sm">
            <table class="min-w-full divide-y divide-stone-200 text-left text-sm text-stone-700">
                <thead class="bg-stone-100 text-xs uppercase tracking-wide text-stone-600">
                    <tr>
                        <th class="px-4 py-3 font-semibold">ID</th>
                        <th class="px-4 py-3 font-semibold">Nombre</th>
                        <th class="px-4 py-3 font-semibold">Email</th>
                        <th class="px-4 py-3 font-semibold">Contrasena</th>
                        <th class="px-4 py-3 font-semibold">Razon</th>
                        <th class="px-4 py-3 font-semibold">Tipo de Trader</th>
                        <th class="px-4 py-3 font-semibold">Creado</th>
                        <th class="px-4 py-3 font-semibold">Actualizado</th>
                        <th class="px-4 py-3 text-right font-semibold">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-100">
                    @foreach ($windaq as $item)
                        <tr class="{{ $loop->odd ? 'bg-white' : 'bg-stone-50' }}">
                            <td class="px-4 py-3 font-medium">{{ $item->id }}</td>
                            <td class="px-4 py-3">{{ $item->nombre }}</td>
                            <td class="px-4 py-3">{{ $item->correo_electronico }}</td>
                            <td class="px-4 py-3">{{ $item->contrasena }}</td>
                            <td class="px-4 py-3">{{ $item->razon }}</td>
                            <td class="px-4 py-3">{{ $item->campo_nuevo }}</td>
                            <td class="px-4 py-3">{{ $item->created_at }}</td>
                            <td class="px-4 py-3">{{ $item->updated_at }}</td>
                            <td class="px-4 py-3">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ url('/bdEditar/' . $item->id) }}"
                                        class="rounded bg-blue-600 px-3 py-1 text-sm text-white hover:bg-blue-700">Editar</a>
                                    <button class="rounded bg-red-600 px-3 py-1 text-sm text-white hover:bg-red-700">Eliminar</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

@endsection
