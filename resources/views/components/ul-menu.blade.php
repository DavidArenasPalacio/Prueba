@props(['active'])

@php
$classes = ($active ?? false)
            ? 'menu__sub-open'
            : '';
@endphp

<ul {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</ul>
