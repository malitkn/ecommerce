<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                @include('front.partials.sidebar.sidebar')
            </div>
            <div class="col-lg-9 col-md-7">
                @include('front.partials.products.sale-off-products')
                @include('front.partials.products.products-filter')
                @include('front.partials.products.products')
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->
