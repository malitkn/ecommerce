@props([
    'id' => '',
    'name' => '',
    'label' => '',
    'checked' => false,
])
<div class="form-group custom-control custom-switch">
        <input class="custom-control-input" {{ $attributes }} type="checkbox" id="{{ $id }}" name="{{ $name }}" {{ $checked ? 'checked' : '' }}>
        <label class="custom-control-label" for="{{ $id }}">{{ $label }}</label>
</div>

