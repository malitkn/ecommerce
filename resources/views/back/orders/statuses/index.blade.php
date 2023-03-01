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
        <livewire:back.orders.statuses.index wire:key="index" />
        <livewire:back.orders.statuses.create wire:key="create" />
        <livewire:back.orders.statuses.edit wire:key="edit" />
        <livewire:back.orders.statuses.delete wire:key="delete" />
    </div>
@endsection

@section('js')

@endsection
