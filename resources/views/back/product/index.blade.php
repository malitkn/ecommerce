@extends('back.layouts.master')
@section('title', 'Ürünler')
@section('content')
    <div class="page-header">
        <h3 class="page-title"> Ürünler </h3>
        {{ Breadcrumbs::render('products') }}
    </div>
    <div class="row">
        <div class="col-lg-12 animate__animated animate__fadeIn animate__slow grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a class="text-decoration-none" href="{{ route('admin.products.create') }}">
                            <x-back.button type="button" color="success"><i class="mdi mdi-new-box"></i> Oluştur </x-back.button>
                        </a>
                    </div>
                   {{-- <livewire:back.category.index/> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

