@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/register.css') }}" rel="stylesheet" type="text/css">

    <div class="container ">


        <!--
        <div class="brand_logo_container">
            <img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
        </div>
        -->
    <!-- <div class="shadow p-4 m-4 bg-white ">
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

                        <select class="form-control @error('gender') is-invalid @enderror" name="gender" placeholder="Sesso" value="{{ old('gender') }}" required
                                autocomplete="sesso" id="sesso">
                            <option value="">-- Seleziona sesso --</option>
                            <option value="M"> Uomo</option>
                            <option value="F"> Donna</option>
                        </select>

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
               class="col-md-2 col-form-label text-md-left">{{ __('Nazionalità') }}</label>
                    <div class="col-md-4">



                        <select d="nationality" placeholder="Nazionalitá"
                                class="form-control @error('nationality') is-invalid @enderror"
                                name="nationality"   value="{{ old('nationality') }}" required
                                autocomplete="nationality">
                            <option value="">-- Seleziona nazionalità --</option>
                            <option value="Afghan">Afghan</option>
                            <option value="Albanian">Albanian</option>
                            <option value="Algerian">Algerian</option>
                            <option value="American">American</option>
                            <option value="Andorran">Andorran</option>
                            <option value="Angolan">Angolan</option>
                            <option value="Antiguans">Antiguans</option>
                            <option value="Argentinean">Argentinean</option>
                            <option value="Armenian">Armenian</option>
                            <option value="Australian">Australian</option>
                            <option value="Austrian">Austrian</option>
                            <option value="Azerbaijani">Azerbaijani</option>
                            <option value="Aahamian">Bahamian</option>
                            <option value="Aahraini">Bahraini</option>
                            <option value="Aangladeshi">Bangladeshi</option>
                            <option value="Barbadian">Barbadian</option>
                            <option value="Barbudans">Barbudans</option>
                            <option value="Batswana">Batswana</option>
                            <option value="Belarusian">Belarusian</option>
                            <option value="Belgian">Belgian</option>
                            <option value="Belizean">Belizean</option>
                            <option value="Beninese">Beninese</option>
                            <option value="Bhutanese">Bhutanese</option>
                            <option value="Bolivian">Bolivian</option>
                            <option value="Bosnian">Bosnian</option>
                            <option value="Brazilian">Brazilian</option>
                            <option value="British">British</option>
                            <option value="Bruneian">Bruneian</option>
                            <option value="Bulgarian">Bulgarian</option>
                            <option value="Burkinabe">Burkinabe</option>
                            <option value="Burmese">Burmese</option>
                            <option value="Burundian">Burundian</option>
                            <option value="Cambodian">Cambodian</option>
                            <option value="Cameroonian">Cameroonian</option>
                            <option value="Canadian">Canadian</option>
                            <option value="Cape Aerdean">Cape Verdean</option>
                            <option value="Central African">Central African</option>
                            <option value="Chadian">Chadian</option>
                            <option value="Chilean">Chilean</option>
                            <option value="Chinese">Chinese</option>
                            <option value="Colombian">Colombian</option>
                            <option value="Comoran">Comoran</option>
                            <option value="Congolese">Congolese</option>
                            <option value="Costa Rican">Costa Rican</option>
                            <option value="Croatian">Croatian</option>
                            <option value="Cuban">Cuban</option>
                            <option value="Cypriot">Cypriot</option>
                            <option value="Czech">Czech</option>
                            <option value="Danish">Danish</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominican">Dominican</option>
                            <option value="Dutch">Dutch</option>
                            <option value="East Timorese">East Timorese</option>
                            <option value="Ecuadorean">Ecuadorean</option>
                            <option value="Egyptian">Egyptian</option>
                            <option value="Emirian">Emirian</option>
                            <option value="Equatorial Guinean">Equatorial Guinean</option>
                            <option value="Eritrean">Eritrean</option>
                            <option value="Estonian">Estonian</option>
                            <option value="Ethiopian">Ethiopian</option>
                            <option value="Fijian">Fijian</option>
                            <option value="Filipino">Filipino</option>
                            <option value="Finnish">Finnish</option>
                            <option value="French">French</option>
                            <option value="Gabonese">Gabonese</option>
                            <option value="Gambian">Gambian</option>
                            <option value="Georgian">Georgian</option>
                            <option value="German">German</option>
                            <option value="Ghanaian">Ghanaian</option>
                            <option value="Greek">Greek</option>
                            <option value="Grenadian">Grenadian</option>
                            <option value="Guatemalan">Guatemalan</option>
                            <option value="Guinea-Bissauan">Guinea-Bissauan</option>
                            <option value="Guinean">Guinean</option>
                            <option value="Guyanese">Guyanese</option>
                            <option value="Haitian">Haitian</option>
                            <option value="Herzegovinian">Herzegovinian</option>
                            <option value="Honduran">Honduran</option>
                            <option value="Hungarian">Hungarian</option>
                            <option value="Icelander">Icelander</option>
                            <option value="Indian">Indian</option>
                            <option value="Indonesian">Indonesian</option>
                            <option value="Iranian">Iranian</option>
                            <option value="Iraqi">Iraqi</option>
                            <option value="Irish">Irish</option>
                            <option value="Israeli">Israeli</option>
                            <option value="Italian">Italian</option>
                            <option value="Ivorian">Ivorian</option>
                            <option value="Jamaican">Jamaican</option>
                            <option value="Japanese">Japanese</option>
                            <option value="Jordanian">Jordanian</option>
                            <option value="Kazakhstani">Kazakhstani</option>
                            <option value="Kenyan">Kenyan</option>
                            <option value="Kittian and Nevisian">Kittian and Nevisian</option>
                            <option value="Kuwaiti">Kuwaiti</option>
                            <option value="Kyrgyz">Kyrgyz</option>
                            <option value="Laotian">Laotian</option>
                            <option value="Latvian">Latvian</option>
                            <option value="Lebanese">Lebanese</option>
                            <option value="Liberian">Liberian</option>
                            <option value="Libyan">Libyan</option>
                            <option value="Liechtensteiner">Liechtensteiner</option>
                            <option value="Lithuanian">Lithuanian</option>
                            <option value="Luxembourger">Luxembourger</option>
                            <option value="Macedonian">Macedonian</option>
                            <option value="Malagasy">Malagasy</option>
                            <option value="Malawian">Malawian</option>
                            <option value="Malaysian">Malaysian</option>
                            <option value="Maldivan">Maldivan</option>
                            <option value="Malian">Malian</option>
                            <option value="Maltese">Maltese</option>
                            <option value="Marshallese">Marshallese</option>
                            <option value="Mauritanian">Mauritanian</option>
                            <option value="Mauritian">Mauritian</option>
                            <option value="Mexican">Mexican</option>
                            <option value="Micronesian">Micronesian</option>
                            <option value="Moldovan">Moldovan</option>
                            <option value="Monacan">Monacan</option>
                            <option value="Mongolian">Mongolian</option>
                            <option value="Moroccan">Moroccan</option>
                            <option value="Mosotho">Mosotho</option>
                            <option value="Motswana">Motswana</option>
                            <option value="Mozambican">Mozambican</option>
                            <option value="Namibian">Namibian</option>
                            <option value="Nauruan">Nauruan</option>
                            <option value="Nepalese">Nepalese</option>
                            <option value="New Zealander">New Zealander</option>
                            <option value="Ni-Vanuatu">Ni-Vanuatu</option>
                            <option value="Nicaraguan">Nicaraguan</option>
                            <option value="Nigerien">Nigerien</option>
                            <option value="North Korean">North Korean</option>
                            <option value="Northern Irish">Northern Irish</option>
                            <option value="Norwegian">Norwegian</option>
                            <option value="Omani">Omani</option>
                            <option value="Pakistani">Pakistani</option>
                            <option value="Palauan">Palauan</option>
                            <option value="Panamanian">Panamanian</option>
                            <option value="Papua New Guinean">Papua New Guinean</option>
                            <option value="Paraguayan">Paraguayan</option>
                            <option value="Peruvian">Peruvian</option>
                            <option value="Polish">Polish</option>
                            <option value="Portuguese">Portuguese</option>
                            <option value="Qatari">Qatari</option>
                            <option value="Romanian">Romanian</option>
                            <option value="Russian">Russian</option>
                            <option value="Rwandan">Rwandan</option>
                            <option value="Saint Lucian">Saint Lucian</option>
                            <option value="Salvadoran">Salvadoran</option>
                            <option value="Samoan">Samoan</option>
                            <option value="San Marinese">San Marinese</option>
                            <option value="Sao Tomean">Sao Tomean</option>
                            <option value="Saudi">Saudi</option>
                            <option value="Scottish">Scottish</option>
                            <option value="Senegalese">Senegalese</option>
                            <option value="Serbian">Serbian</option>
                            <option value="Seychellois">Seychellois</option>
                            <option value="Sierra Leonean">Sierra Leonean</option>
                            <option value="Singaporean">Singaporean</option>
                            <option value="Slovakian">Slovakian</option>
                            <option value="Slovenian">Slovenian</option>
                            <option value="Solomon Islander">Solomon Islander</option>
                            <option value="Somali">Somali</option>
                            <option value="South African">South African</option>
                            <option value="South Korean">South Korean</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Sri Lankan">Sri Lankan</option>
                            <option value="Sudanese">Sudanese</option>
                            <option value="Surinamer">Surinamer</option>
                            <option value="Swazi">Swazi</option>
                            <option value="Swedish">Swedish</option>
                            <option value="Swiss">Swiss</option>
                            <option value="Syrian">Syrian</option>
                            <option value="Taiwanese">Taiwanese</option>
                            <option value="Tajik">Tajik</option>
                            <option value="Tanzanian">Tanzanian</option>
                            <option value="Thai">Thai</option>
                            <option value="Togolese">Togolese</option>
                            <option value="Tongan">Tongan</option>
                            <option value="Trinidadian or Tobagonian">Trinidadian or Tobagonian</option>
                            <option value="Tunisian">Tunisian</option>
                            <option value="Turkish">Turkish</option>
                            <option value="Tuvaluan">Tuvaluan</option>
                            <option value="Ugandan">Ugandan</option>
                            <option value="Ukrainian">Ukrainian</option>
                            <option value="Uruguayan">Uruguayan</option>
                            <option value="Uzbekistani">Uzbekistani</option>
                            <option value="Venezuelan">Venezuelan</option>
                            <option value="Vietnamese">Vietnamese</option>
                            <option value="Welsh">Welsh</option>
                            <option value="Yemenite">Yemenite</option>
                            <option value="Zambian">Zambian</option>
                            <option value="Zimbabwean">Zimbabwean</option>
                        </select>



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


