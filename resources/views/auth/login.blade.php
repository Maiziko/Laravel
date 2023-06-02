@extends('layouts.app')

@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src={{ asset('template/images/logo.png') }} alt="logo">
                                <strong class="text-danger brand-logo text-shadow-black">ADMIN</strong>
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <form class="pt-3" method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Email -->
                                <div class="row mb-3">

                                    <div class="form-group">
                                        <input id="email" type="email" placeholder="ex : email@gmail.com"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- akhir email -->
                                <!-- Password -->
                                <div class="row mb-3">

                                    <div class="form-group">
                                        <input id="password" type="password" placeholder="password"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- akhir password -->
                                <!-- Remember me -->
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label text-muted" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>

                                </div>
                                <!-- Remember me akhir -->
                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                {{-- Register awal --}}
                                @guest
                                    <div class="mt-3">
                                        @if (Route::has('register'))
                                            <div class="form-check-label d-flex justify-content-center text-black">
                                                Don't Have an Account ?
                                            </div>
                                            <a class="btn btn-block btn-info auth-form-btn"
                                                href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </div>
                                    @endif
                                    <div class="mt-3">
                                        <a class="btn btn-block btn-primary auth-form-btn" href="{{ url('/') }}">
                                            {{ __('Login As Guest') }}
                                        </a>
                                    </div>
                                @endguest
                                {{-- Register akhir --}}
                                <!-- <div class="my-2 d-flex justify-content-between align-items-center">                                                                                                                                                                                                                                                                                                              </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection
