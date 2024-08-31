@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg" style="border-radius: 15px;">
                <div class="card-header text-center" style="background-color: #007BFF; color: white; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <h4>{{ __('Register') }}</h4>
                </div>

                <div class="card-body p-5" style="background-color: #f7f7f7;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row mb-4">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control form-control-lg border-black @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="write your name here">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control form-control-lg border-black @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus pattern="^0[0-9]{9}" title="Please enter a valid phone number starting with 0 and exactly 10 digits long." placeholder="Enter your phone number">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control form-control-lg border-black @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="write your email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control form-control-lg border-black @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="create password of your choice">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control form-control-lg border-black" name="password_confirmation" required autocomplete="new-password" placeholder="confirm your password">
                            </div>
                        </div>



                        <div class="form-group row mb-4">
                            <label for="captcha" class="col-md-4 col-form-label text-md-end">{{ $num1 }} {{ $operation }} {{ $num2 }} = ?<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="captcha" type="text" class="form-control form-control-lg border-black @error('captcha_answer') is-invalid @enderror" name="captcha_answer" required placeholder="write your answer here">

                                @error('captcha_answer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4 d-grid gap-2 d-md-block">
                                <button type="submit" class="btn btn-primary btn-lg" style="background-color: #007BFF; border-color: #007BFF;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-center" style="background-color: #007BFF; color: white; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; padding: 15px;">
                    <p>Already have an account? <a href="{{ route('login') }}" style="color: #fff; text-decoration: underline;">Login here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
