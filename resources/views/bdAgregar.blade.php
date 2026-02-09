@extends('layouts.deafultView')

@section('title', 'BD')

@section('content')

    <x-alerta-logica title="BD" type="success">
        DATOS GUARDADOS EN LA BASE DE DATOS
    </x-alerta-logica>

    <h1>Datos guardados</h1>
    <p>Nombre: {{ $windaq->nombre }}</p>
    <p>Email: {{ $windaq->correo_electronico }}</p>
    <p>Contrasena: {{ $windaq->contrasena }}</p>
    <p>Razon: {{ $windaq->razon }}</p>
    <p>Campo nuevo: {{ $windaq->campo_nuevo }}</p>
    <p>Creado: {{ $windaq->created_at }}</p>
    <p>Actualizado: {{ $windaq->updated_at }}</p>

@endsection
