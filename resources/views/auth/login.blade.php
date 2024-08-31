@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg" style="border-radius: 15px;">
                <div class="card-header text-center" style="background-color: #007BFF; color: white; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <h4>{{ __('Login') }}</h4>
                </div>

                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="card-body p-5" style="background-color: #f7f7f7;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row mb-4">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4 d-grid gap-2 d-md-block">
                                <button type="submit" class="btn btn-primary btn-lg" style="background-color: #007BFF; border-color: #007BFF;">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="margin-left: 10px;">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-center" style="background-color: #007BFF; color: white; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; padding: 15px;">
                    <p>Don't have an account? <a href="{{ route('register') }}" style="color: #fff; text-decoration: underline;">Register here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
