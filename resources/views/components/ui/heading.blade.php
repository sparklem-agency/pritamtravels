@props(['title', 'subtitle' => null])
<div {{ $attributes->merge(['class' => 'space-y-3']) }} data-animate="fadeUp">
    @if ($subtitle)
        <span class="uppercase text-secondary font-medium tracking-widest"
            data-animate="fadeLeft">{{ $subtitle }}</span>
    @endif
    <h2 class="text-3xl font-bold capitalize" data-animate="fadeRight">{{ $title }}</h2>
</div>
