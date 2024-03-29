@props(['route'])

@php
    $classes = Request::routeIs($route) ? 'text-blue-500 underline' : 'hove:text-blue-500';
@endphp


<a {{ $attributes->merge(['class' => 'px-6 hover:underline hover:text-blue-500 '.$classes]) }} " href="{{ route($route) }}">
    {{ $slot }}
</a>
