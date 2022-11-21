@props(['active'])

@php
$classes = ($active ?? false)
            ? 'font-extrabold side-menu side-menu--active'
            : 'side-menu';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
