@extends('front.layouts.master')
@section('title','Giriş Yap')
@section('content')
    <section class="vh-100" style="background-color: #fafafa;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5">

                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('front/img/logo.png') }}">
                            </div>

                            <hr class="my-4">
                            <br>

                            <form action="" method="POST">
                                @csrf
                            <div class="form-outline mb-4">
                                <label class="form-label" for="typeEmailX-2">Email</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control form-control-lg" />
                                @error('email')
                                <span
                                    class="text-danger  animate__animated animate__fadeIn">{{ $message }}
                            </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="typePasswordX-2">Password</label>
                                <input type="password" name="password" id="password" value="{{ old('password') }}" class="form-control form-control-lg" />
                                @error('password')
                                <span
                                    class="text-danger  animate__animated animate__fadeIn">{{ $message }}
                            </span>
                                @enderror
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-start mb-4">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" />
                                <label class="form-check-label" for="remember"> Remember password </label>
                            </div>

                            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

                            </form>

                            <hr class="my-4">

                            <button class="btn btn-lg btn-block btn-success" type="submit">Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="{{ asset('back/assets/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/select2.js') }}"></script>
@endpush
