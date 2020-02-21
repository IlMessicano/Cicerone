@extends('layouts.app')

@section('content')
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
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-email"></i></span>
                            </div>
                            <input type="text" name="" class="form-control input_user" value="" placeholder="E-Mail">
                        </div>


                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="" class="form-control input_pass" value="" placeholder="Password">
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
