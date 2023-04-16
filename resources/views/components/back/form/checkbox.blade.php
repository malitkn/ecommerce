<div class="form-check">
    <label class="form-check-label">
        <input type="checkbox" {{ $attributes }} {{ $isChecked ? 'checked' : ''  }} name="{{ $name }}"  class="form-check-input">{{ $label }}<i class="input-helper"></i>
    </label>
    @error($name)
    <span class="text-danger  animate__animated animate__fadeIn">
        {{ $message }}
    </span>
    @enderror
</div>
