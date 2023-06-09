@props([
    'name' => '',
    'label' => '',
    'options' => [],
    'value' => '',
    'placeholder' => '',
    'attributes' => []
])

<div class="form-group">
    @if($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endif
    <select
        name="{{ $name }}"
        id="{{ $name }}"
        class="form-control {{ $attributes['class'] ?? '' }}"
        {{ $attributes }}
    >
        @if($placeholder)
            <option value="">{{ $placeholder }}</option>
        @endif
        @foreach($options as $key => $option)
            <option value="{{ $key }}" {{ $key == $value ? 'selected' : '' }}>{{ $option }}</option>
        @endforeach

        {{ $slot }}
    </select>
</div>
