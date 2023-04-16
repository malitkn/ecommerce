<div>
    <label for="{{ $id }}">{{ $title }}</label>
    <div class="input-group">
        <div class="input-group-btn">
            <a id="lfm" data-input="{{ $id }}" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Seç
            </a>
        </div>
        <input id="{{ $id }}" class="form-control" value="{{ $value }}" type="text" name="{{ $name }}">
    </div>
    @error($name)
    <span class="text-danger  animate__animated animate__fadeIn">
        {{ $message }}
    </span>
    @enderror
    <div id="holder" class="img-lg" style="margin-top:15px;max-height:100px;">
</div>
