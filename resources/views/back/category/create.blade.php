@extends('back.layouts.master')
@section('title', 'Kategori Oluştur')

@section('content')
    <div class="page-header">
        <h3 class="page-title"> Kategori Oluştur</h3>
        {{ Breadcrumbs::render('categories.create') }}
    </div>

    <div class="row">
        <div class="col-lg-12 animate__animated animate__fadeIn animate__slow grid-margin">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.categories.store') }}" method="post">
                        @csrf
                        <x-back.form.select name="parent" label="Ebeveyn Kategori (Ebeveyn Kategori Oluşturmak için boş bırakın.)" placeholder="Kategori seçiniz.." :options="$categories" />
                        <livewire:back.slug title="Kategori Adı" slug-title="Kategori URL"/>
                        <input type="hidden" name="slug">
                        <x-back.form.input type="text" name="meta_title" title="Kategori Meta Başlığı"/>
                        <x-back.textarea.default id="meta_description" name="meta_description" title="Kategori Meta Açıklaması"/>
                        <x-back.form.file :id="'image'" :name="'image'" title="Kategori Resmi"/>
                        <x-back.button type="submit" color="success">Oluştur</x-back.button>s
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






