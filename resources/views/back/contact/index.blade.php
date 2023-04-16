@extends('back.layouts.master')
@section('title', ' İletişim Talepleri')
@section('content')
    <div class="page-header">
        <h3 class="page-title"> İletişim Talepleri </h3>
        {{ Breadcrumbs::render('contacts') }}
    </div>
    <div class="row">
        <livewire:back.contact.index/>
    </div>
@endsection

