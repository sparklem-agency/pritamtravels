@props(['title', 'subtitle' => null])
<div {{ $attributes->merge(['class' => 'space-y-3']) }}>
    @if ($subtitle)
        <span class="uppercase text-secondary font-medium tracking-widest">{{ $subtitle }}</span>
    @endif
    <h2 class="text-3xl font-bold capitalize">{{ $title }}</h2>
</div>
