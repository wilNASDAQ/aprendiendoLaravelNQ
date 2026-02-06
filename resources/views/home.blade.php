@extends('layouts.deafultView')

@section('title', 'Home')

@push('styles')
    <style>
        h1 {
            color: rgb(0, 255, 42);
        }
    </style>
@endpush

@push('styles')
    <style>
        body {
            background-color: #aba05e;
            ;
        }
    </style>
@endpush



@section('content')

    <h1> HOLA TRADER</h1>

    <x-alerta-logica title="HOME" type="info">
        ESTAS EN EL HOME PAGE
    </x-alerta-logica>

    <h1>cosas</h1>

@endsection
