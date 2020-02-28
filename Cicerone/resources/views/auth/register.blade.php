@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/register.css') }}" rel="stylesheet" type="text/css">

    <div class="container ">


        <!--
        <div class="brand_logo_container">
            <img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
        </div>
        -->
        <div class="shadow p-4 m-4 bg-white ">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group row col-md-12">

                    <label for="name" class="col-md-2 col-form-label text-md-left">{{ __('Nome') }}</label>
                    <div class="col-md-4">
                        <input id="name" placeholder="Nome" type="text"
                               class="form-control @error('name') is-invalid @enderror" name="name"
                               value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>

                    <label for="gender" class="col-md-2 col-form-label text-md-left">{{ __('Sesso') }}</label>
                    <div class="col-md-4">
                        <input class="form-control @error('gender') is-invalid @enderror" list="sesso"
                               name="gender" placeholder="Sesso" value="{{ old('gender') }}" required
                               autocomplete="sesso">
                        <datalist id="gender">
                            <option value="M"> Uomo</option>
                            <option value="F"> Donna</option>
                        </datalist>

                        @error('sesso')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row col-md-12">
                    <label for="surname" class="col-md-2 col-form-label text-md-left">{{ __('Cognome') }}</label>
                    <div class="col-md-4">
                        <input id="surname" placeholder="Cognome" type="text"
                               class="form-control @error('cognome') is-invalid @enderror" name="surname"
                               value="{{ old('surname') }}" required autocomplete="surname">

                        @error('cognome')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>

                    <label for="nationality"
                           class="col-md-2 col-form-label text-md-left">{{ __('Nationality') }}</label>
                    <div class="col-md-4">
                        <input id="nationality" placeholder="Nazionalitá" type="text"
                               class="form-control @error('nationality') is-invalid @enderror"
                               name="nationality" value="{{ old('nationality') }}" required
                               autocomplete="nationality">

                        @error('nationality')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row col-md-12">
                    <label for="email" class="col-md-2 col-form-label text-md-left">{{ __('E-Mail') }}</label>
                    <div class="col-md-4">
                        <input id="email" placeholder="E-Mail" type="email"
                               class="form-control @error('email') is-invalid @enderror" name="email"
                               value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>

                    <label for="residenceCity"
                           class="col-md-2 col-form-label text-md-left">{{ __('Cittá di residenza') }}</label>
                    <div class="col-md-4">
                        <input id="residenceCity" placeholder="Cittá di residenza" type="text"
                               class="form-control @error('residenceCity') is-invalid @enderror"
                               name="residenceCity" value="{{ old('residenceCity') }}"
                               autocomplete="residenceCity">

                        @error('residenceCity')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row col-md-12">
                    <label for="date"
                           class="col-md-2 col-form-label text-md-left">{{ __('Data di nascita') }}</label>
                    <div class="col-md-4">
                        <input id="birthDate" type="date"
                               class="form-control @error('birthDate') is-invalid @enderror"
                               name="birthDate" value="{{ old('birthDate') }}" required autocomplete="date"
                               ng-model="birthDate">

                        @error('birthDate')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>

                    <label for="residenceCountry"
                           class="col-md-2 col-form-label text-md-left">{{ __('Nazionalitá di residenza') }}</label>
                    <div class="col-md-4">
                        <input id="residenceCountry" placeholder="Nazionalitá di residenza" type="text"
                               class="form-control @error('residenceCountry') is-invalid @enderror"
                               name="residenceCountry" value="{{ old('residenceCountry') }}"
                               autocomplete="residenceCountry">

                        @error('residenceCountry')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row col-md-12">
                    <label for="password"
                           class="col-md-2 col-form-label text-md-left">{{ __('Password') }}</label>
                    <div class="col-md-4">
                        <input id="password" placeholder="Password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password"
                               value="{{ old('password') }}" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>

                    <label for="phone"
                           class="col-md-2 col-form-label text-md-left">{{ __('Telefono') }}</label>
                    <div class="col-md-4">
                        <input id="phone" placeholder="Telefono" type="text"
                               class="form-control @error('phone') is-invalid @enderror" name="phone"
                               value="{{ old('phone') }}" required autocomplete="phone">

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row col-md-12">
                    <label for="password-confirm"
                           class="col-md-2 col-form-label text-md-left">{{ __('Conferma Password') }}</label>

                    <div class="col-md-4">
                        <input id="password-confirm" placeholder="Conferma Password" type="password"
                               class="text-md-left form-control" name="password_confirmation" required
                               autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>

                    <label for="biography"
                           class="col-md-2 col-form-label text-md-left">{{ __('Biografia') }}</label>
                    <div class="col-md-4">
                        <input id="biography" placeholder="Biografia" type="text"
                               class="form-control @error('biography') is-invalid @enderror" name="biography"
                               value="{{ old('biography') }}" autocomplete="biography" maxlength="255">

                        @error('biografia')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row mb-0">
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="submit" name="button" class="btn login_btn">
                            {{ __('Registrati') }}
                        </button>
                    </div>
                </div>
            </form>


        </div>
    </div>

@endsection
