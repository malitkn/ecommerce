@extends('back.layouts.master')
@section('title','Sosyal Medya Hesapları')

@push('custom-head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
@endpush

@section('content')

    <div class="page-header">
        <h3 class="page-title"> Sosyal Medya Ayarları</h3>
        {{ Breadcrumbs::render('social-media') }}
    </div>
    <div class="row">
        <livewire:back.settings.social-media.index/>
        <livewire:back.settings.social-media.create wire:key="create"/>
        <livewire:back.settings.social-media.edit wire:key="edit" />
    </div>
@endsection

