@props(['active'])

@php
$classes = ($active ?? false)
            ? 'side-menu__sub-open'
            : '';
@endphp

<ul {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</ul>
