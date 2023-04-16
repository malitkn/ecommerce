<div class="form-group">
    <label for="{{ $name }}">{{ $title }}</label>
    <input {{ $attributes->merge(['class' => 'form-control', 'name' => $name]) }}>
    @error($name)
    <span class="text-danger  animate__animated animate__fadeIn">
        {{ $message }}
    </span>
    @enderror
</div>
