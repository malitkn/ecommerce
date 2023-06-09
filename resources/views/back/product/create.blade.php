@extends('back.layouts.master')
@section('title', 'Ürün Oluştur')
@push('css')
    <link rel="stylesheet" href="{{ asset('back/assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back/assets/vendors/select2/select2-bootstrap.min.css') }}">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>
@endpush
@section('content')
    <div class="page-header">
        <h3 class="page-title"> Ürün Oluştur</h3>
        {{ Breadcrumbs::render('products.create') }}
    </div>
    @livewire('back.product.create')
@endsection

@push('custom-footer')
    <script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script type="text/javascript">
        $('#lfm').filemanager('image');

    </script>
    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
    <x-back.textarea.tinymce.config/>
@endpush


