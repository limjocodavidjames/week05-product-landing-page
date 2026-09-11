@props([
    'variant' => 'primary',
    'size' => 'md',
    'href' => null,
    'type' => 'button',
])

@php
$base = 'inline-flex items-center justify-center font-bold rounded-full transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2';

$variants = [
    'primary'   => 'bg-pc-yellow text-pc-green hover:bg-pc-yellow-light focus:ring-pc-yellow',
    'secondary' => 'bg-white text-pc-green border-2 border-pc-green hover:bg-pc-cream focus:ring-pc-green',
    'outline'   => 'bg-transparent text-white border-2 border-white hover:bg-white hover:text-pc-green focus:ring-white',
    'danger'    => 'bg-pc-red text-white hover:opacity-90 focus:ring-pc-red',
];

$sizes = [
    'sm' => 'px-4 py-2 text-sm',
    'md' => 'px-6 py-3 text-base',
    'lg' => 'px-8 py-4 text-lg',
];

$classes = $base . ' ' . ($variants[$variant] ?? $variants['primary']) . ' ' . ($sizes[$size] ?? $sizes['md']);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif