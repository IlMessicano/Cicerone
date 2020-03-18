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
