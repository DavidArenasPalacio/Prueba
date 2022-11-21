@props(['active'])

@php
$classes = ($active ?? false)
            ? 'collapse-item active'
            : 'collapse-item';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
