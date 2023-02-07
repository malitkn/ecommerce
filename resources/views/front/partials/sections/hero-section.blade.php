<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('front.partials.categories-nav')
            </div>
            <div class="col-lg-9">
                @include('front.partials.search')
                @if(isset($slider))
                @include('front.partials.sliders')
                @endif
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->
