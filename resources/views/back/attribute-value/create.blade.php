@extends('back.layouts.master')
@section('title', 'Özellik Değeri Oluştur')

@section('content')
    <div class="page-header">
        <h3 class="page-title"> Özellik Değeri Oluştur </h3>
        {{ Breadcrumbs::render('attribute-values.create') }}
    </div>

    <div class="row">
        <div class="col-lg-12 animate__animated animate__fadeIn animate__slow grid-margin">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.attribute-values.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <x-back.form.select name="attribute_id" label="Özellik" placeholder="Seçiniz.." >
                            @foreach($attributes as $attribute)
                                <option value="{{ $attribute->id }}"> {{ $attribute->name }} </option>
                            @endforeach
                        </x-back.form.select>
                        <x-back.form.input title="Değer" name="name"/>
                        <x-back.form.file id="image" title="Resim" name="image"></x-back.form.file>
                        <x-back.button type="submit" color="success">Oluştur</x-back.button>
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






