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
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href=" {{ asset('back/assets/vendors/font-awesome/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href=" {{ asset('back/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href=" {{ asset('back/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href=" {{ asset('back/assets/images/favicon.png')}}"/>
    <!-- Custom Css -->
    @yield('css')
</head>
<body>
<div class="container-scroller">
    @include('back.layouts.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('back.layouts.sidebar')
