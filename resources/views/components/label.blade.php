@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-xl leading-6 text-dark font-bold mt-2']) }}>
    {{ $value ?? $slot }}
</label>
