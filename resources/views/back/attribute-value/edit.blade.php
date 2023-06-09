@extends('back.layouts.master')
@section('title', 'Değer Düzenle')

@section('content')
    <div class="page-header">
        <h3 class="page-title"> {{ $attributeValue->name }} Düzenle </h3>
        {{ Breadcrumbs::render('attribute-values.edit') }}
    </div>

    <div class="row">
        <div class="col-lg-12 animate__animated animate__fadeIn animate__slow grid-margin">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.attribute-values.update', $attributeValue->id) }}" enctype="multipart/form-data" method="post">
                        @method('PUT')
                        @csrf
                        <x-back.form.select name="attribute_id" label="Özellik" placeholder="Seçiniz.." >
                            @foreach($attributes as $attribute)
                                <option {{ $attributeValue->attribute_id == $attribute->id ? 'selected' : '' }} value="{{ $attribute->id }}"> {{ $attribute->name }} </option>
                            @endforeach
                        </x-back.form.select>
                        <x-back.form.input title="Değer" value="{{ $attributeValue->name }}" name="name"/>
                        <x-back.form.file id="image" title="Resim" name="image"></x-back.form.file>
                        <x-back.button type="submit" color="primary">Güncelle</x-back.button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('custom-footer')
    <script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script type="text/javascript">
        $('#lfm').filemanager('image');
    </script>
    <x-back.textarea.tinymce.config/>

@endpush






