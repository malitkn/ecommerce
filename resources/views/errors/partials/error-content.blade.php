<div class="content-wrapper d-flex align-items-center text-center error-page bg-@yield('color')">
    <div class="row flex-grow">
        <div class="col-lg-7 mx-auto text-white">
            <div class="row align-items-center d-flex flex-row">
                <div class="col-lg-6 text-lg-right pr-lg-4">
                    <h1 class="display-1 mb-0">@yield('code')</h1>
                </div>
                <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4">
                    <h2>Üzgünüz!</h2>
                    <h3 class="font-weight-light">@yield('default-message')</h3>
                    <h2>{{ $exception->getMessage() }}</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center mt-xl-2">
                    <a class="text-white font-weight-medium" href="{{ route('admin.dashboard') }}">Panele dön</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 mt-xl-2">
                    <p class="text-white font-weight-medium text-center"> &copy; 2023 Tüm Hakları Saklıdır.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->
