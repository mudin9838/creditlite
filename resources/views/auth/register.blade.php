@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card card-signin my-5 p-3">              
				<div class="card-body">
				    <img class="logo" src="{{ get_logo() }}">
					
					<h5 class="text-center py-4">{{ _lang('Create Your Account Now') }}</h4> 

                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            <span>{{ session('error') }}</span>
                        </div>
                    @endif

                    @if(Session::has('success'))
                        <div class="alert alert-success mb-4">
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif	
					
                    <form method="POST" class="form-signup" autocomplete="off" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
							<div class="col-lg-6 mb-3 mb-lg-0">
                                <input id="name" type="text" placeholder="{{ _lang('First Name') }}" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>

							<div class="col-lg-6">
                                <input id="last_name" type="text" placeholder="{{ _lang('Last Name') }}" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <input id="	business_name" type="text" placeholder="{{ _lang('Business Name') }}" class="form-control{{ $errors->has('	business_name') ? ' is-invalid' : '' }}" name="	business_name" value="{{ old('business_name') }}">

                                @if ($errors->has('	business_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('	business_name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-lg-6">
                                <input id="email" type="email" placeholder="{{ _lang('E-Mail Address') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-lg-12">
                                <select class="form-control" name="branch_id">
									<option value="">{{ get_option('default_branch_name', 'Main Branch') }}</option>
									{{ create_option('branches', 'id', 'name', old('branch_id')) }}
                                </select>
                                @if ($errors->has('branch_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('branch_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group row">
                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <select class="form-control{{ $errors->has('country_code') ? ' is-invalid' : '' }} select2" name="country_code" required>
                                    <option value="">{{ _lang('Country Code') }}</option>
                                    @foreach(get_country_codes() as $key => $value)
                                    <option value="{{ $value['dial_code'] }}" {{ old('country_code') == $value['dial_code'] ? 'selected' : '' }}>{{ $value['country'].' (+'.$value['dial_code'].')' }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('country_code'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('country_code') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-lg-6">
                                <input id="mobile" type="text" placeholder="{{ _lang('Mobile') }}" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" required>

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <input id="password" type="password" placeholder="{{ _lang('Password') }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                           <div class="col-lg-6">
                                <input id="password-confirm" type="password" class="form-control" placeholder="{{ _lang('Confirm Password') }}" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <select id="gender" type="text" placeholder="{{ _lang('Gender') }}" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" required>
                                    <option value="">{{ _lang('Select Gender') }}</option>
                                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>{{ _lang('Male') }}</option>
                                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>{{ _lang('Female') }}</option>
                                </select>
                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <select id="city" type="text" placeholder="{{ _lang('city') }}" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" required>
                                    <option value="">{{ _lang('Select city') }}</option>
                                    <option value="addisketema" {{ old('city') == 'Addisketema' ? 'selected' : '' }}>{{ _lang('Addisketema') }}</option>
                                    <option value="lideta" {{old('city') == 'Lideta' ? 'selected' : '' }}>{{ _lang('Lideta') }}</option>
                                    <option value="bole" {{old('city') == 'Bole' ? 'selected' : '' }}>{{ _lang('Bole') }}</option>
                                    <option value="yeka" {{old('city') == 'Yeka' ? 'selected' : '' }}>{{ _lang('Yeka') }}</option>
                                    <option value="gullele" {{old('city') == 'Gullele' ? 'selected' : '' }}>{{ _lang('Gullele') }}</option>
                                    <option value="lemikura" {{old('city') == 'Lemikura' ? 'selected' : '' }}>{{ _lang('Lemikura') }}</option>
                                    <option value="kolfe" {{old('city') == 'Kolfe' ? 'selected' : '' }}>{{ _lang('Kolfe') }}</option>
                                    <option value="akakikality" {{old('city') == 'Akakikality' ? 'selected' : '' }}>{{ _lang('Akakikality') }}</option>
                                    <option value="nifassilk" {{old('city') == 'NifasSilk' ? 'selected' : '' }}>{{ _lang('NifasSilk') }}</option>
                                    <option value="kirkos" {{old('city') == 'Kirkos' ? 'selected' : '' }}>{{ _lang('Kirkos') }}</option>
                                    <option value="arada" {{old('city') == 'Arada' ? 'selected' : '' }}>{{ _lang('Arada') }}</option>
                                </select>
                                @if ($errors->has('city'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <select id="gender" type="text" placeholder="{{ _lang('Gender') }}" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" required>
                                    <option value="">{{ _lang('Select Gender') }}</option>
                                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>{{ _lang('Male') }}</option>
                                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>{{ _lang('Female') }}</option>
                                </select>
                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <select id="state" type="text" placeholder="{{ _lang('State') }}" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" required>
                                    <option value="">{{ _lang('Select Woreda') }}</option>
                                    <option value="addisketemaworeda01" {{ old('state') == 'addisketemaworeda01' ? 'selected' : '' }}>{{ _lang('addisketemaworeda01') }}</option>
									<option value="addisketemaworeda02" {{ old('state') == 'addisketemaworeda02' ? 'selected' : '' }}>{{ _lang('addisketemaworeda02') }}</option>
									<option value="addisketemaworeda03" {{ old('state') == 'addisketemaworeda03' ? 'selected' : '' }}>{{ _lang('addisketemaworeda03') }}</option>
									<option value="addisketemaworeda04" {{ old('state') == 'addisketemaworeda04' ? 'selected' : '' }}>{{ _lang('addisketemaworeda04') }}</option>
									<option value="addisketemaworeda05" {{ old('state') == 'addisketemaworeda05' ? 'selected' : '' }}>{{ _lang('addisketemaworeda05') }}</option>
									<option value="addisketemaworeda06" {{ old('state') == 'addisketemaworeda06' ? 'selected' : '' }}>{{ _lang('addisketemaworeda06') }}</option>
									<option value="addisketemaworeda07" {{ old('state') == 'addisketemaworeda07' ? 'selected' : '' }}>{{ _lang('addisketemaworeda07') }}</option>
									<option value="addisketemaworeda08" {{ old('state') == 'addisketemaworeda08' ? 'selected' : '' }}>{{ _lang('addisketemaworeda08') }}</option>
									<option value="addisketemaworeda09" {{ old('state') == 'addisketemaworeda09' ? 'selected' : '' }}>{{ _lang('addisketemaworeda09') }}</option>
									<option value="addisketemaworeda10" {{ old('state') == 'addisketemaworeda10' ? 'selected' : '' }}>{{ _lang('addisketemaworeda10') }}</option>
									<option value="lidetaworeda01" {{ old('state') == 'lidetaworeda01' ? 'selected' : '' }}>{{ _lang('lideta01') }}</option>
									<option value="lidetaworeda02" {{ old('state') == 'lidetaworeda02' ? 'selected' : '' }}>{{ _lang('lideta02') }}</option>
									<option value="lidetaworeda03" {{ old('state') == 'lidetaworeda03' ? 'selected' : '' }}>{{ _lang('lideta03') }}</option>
									<option value="lidetaworeda04" {{ old('state') == 'lidetaworeda05' ? 'selected' : '' }}>{{ _lang('lideta04') }}</option>
									<option value="lidetaworeda05" {{ old('state') == 'lidetaworeda05' ? 'selected' : '' }}>{{ _lang('lideta05') }}</option>
									<option value="lidetaworeda06" {{ old('state') == 'lidetaworeda06' ? 'selected' : '' }}>{{ _lang('lideta06') }}</option>
									<option value="lidetaworeda07" {{ old('state') == 'lidetaworeda07' ? 'selected' : '' }}>{{ _lang('lideta07') }}</option>
									<option value="lidetaworeda08" {{ old('state') == 'lidetaworeda08' ? 'selected' : '' }}>{{ _lang('lideta08') }}</option>
									<option value="lidetaworeda09" {{ old('state') == 'lidetaworeda09' ? 'selected' : '' }}>{{ _lang('lideta09') }}</option>
									<option value="lidetaworeda10" {{ old('state') == 'lidetaworeda10' ? 'selected' : '' }}>{{ _lang('lideta10') }}</option>
									<option value="boleworeda01" {{ old('state') == 'boleworeda01' ? 'selected' : '' }}>{{ _lang('bole01') }}</option>
									<option value="boleworeda02" {{ old('state') == 'boleworeda02' ? 'selected' : '' }}>{{ _lang('bole02') }}</option>
									<option value="boleworeda03" {{ old('state') == 'boleworeda03' ? 'selected' : '' }}>{{ _lang('bole03') }}</option>
									<option value="boleworeda04" {{ old('state') == 'boleworeda04' ? 'selected' : '' }}>{{ _lang('bole04') }}</option>
									<option value="boleworeda05" {{ old('state') == 'boleworeda05' ? 'selected' : '' }}>{{ _lang('bole05') }}</option>
									<option value="boleworeda06" {{ old('state') == 'boleworeda06' ? 'selected' : '' }}>{{ _lang('bole06') }}</option>
									<option value="boleworeda07" {{ old('state') == 'boleworeda07' ? 'selected' : '' }}>{{ _lang('bole07') }}</option>
									<option value="boleworeda08" {{ old('state') == 'boleworeda08' ? 'selected' : '' }}>{{ _lang('bole08') }}</option>
									<option value="boleworeda09" {{ old('state') == 'boleworeda09' ? 'selected' : '' }}>{{ _lang('bole09') }}</option>
									<option value="boleworeda10" {{ old('state') == 'boleworeda10' ? 'selected' : '' }}>{{ _lang('bole10') }}</option>
									<option value="boleworeda11" {{ old('state') == 'boleworeda11' ? 'selected' : '' }}>{{ _lang('bole11') }}</option>
									<option value="boleworeda12" {{ old('state') == 'boleworeda12' ? 'selected' : '' }}>{{ _lang('bole12') }}</option>
									<option value="boleworeda13" {{ old('state') == 'boleworeda13' ? 'selected' : '' }}>{{ _lang('bole13') }}</option>
									<option value="boleworeda14" {{ old('state') == 'boleworeda14' ? 'selected' : '' }}>{{ _lang('bole14') }}</option>
									<option value="boleworeda15" {{ old('state') == 'boleworeda15' ? 'selected' : '' }}>{{ _lang('bole15') }}</option>
									<option value="yekaworeda01" {{ old('state') == 'yekaworeda01' ? 'selected' : '' }}>{{ _lang('yeka01') }}</option>
									<option value="yekaworeda02" {{ old('state') == 'yekaworeda02' ? 'selected' : '' }}>{{ _lang('yeka02') }}</option>
									<option value="yekaworeda03" {{ old('state') == 'yekaworeda03' ? 'selected' : '' }}>{{ _lang('yeka03') }}</option>
									<option value="yekaworeda04" {{ old('state') == 'yekaworeda04' ? 'selected' : '' }}>{{ _lang('yeka04') }}</option>
									<option value="yekaworeda05" {{ old('state') == 'yekaworeda05' ? 'selected' : '' }}>{{ _lang('yeka05') }}</option>
									<option value="yekaworeda06" {{ old('state') == 'yekaworeda06' ? 'selected' : '' }}>{{ _lang('yeka06') }}</option>
									<option value="yekaworeda07" {{ old('state') == 'yekaworeda07' ? 'selected' : '' }}>{{ _lang('yeka07') }}</option>
									<option value="yekaworeda08" {{ old('state') == 'yekaworeda08' ? 'selected' : '' }}>{{ _lang('yeka08') }}</option>
									<option value="yekaworeda09" {{ old('state') == 'yekaworeda09' ? 'selected' : '' }}>{{ _lang('yeka09') }}</option>
									<option value="yekaworeda10" {{ old('state') == 'yekaworeda10' ? 'selected' : '' }}>{{ _lang('yeka10') }}</option>
									<option value="yekaworeda11" {{ old('state') == 'yekaworeda11' ? 'selected' : '' }}>{{ _lang('yeka11') }}</option>
									<option value="yekaworeda12" {{ old('state') == 'yekaworeda12' ? 'selected' : '' }}>{{ _lang('yeka12') }}</option>
									<option value="yekaworeda13" {{ old('state') == 'yekaworeda13' ? 'selected' : '' }}>{{ _lang('yeka13') }}</option>
									<option value="yekaworeda14" {{ old('state') == 'yekaworeda14' ? 'selected' : '' }}>{{ _lang('yeka14') }}</option>
									<option value="gulleleworeda01" {{ old('state') == 'gulleleworeda01' ? 'selected' : '' }}>{{ _lang('gullele01') }}</option>
									<option value="gulleleworeda02" {{ old('state') == 'gulleleworeda02' ? 'selected' : '' }}>{{ _lang('gullele02') }}</option>
									<option value="gulleleworeda03" {{ old('state') == 'gulleleworeda03' ? 'selected' : '' }}>{{ _lang('gullele03') }}</option>
									<option value="gulleleworeda04" {{ old('state') == 'gulleleworeda04' ? 'selected' : '' }}>{{ _lang('gullele04') }}</option>
									<option value="gulleleworeda05" {{ old('state') == 'gulleleworeda05' ? 'selected' : '' }}>{{ _lang('gullele05') }}</option>
									<option value="gulleleworeda06" {{ old('state') == 'gulleleworeda06' ? 'selected' : '' }}>{{ _lang('gullele06') }}</option>
									<option value="gulleleworeda07" {{ old('state') == 'gulleleworeda07' ? 'selected' : '' }}>{{ _lang('gullele07') }}</option>
									<option value="gulleleworeda08" {{ old('state') == 'gulleleworeda08' ? 'selected' : '' }}>{{ _lang('gullele08') }}</option>
									<option value="gulleleworeda09" {{ old('state') == 'gulleleworeda09' ? 'selected' : '' }}>{{ _lang('gullele09') }}</option>
									<option value="gulleleworeda10" {{ old('state') == 'gulleleworeda10' ? 'selected' : '' }}>{{ _lang('gullele10') }}</option>
									<option value="lemikuraworeda03" {{ old('state') == 'lemikuraworeda03' ? 'selected' : '' }}>{{ _lang('lemikura03') }}</option>
									<option value="lemikuraworeda05" {{ old('state') == 'lemikuraworeda05' ? 'selected' : '' }}>{{ _lang('lemikura05') }}</option>
									<option value="lemikuraworeda06" {{ old('state') == 'lemikuraworeda06' ? 'selected' : '' }}>{{ _lang('lemikura06') }}</option>
									<option value="lemikuraworeda08" {{ old('state') == 'lemikuraworeda08' ? 'selected' : '' }}>{{ _lang('lemikura08') }}</option>
									<option value="lemikuraworeda09" {{ old('state') == 'lemikuraworeda09' ? 'selected' : '' }}>{{ _lang('lemikura09') }}</option>
									<option value="lemikuraworeda09" {{ old('state') == 'lemikuraworeda09' ? 'selected' : '' }}>{{ _lang('lemikura10') }}</option>
									<option value="lemikuraworeda13" {{ old('state') == 'lemikuraworeda13' ? 'selected' : '' }}>{{ _lang('lemikura13') }}</option>
									<option value="lemikuraworeda14" {{ old('state') == 'lemikuraworeda14' ? 'selected' : '' }}>{{ _lang('lemikura14') }}</option>
									<option value="kolfeworeda01" {{ old('state') == 'kolfeworeda01' ? 'selected' : '' }}>{{ _lang('kolfe01') }}</option>
									<option value="kolfeworeda02" {{ old('state') == 'kolfeworeda02' ? 'selected' : '' }}>{{ _lang('kolfe02') }}</option>
									<option value="kolfeworeda03" {{ old('state') == 'kolfeworeda03' ? 'selected' : '' }}>{{ _lang('kolfe03') }}</option>
									<option value="kolfeworeda04" {{ old('state') == 'kolfeworeda04' ? 'selected' : '' }}>{{ _lang('kolfe04') }}</option>
									<option value="kolfeworeda05" {{ old('state') == 'kolfeworeda05' ? 'selected' : '' }}>{{ _lang('kolfe05') }}</option>
									<option value="kolfeworeda06" {{ old('state') == 'kolfeworeda06' ? 'selected' : '' }}>{{ _lang('kolfe06') }}</option>
									<option value="kolfeworeda07" {{ old('state') == 'kolfeworeda07' ? 'selected' : '' }}>{{ _lang('kolfe07') }}</option>
									<option value="kolfeworeda08" {{ old('state') == 'kolfeworeda08' ? 'selected' : '' }}>{{ _lang('kolfe08') }}</option>
									<option value="kolfeworeda09" {{ old('state') == 'kolfeworeda09' ? 'selected' : '' }}>{{ _lang('kolfe09') }}</option>
									<option value="kolfeworeda10" {{ old('state') == 'kolfeworeda10' ? 'selected' : '' }}>{{ _lang('kolfe10') }}</option>
									<option value="kolfeworeda11" {{ old('state') == 'kolfeworeda11' ? 'selected' : '' }}>{{ _lang('kolfe11') }}</option>
									<option value="kolfeworeda12" {{ old('state') == 'kolfeworeda12' ? 'selected' : '' }}>{{ _lang('kolfe12') }}</option>
									<option value="kolfeworeda13" {{ old('state') == 'kolfeworeda13' ? 'selected' : '' }}>{{ _lang('kolfe13') }}</option>
									<option value="kolfeworeda14" {{ old('state') == 'kolfeworeda14' ? 'selected' : '' }}>{{ _lang('kolfe14') }}</option>
									<option value="kolfeworeda15" {{ old('state') == 'kolfeworeda15' ? 'selected' : '' }}>{{ _lang('kolfe15') }}</option>
									<option value="akakikalityworeda01" {{ old('state') == 'akakikalityworeda01' ? 'selected' : '' }}>{{ _lang('akakikality01') }}</option>
									<option value="akakikalityworeda02" {{ old('state') == 'akakikalityworeda02' ? 'selected' : '' }}>{{ _lang('akakikality02') }}</option>
									<option value="akakikalityworeda03" {{ old('state') == 'akakikalityworeda03' ? 'selected' : '' }}>{{ _lang('akakikality03') }}</option>
									<option value="akakikalityworeda04" {{ old('state') == 'akakikalityworeda04' ? 'selected' : '' }}>{{ _lang('akakikality04') }}</option>
									<option value="akakikalityworeda05" {{ old('state') == 'akakikalityworeda05' ? 'selected' : '' }}>{{ _lang('akakikality05') }}</option>
									<option value="akakikalityworeda06" {{ old('state') == 'akakikalityworeda06' ? 'selected' : '' }}>{{ _lang('akakikality06') }}</option>
									<option value="akakikalityworeda07" {{ old('state') == 'akakikalityworeda07' ? 'selected' : '' }}>{{ _lang('akakikality07') }}</option>
									<option value="akakikalityworeda08" {{ old('state') == 'akakikalityworeda08' ? 'selected' : '' }}>{{ _lang('akakikality08') }}</option>
									<option value="akakikalityworeda09" {{ old('state') == 'akakikalityworeda09' ? 'selected' : '' }}>{{ _lang('akakikality09') }}</option>
									<option value="akakikalityworeda10" {{ old('state') == 'akakikalityworeda10' ? 'selected' : '' }}>{{ _lang('akakikality10') }}</option>
									<option value="akakikalityworeda11" {{ old('state') == 'akakikalityworeda11' ? 'selected' : '' }}>{{ _lang('akakikality11') }}</option>
									<option value="akakikalityworeda12" {{ old('state') == 'akakikalityworeda12' ? 'selected' : '' }}>{{ _lang('akakikality12') }}</option>
									<option value="akakikalityworeda13" {{ old('state') == 'akakikalityworeda13' ? 'selected' : '' }}>{{ _lang('akakikality13') }}</option>
								    <option value="nifassilkworeda01" {{ old('state') == 'nifassilkworeda01' ? 'selected' : '' }}>{{ _lang('nifassilk01') }}</option>
									<option value="nifassilkworeda02" {{ old('state') == 'nifassilkworeda02' ? 'selected' : '' }}>{{ _lang('nifassilk02') }}</option>
									<option value="nifassilkworeda03" {{ old('state') == 'nifassilkworeda03' ? 'selected' : '' }}>{{ _lang('nifassilk03') }}</option>
									<option value="nifassilkworeda04" {{ old('state') == 'nifassilkworeda04' ? 'selected' : '' }}>{{ _lang('nifassilk04') }}</option>
									<option value="nifassilkworeda05" {{ old('state') == 'nifassilkworeda05' ? 'selected' : '' }}>{{ _lang('nifassilk05') }}</option>
									<option value="nifassilkworeda06" {{ old('state') == 'nifassilkworeda06' ? 'selected' : '' }}>{{ _lang('nifassilk06') }}</option>
									<option value="nifassilkworeda07" {{ old('state') == 'nifassilkworeda07' ? 'selected' : '' }}>{{ _lang('nifassilk07') }}</option>
									<option value="nifassilkworeda08" {{ old('state') == 'nifassilkworeda08' ? 'selected' : '' }}>{{ _lang('nifassilk08') }}</option>
									<option value="nifassilkworeda09" {{ old('state') == 'nifassilkworeda09' ? 'selected' : '' }}>{{ _lang('nifassilk09') }}</option>
									<option value="nifassilkworeda10" {{ old('state') == 'nifassilkworeda10' ? 'selected' : '' }}>{{ _lang('nifassilk10') }}</option>
									<option value="nifassilkworeda11" {{ old('state') == 'nifassilkworeda11' ? 'selected' : '' }}>{{ _lang('nifassilk11') }}</option>
									<option value="nifassilkworeda12" {{ old('state') == 'nifassilkworeda12' ? 'selected' : '' }}>{{ _lang('nifassilk12') }}</option>
									<option value="kirkosworeda01" {{ old('state') == 'kirkosworeda01' ? 'selected' : '' }}>{{ _lang('kirkos01') }}</option>
									<option value="kirkosworeda02" {{ old('state') == 'kirkosworeda02' ? 'selected' : '' }}>{{ _lang('kirkos02') }}</option>
									<option value="kirkosworeda03" {{ old('state') == 'kirkosworeda03' ? 'selected' : '' }}>{{ _lang('kirkos03') }}</option>
									<option value="kirkosworeda04" {{ old('state') == 'kirkosworeda04' ? 'selected' : '' }}>{{ _lang('kirkos04') }}</option>
									<option value="kirkosworeda05" {{ old('state') == 'kirkosworeda05' ? 'selected' : '' }}>{{ _lang('kirkos05') }}</option>
									<option value="kirkosworeda06" {{ old('state') == 'kirkosworeda06' ? 'selected' : '' }}>{{ _lang('kirkos06') }}</option>
									<option value="kirkosworeda07" {{ old('state') == 'kirkosworeda07' ? 'selected' : '' }}>{{ _lang('kirkos07') }}</option>
									<option value="kirkosworeda08" {{ old('state') == 'kirkosworeda08' ? 'selected' : '' }}>{{ _lang('kirkos08') }}</option>
									<option value="kirkosworeda09" {{ old('state') == 'kirkosworeda09' ? 'selected' : '' }}>{{ _lang('kirkos09') }}</option>
									<option value="kirkosworeda10" {{ old('state') == 'kirkosworeda10' ? 'selected' : '' }}>{{ _lang('kirkos10') }}</option>
									<option value="kirkosworeda11" {{ old('state') == 'kirkosworeda11' ? 'selected' : '' }}>{{ _lang('kirkos11') }}</option>
									<option value="aradaworeda01" {{ old('state') == 'aradaworeda01' ? 'selected' : '' }}>{{ _lang('arada01') }}</option>
									<option value="aradaworeda02" {{ old('state') == 'aradaworeda02' ? 'selected' : '' }}>{{ _lang('arada02') }}</option>
									<option value="aradaworeda03" {{ old('state') == 'aradaworeda03' ? 'selected' : '' }}>{{ _lang('arada03') }}</option>
									<option value="aradaworeda04" {{ old('state') == 'aradaworeda04' ? 'selected' : '' }}>{{ _lang('arada04') }}</option>
									<option value="aradaworeda05" {{ old('state') == 'aradaworeda05' ? 'selected' : '' }}>{{ _lang('arada05') }}</option>
									<option value="aradaworeda06" {{ old('state') == 'aradaworeda06' ? 'selected' : '' }}>{{ _lang('arada06') }}</option>
									<option value="aradaworeda07" {{ old('state') == 'aradaworeda07' ? 'selected' : '' }}>{{ _lang('arada07') }}</option>
									<option value="aradaworeda08" {{ old('state') == 'aradaworeda08' ? 'selected' : '' }}>{{ _lang('arada08') }}</option>
									<option value="aradaworeda09" {{ old('state') == 'aradaworeda09' ? 'selected' : '' }}>{{ _lang('arada09') }}</option>
									<option value="aradaworeda10" {{ old('state') == 'aradaworeda10' ? 'selected' : '' }}>{{ _lang('arada10') }}</option>
                                </select>
                                @if ($errors->has('state'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="col-lg-6">
                                <input id="zip" type="text" placeholder="{{ _lang('Zip') }}" class="form-control{{ $errors->has('zip') ? ' is-invalid' : '' }}" name="zip" value="{{ old('zip') }}" required>

                                @if ($errors->has('zip'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-lg-12">
                                <textarea id="address" type="text" placeholder="{{ _lang('Address') }}" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" required>{{ old('address') }}</textarea>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-lg-12">
                                <input id="credit_source" type="text" placeholder="{{ _lang('Credit source') }}" class="form-control{{ $errors->has('credit_source') ? ' is-invalid' : '' }}" name="credit_source" value="{{ old('credit_source') }}" required>

                                @if ($errors->has('credit_source'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('credit_source') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="hidden" class="{{ $errors->has('g-recaptcha-response') ? ' is-invalid' : '' }}" name="g-recaptcha-response" id="recaptcha">
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group row mt-5">
							<div class="col-lg-12 text-center">
								<button type="submit" class="btn btn-primary btn-login">
								{{ _lang('Create My Account') }}
                                </button>
							</div>
						</div>
                        <div class="form-group row mt-5">
							<div class="col-lg-12 text-center">
							   {{ _lang('Already Have An Account?') }} 
                               <a href="{{ route('login') }}">{{ _lang('Log In Here') }}</a>
							</div>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if(get_option('enable_recaptcha', 0) == 1)
<script src="https://www.google.com/recaptcha/api.js?render={{ get_option('recaptcha_site_key') }}"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('{{ get_option('recaptcha_site_key') }}', {action: 'register'}).then(function(token) {
        if (token) {
            document.getElementById('recaptcha').value = token;
        }
        });
    });
</script>
@endif
@endsection