</div>-->
        <div class="row">
            <div class="col-md-8 order-md-1 mb-4">
                <div class="shadow p-4 my-4 mx-2 bg-white ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row col-md-12">
                            
                            <div class="col-md-6 mb-3">
                                <label for="name">{{ __('Nome') }}</label>

                                <input id="name" placeholder="Nome" type="text"
                                       class="form-control @error('name') is-invalid @enderror" name="name"
                                       value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror

                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="surname">{{ __('Cognome') }}</label>

                                <input id="surname" placeholder="Cognome" type="text"
                                       class="form-control @error('cognome') is-invalid @enderror" name="surname"
                                       value="{{ old('surname') }}" required autocomplete="surname">

                                @error('cognome')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>


                        </div>

                        <div class="form-group row col-md-12">
                            <div class="col-md-6 mb-3">
                                <label for="gender">{{ __('Sesso') }}</label>


                                <select class="form-control @error('gender') is-invalid @enderror" name="gender"
                                        placeholder="Sesso" value="{{ old('gender') }}" required
                                        autocomplete="sesso" id="sesso">
                                    <option value="">-- Seleziona sesso --</option>
                                    <option value="M"> Uomo</option>
                                    <option value="F"> Donna</option>
                                </select>

                                @error('sesso')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nationality"
                                       class="col-md-2 col-form-label text-md-left">{{ __('Nazionalità') }}</label>


                                <select d="nationality" placeholder="Nazionalitá"
                                        class="form-control @error('nationality') is-invalid @enderror"
                                        name="nationality" value="{{ old('nationality') }}" required
                                        autocomplete="nationality">
                                    <option value="">-- Seleziona nazionalità --</option>
                                    <option value="Afghan">Afghan</option>
                                    <option value="Albanian">Albanian</option>
                                    <option value="Algerian">Algerian</option>
                                    <option value="American">American</option>
                                    <option value="Andorran">Andorran</option>
                                    <option value="Angolan">Angolan</option>
                                    <option value="Antiguans">Antiguans</option>
                                    <option value="Argentinean">Argentinean</option>
                                    <option value="Armenian">Armenian</option>
                                    <option value="Australian">Australian</option>
                                    <option value="Austrian">Austrian</option>
                                    <option value="Azerbaijani">Azerbaijani</option>
                                    <option value="Aahamian">Bahamian</option>
                                    <option value="Aahraini">Bahraini</option>
                                    <option value="Aangladeshi">Bangladeshi</option>
                                    <option value="Barbadian">Barbadian</option>
                                    <option value="Barbudans">Barbudans</option>
                                    <option value="Batswana">Batswana</option>
                                    <option value="Belarusian">Belarusian</option>
                                    <option value="Belgian">Belgian</option>
                                    <option value="Belizean">Belizean</option>
                                    <option value="Beninese">Beninese</option>
                                    <option value="Bhutanese">Bhutanese</option>
                                    <option value="Bolivian">Bolivian</option>
                                    <option value="Bosnian">Bosnian</option>
                                    <option value="Brazilian">Brazilian</option>
                                    <option value="British">British</option>
                                    <option value="Bruneian">Bruneian</option>
                                    <option value="Bulgarian">Bulgarian</option>
                                    <option value="Burkinabe">Burkinabe</option>
                                    <option value="Burmese">Burmese</option>
                                    <option value="Burundian">Burundian</option>
                                    <option value="Cambodian">Cambodian</option>
                                    <option value="Cameroonian">Cameroonian</option>
                                    <option value="Canadian">Canadian</option>
                                    <option value="Cape Aerdean">Cape Verdean</option>
                                    <option value="Central African">Central African</option>
                                    <option value="Chadian">Chadian</option>
                                    <option value="Chilean">Chilean</option>
                                    <option value="Chinese">Chinese</option>
                                    <option value="Colombian">Colombian</option>
                                    <option value="Comoran">Comoran</option>
                                    <option value="Congolese">Congolese</option>
                                    <option value="Costa Rican">Costa Rican</option>
                                    <option value="Croatian">Croatian</option>
                                    <option value="Cuban">Cuban</option>
                                    <option value="Cypriot">Cypriot</option>
                                    <option value="Czech">Czech</option>
                                    <option value="Danish">Danish</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominican">Dominican</option>
                                    <option value="Dutch">Dutch</option>
                                    <option value="East Timorese">East Timorese</option>
                                    <option value="Ecuadorean">Ecuadorean</option>
                                    <option value="Egyptian">Egyptian</option>
                                    <option value="Emirian">Emirian</option>
                                    <option value="Equatorial Guinean">Equatorial Guinean</option>
                                    <option value="Eritrean">Eritrean</option>
                                    <option value="Estonian">Estonian</option>
                                    <option value="Ethiopian">Ethiopian</option>
                                    <option value="Fijian">Fijian</option>
                                    <option value="Filipino">Filipino</option>
                                    <option value="Finnish">Finnish</option>
                                    <option value="French">French</option>
                                    <option value="Gabonese">Gabonese</option>
                                    <option value="Gambian">Gambian</option>
                                    <option value="Georgian">Georgian</option>
                                    <option value="German">German</option>
                                    <option value="Ghanaian">Ghanaian</option>
                                    <option value="Greek">Greek</option>
                                    <option value="Grenadian">Grenadian</option>
                                    <option value="Guatemalan">Guatemalan</option>
                                    <option value="Guinea-Bissauan">Guinea-Bissauan</option>
                                    <option value="Guinean">Guinean</option>
                                    <option value="Guyanese">Guyanese</option>
                                    <option value="Haitian">Haitian</option>
                                    <option value="Herzegovinian">Herzegovinian</option>
                                    <option value="Honduran">Honduran</option>
                                    <option value="Hungarian">Hungarian</option>
                                    <option value="Icelander">Icelander</option>
                                    <option value="Indian">Indian</option>
                                    <option value="Indonesian">Indonesian</option>
                                    <option value="Iranian">Iranian</option>
                                    <option value="Iraqi">Iraqi</option>
                                    <option value="Irish">Irish</option>
                                    <option value="Israeli">Israeli</option>
                                    <option value="Italian">Italian</option>
                                    <option value="Ivorian">Ivorian</option>
                                    <option value="Jamaican">Jamaican</option>
                                    <option value="Japanese">Japanese</option>
                                    <option value="Jordanian">Jordanian</option>
                                    <option value="Kazakhstani">Kazakhstani</option>
                                    <option value="Kenyan">Kenyan</option>
                                    <option value="Kittian and Nevisian">Kittian and Nevisian</option>
                                    <option value="Kuwaiti">Kuwaiti</option>
                                    <option value="Kyrgyz">Kyrgyz</option>
                                    <option value="Laotian">Laotian</option>
                                    <option value="Latvian">Latvian</option>
                                    <option value="Lebanese">Lebanese</option>
                                    <option value="Liberian">Liberian</option>
                                    <option value="Libyan">Libyan</option>
                                    <option value="Liechtensteiner">Liechtensteiner</option>
                                    <option value="Lithuanian">Lithuanian</option>
                                    <option value="Luxembourger">Luxembourger</option>
                                    <option value="Macedonian">Macedonian</option>
                                    <option value="Malagasy">Malagasy</option>
                                    <option value="Malawian">Malawian</option>
                                    <option value="Malaysian">Malaysian</option>
                                    <option value="Maldivan">Maldivan</option>
                                    <option value="Malian">Malian</option>
                                    <option value="Maltese">Maltese</option>
                                    <option value="Marshallese">Marshallese</option>
                                    <option value="Mauritanian">Mauritanian</option>
                                    <option value="Mauritian">Mauritian</option>
                                    <option value="Mexican">Mexican</option>
                                    <option value="Micronesian">Micronesian</option>
                                    <option value="Moldovan">Moldovan</option>
                                    <option value="Monacan">Monacan</option>
                                    <option value="Mongolian">Mongolian</option>
                                    <option value="Moroccan">Moroccan</option>
                                    <option value="Mosotho">Mosotho</option>
                                    <option value="Motswana">Motswana</option>
                                    <option value="Mozambican">Mozambican</option>
                                    <option value="Namibian">Namibian</option>
                                    <option value="Nauruan">Nauruan</option>
                                    <option value="Nepalese">Nepalese</option>
                                    <option value="New Zealander">New Zealander</option>
                                    <option value="Ni-Vanuatu">Ni-Vanuatu</option>
                                    <option value="Nicaraguan">Nicaraguan</option>
                                    <option value="Nigerien">Nigerien</option>
                                    <option value="North Korean">North Korean</option>
                                    <option value="Northern Irish">Northern Irish</option>
                                    <option value="Norwegian">Norwegian</option>
                                    <option value="Omani">Omani</option>
                                    <option value="Pakistani">Pakistani</option>
                                    <option value="Palauan">Palauan</option>
                                    <option value="Panamanian">Panamanian</option>
                                    <option value="Papua New Guinean">Papua New Guinean</option>
                                    <option value="Paraguayan">Paraguayan</option>
                                    <option value="Peruvian">Peruvian</option>
                                    <option value="Polish">Polish</option>
                                    <option value="Portuguese">Portuguese</option>
                                    <option value="Qatari">Qatari</option>
                                    <option value="Romanian">Romanian</option>
                                    <option value="Russian">Russian</option>
                                    <option value="Rwandan">Rwandan</option>
                                    <option value="Saint Lucian">Saint Lucian</option>
                                    <option value="Salvadoran">Salvadoran</option>
                                    <option value="Samoan">Samoan</option>
                                    <option value="San Marinese">San Marinese</option>
                                    <option value="Sao Tomean">Sao Tomean</option>
                                    <option value="Saudi">Saudi</option>
                                    <option value="Scottish">Scottish</option>
                                    <option value="Senegalese">Senegalese</option>
                                    <option value="Serbian">Serbian</option>
                                    <option value="Seychellois">Seychellois</option>
                                    <option value="Sierra Leonean">Sierra Leonean</option>
                                    <option value="Singaporean">Singaporean</option>
                                    <option value="Slovakian">Slovakian</option>
                                    <option value="Slovenian">Slovenian</option>
                                    <option value="Solomon Islander">Solomon Islander</option>
                                    <option value="Somali">Somali</option>
                                    <option value="South African">South African</option>
                                    <option value="South Korean">South Korean</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Sri Lankan">Sri Lankan</option>
                                    <option value="Sudanese">Sudanese</option>
                                    <option value="Surinamer">Surinamer</option>
                                    <option value="Swazi">Swazi</option>
                                    <option value="Swedish">Swedish</option>
                                    <option value="Swiss">Swiss</option>
                                    <option value="Syrian">Syrian</option>
                                    <option value="Taiwanese">Taiwanese</option>
                                    <option value="Tajik">Tajik</option>
                                    <option value="Tanzanian">Tanzanian</option>
                                    <option value="Thai">Thai</option>
                                    <option value="Togolese">Togolese</option>
                                    <option value="Tongan">Tongan</option>
                                    <option value="Trinidadian or Tobagonian">Trinidadian or Tobagonian</option>
                                    <option value="Tunisian">Tunisian</option>
                                    <option value="Turkish">Turkish</option>
                                    <option value="Tuvaluan">Tuvaluan</option>
                                    <option value="Ugandan">Ugandan</option>
                                    <option value="Ukrainian">Ukrainian</option>
                                    <option value="Uruguayan">Uruguayan</option>
                                    <option value="Uzbekistani">Uzbekistani</option>
                                    <option value="Venezuelan">Venezuelan</option>
                                    <option value="Vietnamese">Vietnamese</option>
                                    <option value="Welsh">Welsh</option>
                                    <option value="Yemenite">Yemenite</option>
                                    <option value="Zambian">Zambian</option>
                                    <option value="Zimbabwean">Zimbabwean</option>
                                </select>


                                @error('nationality')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row col-md-12">
                            <div class="col-md-6 mb-3">
                                <label for="email">{{ __('E-Mail') }}</label>


                                <input id="email" placeholder="E-Mail" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="date">{{ __('Data di nascita') }}</label>

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

                        </div>

                        <div class="form-group row col-md-12">
                            <div class="col-md-6 mb-3">
                                <label for="password">{{ __('Password') }}</label>

                                <input id="password" placeholder="Password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       value="{{ old('password') }}" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone">{{ __('Telefono') }}</label>

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
                            <div class="col-md-6 mb-3">
                                <label for="password-confirm">{{ __('Conferma Password') }}</label>


                                <input id="password-confirm" placeholder="Conferma Password" type="password"
                                       class="text-md-left form-control" name="password_confirmation" required
                                       autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group row col-md-12">
                            <div class="col-md-12 mb-3">
                                <label for="biography">{{ __('Biografia') }}</label>

                                <textarea id="biography" placeholder="Biografia" type="text"
                                       class="form-control @error('biography') is-invalid @enderror" name="biography"
                                          value="{{ old('biography') }}" autocomplete="biography" maxlength="255" rows="5"></textarea>

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
            <div class="col-md-4 order-md-2">
                <div class="shadow p-4 my-4 mx-2 bg-white ">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-center">Immagine del profilo</span>

                    </h4>
                    <div class="">
                    <img src=""
                         class="rounded-circle my-5" id="profileImg">
                    {!! Form::open(['action'=>'ProfileController@store','method' => 'POST','enctype' =>
                    'multipart/form-data'])!!}
                    {{ Form::file('img',['class' => 'input-group-text w-100']) }}
                    <div class="text-center my-2">
                        {{Form::submit('Carica Foto',['class' => 'btn btn-primary w-100'])}}
                    </div>
                    {!! Form::close()!!}

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
