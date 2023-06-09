<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href=" {{ asset('back/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href=" {{ asset('back/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href=" {{ asset('back/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href=" {{ asset('back/assets/vendors/font-awesome/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href=" {{ asset('back/assets/vendors/animate-css/animate.min.css')}}">
    <!-- endinject -->
   <!-- Livewire -->
    @livewireStyles
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('storage/back/images/' . $settings->favicon) }}" />
    <!-- Custom Css -->
    @stack('css')
    <!-- Layout styles -->
    <link rel="stylesheet" href=" {{ asset('back/assets/css/style.css')}}">
</head>
<body>
<div class="container-scroller">
    @include('back.layouts.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('back.layouts.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
