@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="shadow p-4 m-4 bg-white">
            <br>
            <div class="col-md-12 order-md-2">
                <h4 class="mb-3">Modifica profilo</h4>
                {!! Form::open(['action'=>['ProfileController@update',$user->id],'method' => 'POST'])!!}


                <div class="row">
                    <div class="col-md-6 mb-3">
                        {{Form::label ('name', 'Nome')}}
                        {{Form::text ('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                    </div>
                    <div class="col-md-6 mb-3">
                        {{Form::label ('cognome', 'Cognome')}}
                        {{Form::text ('cognome', $user->surname, ['class' => 'form-control', 'placeholder' => 'Cognome'])}}

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="email">E-mail </label>
                        <input type="email" class="form-control" id="email" placeholder="{{$user->email}}"
                               value="{{$user->email}}" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        {{Form::label ('password', 'Password vecchia')}}
                        {{Form::password ('password', ['class' => 'form-control', 'placeholder' => 'Password'])}}
                    </div>
                    <div class="col-md-4 mb-3">
                        {{Form::label ('new_password', 'Password nuova')}}
                        {{Form::password ('new_password', ['class' => 'form-control', 'placeholder' => 'Password'])}}
                    </div>

                    <div class="col-md-4 mb-3">
                        {{Form::label ('confirm_new_password', 'Conferma password')}}
                        {{Form::password ('confirm_new_password', ['class' => 'form-control', 'placeholder' => 'Password'])}}
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        {{Form::label ('sesso', 'Sesso' , ['class' => 'w-100'])}}
                        {{Form::select('sesso', array('M' => 'Uomo', 'F' => 'Donna'), $user->gender, ['class' => 'col-sm-6 custom-select custom-select-sm w-100'])}}
                    </div>

                    <div class="col-md-6 mb-3">
                        {{Form::label ('dataNascita', 'Data di nascità')}}
                        {{Form::date ('dataNascita', $user->birthDate, ['class' => 'form-control', 'placeholder' => 'Data di nascità'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        {{Form::label ('nazionalita', 'Nazionalità')}}
                        {{Form::select ('nazionalita', array('Afghan'=>'Afghan',
                                    'Albanian'=>'Albanian',
                                    'Algerian'=>'Algerian',
                                    'American'=>'American',
                                    'Andorran'=>'Andorran',
                                    'Angolan'=>'Angolan',
                                    'Antiguans'=>'Antiguans',
                                    'Argentinean'=>'Argentinean',
                                    'Armenian'=>'Armenian',
                                    'Australian'=>'Australian',
                                    'Austrian'=>'Austrian',
                                    'Azerbaijani'=>'Azerbaijani',
                                    'Aahamian'=>'Bahamian',
                                    'Aahraini'=>'Bahraini',
                                    'Aangladeshi'=>'Bangladeshi',
                                    'Barbadian'=>'Barbadian',
                                    'Barbudans'=>'Barbudans',
                                    'Batswana'=>'Batswana',
                                    'Belarusian'=>'Belarusian',
                                    'Belgian'=>'Belgian',
                                    'Belizean'=>'Belizean',
                                    'Beninese'=>'Beninese',
                                    'Bhutanese'=>'Bhutanese',
                                    'Bolivian'=>'Bolivian',
                                    'Bosnian'=>'Bosnian',
                                    'Brazilian'=>'Brazilian',
                                    'British'=>'British',
                                    'Bruneian'=>'Bruneian',
                                    'Bulgarian'=>'Bulgarian',
                                    'Burkinabe'=>'Burkinabe',
                                    'Burmese'=>'Burmese',
                                    'Burundian'=>'Burundian',
                                    'Cambodian'=>'Cambodian',
                                    'Cameroonian'=>'Cameroonian',
                                    'Canadian'=>'Canadian',
                                    'Cape Aerdean'=>'Cape Verdean',
                                    'Central African'=>'Central African',
                                    'Chadian'=>'Chadian',
                                    'Chilean'=>'Chilean',
                                    'Chinese'=>'Chinese',
                                    'Colombian'=>'Colombian',
                                    'Comoran'=>'Comoran',
                                    'Congolese'=>'Congolese',
                                    'Costa Rican'=>'Costa Rican',
                                    'Croatian'=>'Croatian',
                                    'Cuban'=>'Cuban',
                                    'Cypriot'=>'Cypriot',
                                    'Czech'=>'Czech',
                                    'Danish'=>'Danish',
                                    'Djibouti'=>'Djibouti',
                                    'Dominican'=>'Dominican',
                                    'Dutch'=>'Dutch',
                                    'East Timorese'=>'East Timorese',
                                    'Ecuadorean'=>'Ecuadorean',
                                    'Egyptian'=>'Egyptian',
                                    'Emirian'=>'Emirian',
                                    'Equatorial Guinean'=>'Equatorial Guinean',
                                    'Eritrean'=>'Eritrean',
                                    'Estonian'=>'Estonian',
                                    'Ethiopian'=>'Ethiopian',
                                    'Fijian'=>'Fijian',
                                    'Filipino'=>'Filipino',
                                    'Finnish'=>'Finnish',
                                    'French'=>'French',
                                    'Gabonese'=>'Gabonese',
                                    'Gambian'=>'Gambian',
                                    'Georgian'=>'Georgian',
                                    'German'=>'German',
                                    'Ghanaian'=>'Ghanaian',
                                    'Greek'=>'Greek',
                                    'Grenadian'=>'Grenadian',
                                    'Guatemalan'=>'Guatemalan',
                                    'Guinea-Bissauan'=>'Guinea-Bissauan',
                                    'Guinean'=>'Guinean',
                                    'Guyanese'=>'Guyanese',
                                    'Haitian'=>'Haitian',
                                    'Herzegovinian'=>'Herzegovinian',
                                    'Honduran'=>'Honduran',
                                    'Hungarian'=>'Hungarian',
                                    'Icelander'=>'Icelander',
                                    'Indian'=>'Indian',
                                    'Indonesian'=>'Indonesian',
                                    'Iranian'=>'Iranian',
                                    'Iraqi'=>'Iraqi',
                                    'Irish'=>'Irish',
                                    'Israeli'=>'Israeli',
                                    'Italian'=>'Italian',
                                    'Ivorian'=>'Ivorian',
                                    'Jamaican'=>'Jamaican',
                                    'Japanese'=>'Japanese',
                                    'Jordanian'=>'Jordanian',
                                    'Kazakhstani'=>'Kazakhstani',
                                    'Kenyan'=>'Kenyan',
                                    'Kittian and Nevisian'=>'Kittian and Nevisian',
                                    'Kuwaiti'=>'Kuwaiti',
                                    'Kyrgyz'=>'Kyrgyz',
                                    'Laotian'=>'Laotian',
                                    'Latvian'=>'Latvian',
                                    'Lebanese'=>'Lebanese',
                                    'Liberian'=>'Liberian',
                                    'Libyan'=>'Libyan',
                                    'Liechtensteiner'=>'Liechtensteiner',
                                    'Lithuanian'=>'Lithuanian',
                                    'Luxembourger'=>'Luxembourger',
                                    'Macedonian'=>'Macedonian',
                                    'Malagasy'=>'Malagasy',
                                    'Malawian'=>'Malawian',
                                    'Malaysian'=>'Malaysian',
                                    'Maldivan'=>'Maldivan',
                                    'Malian'=>'Malian',
                                    'Maltese'=>'Maltese',
                                    'Marshallese'=>'Marshallese',
                                    'Mauritanian'=>'Mauritanian',
                                    'Mauritian'=>'Mauritian',
                                    'Mexican'=>'Mexican',
                                    'Micronesian'=>'Micronesian',
                                    'Moldovan'=>'Moldovan',
                                    'Monacan'=>'Monacan',
                                    'Mongolian'=>'Mongolian',
                                    'Moroccan'=>'Moroccan',
                                    'Mosotho'=>'Mosotho',
                                    'Motswana'=>'Motswana',
                                    'Mozambican'=>'Mozambican',
                                    'Namibian'=>'Namibian',
                                    'Nauruan'=>'Nauruan',
                                    'Nepalese'=>'Nepalese',
                                    'New Zealander'=>'New Zealander',
                                    'Ni-Vanuatu'=>'Ni-Vanuatu',
                                    'Nicaraguan'=>'Nicaraguan',
                                    'Nigerien'=>'Nigerien',
                                    'North Korean'=>'North Korean',
                                    'Northern Irish'=>'Northern Irish',
                                    'Norwegian'=>'Norwegian',
                                    'Omani'=>'Omani',
                                    'Pakistani'=>'Pakistani',
                                    'Palauan'=>'Palauan',
                                    'Panamanian'=>'Panamanian',
                                    'Papua New Guinean'=>'Papua New Guinean',
                                    'Paraguayan'=>'Paraguayan',
                                    'Peruvian'=>'Peruvian',
                                    'Polish'=>'Polish',
                                    'Portuguese'=>'Portuguese',
                                    'Qatari'=>'Qatari',
                                    'Romanian'=>'Romanian',
                                    'Russian'=>'Russian',
                                    'Rwandan'=>'Rwandan',
                                    'Saint Lucian'=>'Saint Lucian',
                                    'Salvadoran'=>'Salvadoran',
                                    'Samoan'=>'Samoan',
                                    'San Marinese'=>'San Marinese',
                                    'Sao Tomean'=>'Sao Tomean',
                                    'Saudi'=>'Saudi',
                                    'Scottish'=>'Scottish',
                                    'Senegalese'=>'Senegalese',
                                    'Serbian'=>'Serbian',
                                    'Seychellois'=>'Seychellois',
                                    'Sierra Leonean'=>'Sierra Leonean',
                                    'Singaporean'=>'Singaporean',
                                    'Slovakian'=>'Slovakian',
                                    'Slovenian'=>'Slovenian',
                                    'Solomon Islander'=>'Solomon Islander',
                                    'Somali'=>'Somali',
                                    'South African'=>'South African',
                                    'South Korean'=>'South Korean',
                                    'Spanish'=>'Spanish',
                                    'Sri Lankan'=>'Sri Lankan',
                                    'Sudanese'=>'Sudanese',
                                    'Surinamer'=>'Surinamer',
                                    'Swazi'=>'Swazi',
                                    'Swedish'=>'Swedish',
                                    'Swiss'=>'Swiss',
                                    'Syrian'=>'Syrian',
                                    'Taiwanese'=>'Taiwanese',
                                    'Tajik'=>'Tajik',
                                    'Tanzanian'=>'Tanzanian',
                                    'Thai'=>'Thai',
                                    'Togolese'=>'Togolese',
                                    'Tongan'=>'Tongan',
                                    'Trinidadian or Tobagonian'=>'Trinidadian or Tobagonian',
                                    'Tunisian'=>'Tunisian',
                                    'Turkish'=>'Turkish',
                                    'Tuvaluan'=>'Tuvaluan',
                                    'Ugandan'=>'Ugandan',
                                    'Ukrainian'=>'Ukrainian',
                                    'Uruguayan'=>'Uruguayan',
                                    'Uzbekistani'=>'Uzbekistani',
                                    'Venezuelan'=>'Venezuelan',
                                    'Vietnamese'=>'Vietnamese',
                                    'Welsh'=>'Welsh',
                                    'Yemenite'=>'Yemenite',
                                    'Zambian'=>'Zambian',
                                    'Zimbabwean'=>'Zimbabwean'), $user->nationality, ['class' => 'form-control', 'placeholder' => 'Nazionalità'])}}


                    </div>
                    <div class="col-md-6 mb-3">
                        {{Form::label ('telefono', 'Telefono')}}
                        {{Form::text ('telefono', $user->phone, ['class' => 'form-control', 'placeholder' => 'Telefono'])}}

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                    {{Form::label ('languages', 'Lingue parlate')}}
                    {{Form::select('languages[]',array('AF' => 'Afrikanns' ,
                 'SQ' => 'Albanian' ,
                 'AR' => 'Arabic' ,
          	 'HY' => 'Armenian' ,
                 'EU' => 'Basque' ,
                 'BN' => 'Bengali' ,
                 'BG' => 'Bulgarian' ,
                 'CA' => 'Catalan' ,
                 'KM' => 'Cambodian' ,
                 'ZH' => 'Chinese (Mandarin)' ,
                 'HR' => 'Croation' ,
                 'CS' => 'Czech' ,
                 'DA' => 'Danish' ,
 	         'NL' => 'Dutch' ,
  	         'EN' => 'English' ,
                 'ET' => 'Estonian' ,
                 'FJ' => 'Fiji' ,
                 'FI' => 'Finnish' ,
                 'FR' => 'French' ,
                 'KA' => 'Georgian' ,
                 'DE' => 'German' ,
                 'EL' => 'Greek' ,
                 'GU' => 'Gujarati' ,
                 'HE' => 'Hebrew' ,
                 'HU' => 'Hungarian' ,
                 'IS' => 'Icelandic' ,
                 'ID' => 'Indonesian' ,
                 'GA' => 'Irish' ,
                 'IT' => 'Italian' ,
                 'JA' => 'Japanese' ,
                 'JW' => 'Javanese' ,
                 'KO' => 'Korean' ,
                 'LA' => 'Latin' ,
                 'LV' => 'Latvian' ,
                 'LT' => 'Lithuanian' ,
                 'MK' => 'Macedonian' ,
                 'MS' => 'Malay' ,
                 'ML' => 'Malayalam' ,
                 'MT' => 'Maltese' ,
                 'MI' => 'Maori' ,
                 'MR' => 'Marathi' ,
                 'MN' => 'Mongolian' ,
                 'NE' => 'Nepali' ,
                 'NO' => 'Norwegian' ,
                 'FA' => 'Persian' ,
                 'PL' => 'Polish' ,
                 'PT' => 'Portuguese' ,
                 'PA' => 'Punjabi' ,
                 'QU' => 'Quechua' ,
                 'RO' => 'Rumano' ,
                 'RU' => 'Russian' ,
                 'SM' => 'Samoan' ,
                 'SR' => 'Serbian' ,
                 'SK' => 'Slovak' ,
                 'SL' => 'Slovenian' ,
                 'ES' => 'Spanish' ,
                 'SW' => 'Swahili' ,
                 'SV' => 'Swedish' ,
                 'TA' => 'Tamil' ,
                 'TT' => 'Tatar' ,
                 'TE' => 'Telugu' ,
                 'TH' => 'Thai' ,
                 'BO' => 'Tibetan' ,
                 'TO' => 'Tonga' ,
                 'TR' => 'Turkish' ,
                 'UK' => 'Ukranian' ,
                 'UR' => 'Urdu' ,
                 'UZ' => 'Uzbek' ,
                 'VI' => 'VietlanguageNamese' ,
                 'CY' => 'Welsh' ,
                 'XH' => 'Xhosa'
),array('1,2'),array('multiple'=>'multiple','name'=>'languages[]', 'class' => 'form-control'))}}
                    <!--

                    $user->languages, ['multiple'=>'multiple', 'name'=>'languages[]' , 'class' => 'form-control', 'placeholder' => 'Lingue parlate'])}}


                    <select id="languages" placeholder="Lingue parlate"
                            class="form-control @error('languages') is-invalid @enderror"
                            name="languages[]" value="{{ old('languages') }}" required
                            autocomplete="languages" multiple>
                        <option value="" disabled>-- Seleziona nazionalità --</option>
                        <option value="AF">Afrikanns</option>
                        <option value="SQ">Albanian</option>
                        <option value="AR">Arabic</option>
                        <option value="HY">Armenian</option>
                        <option value="EU">Basque</option>
                        <option value="BN">Bengali</option>
                        <option value="BG">Bulgarian</option>
                        <option value="CA">Catalan</option>
                        <option value="KM">Cambodian</option>
                        <option value="ZH">Chinese (Mandarin)</option>
                        <option value="HR">Croation</option>
                        <option value="CS">Czech</option>
                        <option value="DA">Danish</option>
                        <option value="NL">Dutch</option>
                        <option value="EN">English</option>
                        <option value="ET">Estonian</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finnish</option>
                        <option value="FR">French</option>
                        <option value="KA">Georgian</option>
                        <option value="DE">German</option>
                        <option value="EL">Greek</option>
                        <option value="GU">Gujarati</option>
                        <option value="HE">Hebrew</option>
                        <option value="HU">Hungarian</option>
                        <option value="IS">Icelandic</option>
                        <option value="ID">Indonesian</option>
                        <option value="GA">Irish</option>
                        <option value="IT">Italian</option>
                        <option value="JA">Japanese</option>
                        <option value="JW">Javanese</option>
                        <option value="KO">Korean</option>
                        <option value="LA">Latin</option>
                        <option value="LV">Latvian</option>
                        <option value="LT">Lithuanian</option>
                        <option value="MK">Macedonian</option>
                        <option value="MS">Malay</option>
                        <option value="ML">Malayalam</option>
                        <option value="MT">Maltese</option>
                        <option value="MI">Maori</option>
                        <option value="MR">Marathi</option>
                        <option value="MN">Mongolian</option>
                        <option value="NE">Nepali</option>
                        <option value="NO">Norwegian</option>
                        <option value="FA">Persian</option>
                        <option value="PL">Polish</option>
                        <option value="PT">Portuguese</option>
                        <option value="PA">Punjabi</option>
                        <option value="QU">Quechua</option>
                        <option value="RO">Rumano</option>
                        <option value="RU">Russian</option>
                        <option value="SM">Samoan</option>
                        <option value="SR">Serbian</option>
                        <option value="SK">Slovak</option>
                        <option value="SL">Slovenian</option>
                        <option value="ES">Spanish</option>
                        <option value="SW">Swahili</option>
                        <option value="SV">Swedish</option>
                        <option value="TA">Tamil</option>
                        <option value="TT">Tatar</option>
                        <option value="TE">Telugu</option>
                        <option value="TH">Thai</option>
                        <option value="BO">Tibetan</option>
                        <option value="TO">Tonga</option>
                        <option value="TR">Turkish</option>
                        <option value="UK">Ukranian</option>
                        <option value="UR">Urdu</option>
                        <option value="UZ">Uzbek</option>
                        <option value="VI">VietlanguageNamese</option>
                        <option value="CY">Welsh</option>
                        <option value="XH">Xhosa</option>
                    </select>-->


                        @error('nationality')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror

                    </div>
                </div>

                <div class="mb-3">
                    {{Form::label ('biografia', 'Biografia')}}
                    {{Form::textarea ('biografia', $user->biography, ['class' => 'form-control', 'placeholder' => 'Biografia','maxlength' => 255])}}

                </div>

                <hr class="mb-4">
                <div class="text-right">
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Aggiorna profilo',['class' => 'btn btn-primary'])}}
                </div>
            </div>
        </div>

        {!! Form::close()!!}
    </div>

@endsection
