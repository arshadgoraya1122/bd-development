@extends('layouts.app')
@section('content')
      <!-- Start Theme Style  -->
      <div class="rainbow-prfile-area rainbow-section-gap">
        <div class="container">
            <div class="row gy-5 row--30">
              
                <div class="col-lg-6  mx-auto">
                    <div class="edu-contact-form contact-form-style-1 w-100">
                        <div class="section-title">
                            <h2 class="title w-600 mb--40"> Sign Up</h2>
                        </div>
                        <form method="POST" action="{{ route('register') }}" id="contact-form" class="w-100">
                           @csrf
                            <div class="form-group position-relative">
                                <label>{{__('Name')}}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group position-relative">
                                <label>Email address *</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            {{-- <div class="form-group position-relative">
                                <label>Username *</label>
                                <input name="register_user" type="text">
                                <span class="focus-border"></span>
                            </div> --}}

                            <div class="form-group position-relative">
                                <label>Password *</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" required name="password" autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group position-relative">
                                <label>Confirm Password *</label>
                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" required name="password_confirmation" autocomplete="new-password">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group position-relative">
                                <div class="custom-control custom-checkbox">
                                    <div class="">
                                        <input class="custom-control-input @error('terms') is-invalid @enderror" id="tosAgree" type="checkbox" name="terms" value="1" placeholder="{{ __('Terms and Conditions') }}">
                                        <label class="custom-control-label" for="tosAgree">
                                            <span>{{ __('I agree to the') }} <a href="{{route('pages.get',['slug'=>'terms-and-conditions'])}}">{{ __('Terms of Use') }}</a> {{ __('and') }} <a href="{{route('pages.get',['slug'=>'privacy'])}}">{{ __('Privacy Policy') }}</a>.</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @if(getSetting('security.recaptcha_enabled') && !Auth::check())
                            <div class="form-group row d-flex justify-content-center captcha-field">
                                {!! NoCaptcha::display(['data-theme' => (Cookie::get('app_theme') == null ? (getSetting('site.default_user_theme')) : Cookie::get('app_theme') )]) !!}
                                {{--        {!! NoCaptcha::displaySubmit('register-form', 'submit now!', ['data-theme' => (Cookie::get('app_theme') == null ? (getSetting('site.default_user_theme')) : Cookie::get('app_theme') )]) !!}--}}
                                @error('g-recaptcha-response')
                                <span class="text-danger" role="alert">
                                    <strong>{{__("Please check the captcha field.")}}</strong>
                                </span>
                                @enderror
                            </div>
                        @endif
                            <div class="form-submit-group">
                                <button class="btn-default btn-large w-100" type="submit">Register
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