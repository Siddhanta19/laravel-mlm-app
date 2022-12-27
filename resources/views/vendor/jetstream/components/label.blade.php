@props(['value'])

<label {{ $attributes->merge(['class' => 'label']) }}>
    <span class="label-text text-base"> {{ $value ?? $slot }} </span>
</label>
