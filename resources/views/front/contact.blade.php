@extends('front.layouts.master')
@section('title','eCommerce Script')
@section('content')
    @include('front.partials.sections.hero-section')
    @include('front.partials.breadcrumb')
    @include('front.partials.sections.contact-section')
    @include('front.partials.map')
    @include('front.partials.forms.contact-form')
@endsection
