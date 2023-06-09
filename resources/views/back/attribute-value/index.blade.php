@extends('back.layouts.master')
@section('title', 'Özellik Değerleri')
@section('content')
    <div class="page-header">
        <h3 class="page-title"> Özellik Değerleri </h3>
        {{ Breadcrumbs::render('attribute-values') }}
    </div>
   @livewire('back.attribute-value.index')
@endsection

