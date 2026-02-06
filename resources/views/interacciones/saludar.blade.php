@extends('layouts.deafultView')

@section('title', 'Golpear')

@section('content')

    <h1> HOLA {{ strtoupper($nombre) }} </h1>

    <x-alerta-logica title="SALUDO" type="success">
        BIENVENIDO A LA APLICACION, {{ strtoupper($nombre) }}
    </x-alerta-logica>

    <h1>cosas</h1>
    
@endsection
