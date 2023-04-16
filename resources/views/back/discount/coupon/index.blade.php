@extends('back.layouts.master')
@section('title', 'Kuponlar')
@push('custom-head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
@endpush
@section('content')
    <div class="page-header">
        <h3 class="page-title"> İndirim Kuponları </h3>
        {{ Breadcrumbs::render('coupons') }}
    </div>
    <div class="row">
        <livewire:back.discount.coupon.index/>
        <livewire:back.discount.coupon.create wire:key="create"/>
        <livewire:back.discount.coupon.edit wire:key="edit"/>
        <livewire:back.discount.coupon.delete wire:key="delete"/>
    </div>
@endsection

@push('custom-footer')
    <!-- Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(function () {
            $('.datepicker').datepicker({
                language: "en",
                autoclose: true,
                format: "dd-mm-yyyy"
            });
        });
    </script>
@endpush



