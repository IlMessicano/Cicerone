@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/register.css') }}" rel="stylesheet" type="text/css">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <!--
                    <div class="brand_logo_container">
                        <img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
                    </div>
                    -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row col-md-12">
                                <label for="name" class="col-md-2 col-form-label text-md-left">{{ __('Nome') }}</label>
                                <div class="col-md-4">
                                    <input id="name" placeholder="Nome" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <label for="sesso" class="col-md-2 col-form-label text-md-left">{{ __('Sesso') }}</label>
                                <div class="col-md-4">
                                    <input class="form-control @error('sesso') is-invalid @enderror" list="sesso" name="sesso" placeholder="Sesso" value="{{ old('sesso') }}" required autocomplete="sesso">
                                    <datalist id="sesso">
                                        <option value="M"> Uomo </option>
                                        <option value="F"> Donna </option>
                                    </datalist>
                                <!--<input id="sesso" placeholder="Sesso" type="text" class="form-control @error('sesso') is-invalid @enderror" name="sesso" value="{{ old('sesso') }}" required autocomplete="sesso" >-->

                                    @error('sesso')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row col-md-12">
                                <label for="name" class="col-md-2 col-form-label text-md-left">{{ __('Cognome') }}</label>
                                <div class="col-md-4">
                                    <input id="cognome" placeholder="Cognome" type="text" class="form-control @error('cognome') is-invalid @enderror" name="cognome" value="{{ old('cognome') }}" required autocomplete="cognome" >

                                    @error('cognome')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <label for="nazionalita" class="col-md-2 col-form-label text-md-left">{{ __('Nazionalitá') }}</label>
                                <div class="col-md-4">
                                    <input id="nazionalita" placeholder="Nazionalitá" type="text" class="form-control @error('nazionalita') is-invalid @enderror" name="nazionalita" value="{{ old('nazionalita') }}" required autocomplete="nazionalita" >

                                    @error('nazionalita')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row col-md-12">
                                <label for="email" class="col-md-2 col-form-label text-md-left">{{ __('E-Mail') }}</label>
                                <div class="col-md-4">
                                    <input id="email" placeholder="E-Mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <label for="cittaresidenza" class="col-md-2 col-form-label text-md-left">{{ __('Cittá di residenza') }}</label>
                                <div class="col-md-4">
                                    <input id="cittaresidenza" placeholder="Cittá di residenza" type="text" class="form-control @error('cittaresidenza') is-invalid @enderror" name="cittaresidenza" value="{{ old('cittaresidenza') }}"  autocomplete="cittaresidenza" >

                                    @error('cittaresidenza')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row col-md-12">
                                <label for="date" class="col-md-2 col-form-label text-md-left">{{ __('Data di nascita') }}</label>
                                <div class="col-md-4">
                                    <input id="dataNascita" type="date" class="form-control @error('dataNascita') is-invalid @enderror" name="dataNascita" value="{{ old('dataNascita') }}" required autocomplete="date" ng-model="dataNascita">

                                    @error('dataNascita')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <label for="nazionalitaresidenza" class="col-md-2 col-form-label text-md-left">{{ __('Nazionalitá di residenza') }}</label>
                                <div class="col-md-4">
                                    <input id="nazionalitaresidenza" placeholder="Nazionalitá di residenza" type="text" class="form-control @error('nazionalitaresidenza') is-invalid @enderror" name="nazionalitaresidenza" value="{{ old('nazionalitaresidenza') }}"  autocomplete="nazionalitaresidenza" >

                                    @error('nazionalitaresidenza')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row col-md-12">
                                <label for="password" class="col-md-2 col-form-label text-md-left">{{ __('Password') }}</label>
                                <div class="col-md-4">
                                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password" >

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <label for="telefono" class="col-md-2 col-form-label text-md-left">{{ __('Telefono') }}</label>
                                <div class="col-md-4">
                                    <input id="telefono" placeholder="Telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" >

                                    @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row col-md-12">
                                <label for="password-confirm" class="col-md-2 col-form-label text-md-left">{{ __('Conferma Password') }}</label>

                                <div class="col-md-4">
                                    <input id="password-confirm" placeholder="Conferma Password" type="password" class="text-md-left form-control" name="password_confirmation" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <label for="biografia" class="col-md-2 col-form-label text-md-left">{{ __('Biografia') }}</label>
                                <div class="col-md-4">
                                    <input id="biografia" placeholder="Biografia" type="text" class="form-control @error('biografia') is-invalid @enderror" name="biografia" value="{{ old('biografia') }}"  autocomplete="biografia" maxlength="255" >

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
            </div>
        </div>
    </div>
@endsection
