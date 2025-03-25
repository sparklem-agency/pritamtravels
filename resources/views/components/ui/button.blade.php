@props([
    'href' => null,
    'type' => 'button',
])

@php
    $baseClass = 'btn-primary';
    $buttonClass = '';
    $linkClass = '';
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => "$baseClass $linkClass"]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => "$baseClass $buttonClass"]) }}>
        {{ $slot }}
    </button>
@endif
