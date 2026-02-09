@extends('layouts.deafultView')

@section('title', 'BD')

@section('content')

    <x-alerta-logica title="BD" type="success">
        DATOS GUARDADOS EN LA BASE DE DATOS
    </x-alerta-logica>

    <h1 class="text-2xl font-bold text-stone-800">Datos guardados</h1>

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
                        <th class="px-4 py-3 font-semibold">Campo nuevo</th>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

@endsection
