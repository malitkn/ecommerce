@extends('back.layouts.master')
@section('title','Sipariş Durumları')
@section('css')

@endsection
@section('content')
    <div class="page-header">
        <h3 class="page-title"> Sipariş Durumları </h3>
        {{ Breadcrumbs::render('order-statuses') }}
    </div>
    <div class="row">
        <livewire:back.order.status.index wire:key="index" />
        <livewire:back.order.status.create wire:key="create" />
        <livewire:back.order.status.edit wire:key="edit" />
        <livewire:back.order.status.delete wire:key="delete" />
    </div>
@endsection

@section('js')

@endsection
