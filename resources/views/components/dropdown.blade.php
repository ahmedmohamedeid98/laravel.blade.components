@props(['alignment' => 'left'])

@php
    $alignmentClass = [
        "left" => "left-0",
        "right" => "right-0"
    ]
@endphp

<div class="relative" x-data="{open: false}" @click.away="open = false">
    <div @click="open = !open">
        {{ $trigger }}
    </div>
    <div class="absolute z-20 {{ $alignmentClass[$alignment] }} bg-white rounded shadow py-2 mt-1 w-40" 
    x-show="open"
    x-transition:enter="translate transform duration-300"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="translate transform duration-300"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    >
        {{ $slot }}
    </div>
</div>