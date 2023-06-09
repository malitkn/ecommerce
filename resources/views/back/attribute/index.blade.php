@extends('back.layouts.master')
@section('title', 'Özellikler')
@section('content')
    <div class="page-header">
        <h3 class="page-title"> Özellikler </h3>
        {{ Breadcrumbs::render('attributes') }}
    </div>
   @livewire('back.attribute.index')
@endsection

