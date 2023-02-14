@extends('front.layouts.master')
@section('title','eCommerce Script')
@section('content')
    @include('front.partials.sections.hero-section')
    @include('front.partials.categories-carousel')
    @include('front.partials.products.featured-products')
    @include('front.partials.banners')
    @include('front.partials.sections.latest-products-section')
@endsection

