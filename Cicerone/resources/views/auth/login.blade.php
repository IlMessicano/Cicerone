@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css">
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
<!--
                    <div class="brand_logo_container">
                        <img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
                    </div>
-->
                </div>
                <div class="d-flex justify-content-center form_container">

                    <form>

                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fas fa-email"></i></span>
                            <div class="input-group-append">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            <div class="input-group-append">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Ricordami</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" name="button" class="btn login_btn">
                                {{ __('Accedi') }}
                            </button>
                        </div>
                    </form>
                </div>

                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        <a href="{{ route('password.request') }}">Hai dimenticato la password?</a>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center links">
                        Non hai un account? <a href="{{ route('register') }}" class="ml-2">Registrati</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
