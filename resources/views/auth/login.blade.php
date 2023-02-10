@extends('layouts.app')
@section('content')
<div class="rainbow-prfile-area rainbow-section-gap">
    <div class="container">
        <div class="row gy-5 row--30">
            <div class="col-lg-6 mx-auto">
                <div class="edu-contact-form contact-form-style-1 w-100">
                    <div class="section-title">
                        <h2 class="title w-600 mb--40">Login</h2>
                    </div>
                    <form method="POST" action="{{ route('login') }}" id="contact-form" class="w-100">
                        @csrf
                        <div class="form-group position-relative">
                            <label>Username or email *</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group position-relative">
                            <label>Password *</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  name="password" autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="row mb--30">
                            <div class="col-lg-6">
                                <div class="edu-checkbox">
                                    <input type="checkbox" id="rememberme" name="rememberme">
                                    <label for="rememberme">Remember me</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="edu-lost-password text-end">
                                    <a class="btn-read-more" href="#"><span>Lost your password?</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="form-submit-group">
                            <button type="submit" class="btn-default btn-large w-100">Log In
                                <i class="feather-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
           

        </div>
    </div>
</div>


@endsection