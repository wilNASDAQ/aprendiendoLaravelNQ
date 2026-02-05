<div {{$attributes -> merge(['class' => 'p-4 mb-4 text-sm rounded-lg ' . $estilo ])}}  role="alert">
    <span class="font-medium">{{ $title ?? 'Liquidado' }}</span>
    {{ $slot }}
</div>