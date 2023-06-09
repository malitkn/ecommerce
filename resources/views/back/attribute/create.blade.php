@extends('back.layouts.master')
@section('title', 'Özellik Oluştur')

@section('content')
    <div class="page-header">
        <h3 class="page-title"> Özellik Oluştur </h3>
        {{ Breadcrumbs::render('attributes.create') }}
    </div>

    <div class="row">
        <div class="col-lg-12 animate__animated animate__fadeIn animate__slow grid-margin">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.attributes.store') }}" method="post">
                        @csrf
                        <x-back.form.input title="Özellik Adı" name="name"/>
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






