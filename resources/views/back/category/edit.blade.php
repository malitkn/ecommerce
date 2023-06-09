@extends('back.layouts.master')
@section('title', $category->title)

@section('content')
    <div class="page-header">
        <h3 class="page-title"> {{$category->name}} Kategorisini Düzenle</h3>
        {{ Breadcrumbs::render('categories.edit') }}
    </div>

    <div class="row">
        <div class="col-lg-12 animate__animated animate__fadeIn animate__slow grid-margin">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.categories.update', $category->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <x-back.form.input type="text" name="name" value="{{ $category->name }}" title="Kategori Adı"/>
                        <x-back.form.input type="text" name="slug" value="{{ $category->slug }}" title="Kategori URL"/>
                        <x-back.form.input type="text" name="meta_title" value="{{ $category->meta_title }}"
                                           title="Kategori Meta Başlığı"/>
                        <x-back.textarea.default id="meta_description" name="meta_description"
                                                 title="Kategori Meta Açıklaması"> {{ $category->meta_description }} </x-back.textarea.default>
                        <x-back.form.file :id="'image'" :name="'image'" :value="$category->image"
                                          title="Kategori Resmi"/>
                        <x-back.form.checkbox name="status" label="Görünürlük" :is-checked="$category->status" ></x-back.form.checkbox>
                        <x-back.button type="submit" color="success">Düzenle</x-back.button>
                    </form>
                </div>
            </div>
        </div>
        <!-- TODO KATEGORİ ÜRÜNLERİ BURAYA GELİCEK -->
        <div class="col-lg-12 animate__animated animate__fadeIn animate__slow grid-margin">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-end">
                        <div class="text-black mr-auto"> {{$category->name . ' ' . 'Kategorisini Düzenle'}}</div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.categories.update', $category->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <x-back.form.input type="text" name="name" value="{{ $category->name }}" title="Kategori Adı"/>
                        <x-back.form.input type="text" name="slug" value="{{ $category->slug }}" title="Kategori URL"/>
                        <x-back.form.input type="text" name="meta_title" value="{{ $category->meta_title }}"
                                           title="Kategori Meta Başlığı"/>
                        <x-back.textarea.default id="meta_description" name="meta_description"
                                                 title="Kategori Meta Açıklaması"> {{ $category->meta_description }} </x-back.textarea.default>
                        <x-back.form.file :id="'image'" :name="'image'" :value="$category->image"
                                          title="Kategori Resmi"/>
                        <x-back.button type="submit" color="success">Düzenle</x-back.button>
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






