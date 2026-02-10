<div {{$attributes -> merge(['class' => 'p-4 mb-4 text-sm rounded-lg ' . $estilo ])}}  role="alert">
    <span class="font-medium">{{ $title }}</span>
    {{ $slot }}
</div>

{{--

formato en una sola clase (logica y vista en una sola clase)

@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $estilo = 'text-blue-800 bg-blue-100';
            break;

        case 'danger':
            $estilo = 'text-red-800 bg-red-100';
            break;

        case 'success':
            $estilo = 'text-green-800 bg-green-100';
            break;

        case 'warning':
            $estilo = 'text-yellow-800 bg-yellow-100';
            break;

        case 'neutral':
            $estilo = 'text-gray-800 bg-gray-100';
            break;

        default:
            $estilo = 'text-blue-800 bg-blue-100';
            break;
    }
@endphp

{{--

<div class="p-4 mb-4 text-sm rounded-lg {{ $estilo }}" role="alert">
    <span class="font-medium">{{ $title ?? 'Liquidado' }}</span>
    {{ $slot }}

</div>--}}



{{--
Attributes es una clase que trae cualquier caracteristtica que se ponga en este calo las alertas en el html
lo que se hizo aca fue combinar( cib ek merge) esos nuevos atributos con unos predeterminados y concatenar la clase de alerta
que se escoja
--}}

{{--S

<div {{$attributes -> merge(['class' => 'p-4 mb-4 text-sm rounded-lg ' . $estilo ])}}  role="alert">
    <span class="font-medium">{{ $title ?? 'Liquidado' }}</span>
    {{ $slot }}
</div>

--}}