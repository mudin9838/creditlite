@extends('layouts.app')

@section('content')
<form method="post" class="validate" autocomplete="off" action="{{ action('MemberController@update', $id) }}" enctype="multipart/form-data">
	{{ csrf_field()}}
	<div class="row">
		<div class="col-lg-8">
			<div class="card">
				<div class="card-header">
					<h4 class="header-title">{{ _lang('Update Member Information') }}</h4>
				</div>
				<div class="card-body">
					<input name="_method" type="hidden" value="PATCH">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('First Name') }}</label>
								<input type="text" class="form-control" name="first_name" value="{{ $member->first_name }}" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Last Name') }}</label>
								<input type="text" class="form-control" name="last_name" value="{{ $member->last_name }}" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Member No') }}</label>
								<input type="text" class="form-control" name="member_no" value="{{ $member->member_no }}" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Job_Position') }}</label>
								<input type="text" class="form-control" name="Job_Position" value="{{ $member->Job_Position }}">
							</div>
						</div>

						@if(auth()->user()->user_type == 'admin')
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Branch') }}</label>
								<select class="form-control select2" name="branch_id">
									<option value="">{{ get_option('default_branch_name', 'Main Branch') }}</option>
									{{ create_option('branches', 'id', 'name', $member->branch_id) }}
                                </select>
							</div>
						</div>
						@else
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Branch') }}</label>
								<select class="form-control" name="branch_id" disabled>
									<option value="">{{ get_option('default_branch_name', 'Main Branch') }}</option>
									{{ create_option('branches', 'id', 'name', $member->branch_id) }}
                                </select>
							</div>
						</div>
						@endif

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Email') }}</label>
								<input type="text" class="form-control" name="email" value="{{ $member->email }}">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Country Code') }}</label>
								<select class="form-control select2 auto-select" name="country_code" data-selected="{{ $member->country_code }}">
									<option value="">{{ _lang('Country Code') }}</option>
									@foreach(get_country_codes() as $key => $value)
									<option value="{{ $value['dial_code'] }}">{{ $value['country'].' (+'.$value['dial_code'].')' }}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Mobile') }}</label>
								<input type="text" class="form-control" name="mobile" value="{{ old('mobile',$member->mobile) }}">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Gender') }}</label>
								<select class="form-control auto-select" data-selected="{{ $member->gender }}" name="gender">
									<option value="">{{ _lang('Select One') }}</option>
									<option value="male">{{ _lang('Male') }}</option>
									<option value="male">{{ _lang('Female') }}</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('City') }}</label>
								<select class="form-control auto-select" data-selected="{{ $member->city }}" name="city">
									<option value="">{{ _lang('Select One') }}</option>
									<option value="addisketema">{{ _lang('Addisketema') }}</option>
                                    <option value="lideta">{{ _lang('Lideta') }}</option>
                                    <option value="bole">{{ _lang('Bole') }}</option>
                                    <option value="yeka">{{ _lang('Yeka') }}</option>
                                    <option value="gullele">{{ _lang('Gullele') }}</option>
                                    <option value="lemikura">{{ _lang('Lemikura') }}</option>
                                    <option value="kolfe">{{ _lang('Kolfe') }}</option>
                                    <option value="akakikality">{{ _lang('Akakikality') }}</option>
                                    <option value="nifasSilk">{{ _lang('NifasSilk') }}</option>
                                    <option value="kirkos">{{ _lang('Kirkos') }}</option>
                                    <option value="arada">{{ _lang('Arada') }}</option>
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('State') }}</label>
								<select class="form-control auto-select" data-selected="{{ $member->state }}" name="state">
									<option value="">{{ _lang('Select One') }}</option>
									<option value="addisketemaworeda01">{{ _lang('addisketemaworeda01') }}</option>
									<option value="addisketemaworeda02">{{ _lang('addisketemaworeda02') }}</option>
									<option value="addisketemaworeda03">{{ _lang('addisketemaworeda03') }}</option>
									<option value="addisketemaworeda04">{{ _lang('addisketemaworeda04') }}</option>
									<option value="addisketemaworeda05">{{ _lang('addisketemaworeda05') }}</option>
									<option value="addisketemaworeda06">{{ _lang('addisketemaworeda06') }}</option>
									<option value="addisketemaworeda07">{{ _lang('addisketemaworeda07') }}</option>
									<option value="addisketemaworeda08">{{ _lang('addisketemaworeda08') }}</option>
									<option value="addisketemaworeda09">{{ _lang('addisketemaworeda09') }}</option>
									<option value="addisketemaworeda10">{{ _lang('addisketemaworeda10') }}</option>
									<option value="lidetaworeda01">{{ _lang('lideta01') }}</option>
									<option value="lidetaworeda02">{{ _lang('lideta02') }}</option>
									<option value="lidetaworeda03">{{ _lang('lideta03') }}</option>
									<option value="lidetaworeda04">{{ _lang('lideta04') }}</option>
									<option value="lidetaworeda05">{{ _lang('lideta05') }}</option>
									<option value="lidetaworeda06">{{ _lang('lideta06') }}</option>
									<option value="lidetaworeda07">{{ _lang('lideta07') }}</option>
									<option value="lidetaworeda08">{{ _lang('lideta08') }}</option>
									<option value="lidetaworeda09">{{ _lang('lideta09') }}</option>
									<option value="lidetaworeda10">{{ _lang('lideta10') }}</option>
									<option value="boleworeda01">{{ _lang('bole01') }}</option>
									<option value="boleworeda02">{{ _lang('bole02') }}</option>
									<option value="boleworeda03">{{ _lang('bole03') }}</option>
									<option value="boleworeda04">{{ _lang('bole04') }}</option>
									<option value="boleworeda05">{{ _lang('bole05') }}</option>
									<option value="boleworeda06">{{ _lang('bole06') }}</option>
									<option value="boleworeda07">{{ _lang('bole07') }}</option>
									<option value="boleworeda08">{{ _lang('bole08') }}</option>
									<option value="boleworeda09">{{ _lang('bole09') }}</option>
									<option value="boleworeda10">{{ _lang('bole10') }}</option>
									<option value="boleworeda11">{{ _lang('bole11') }}</option>
									<option value="boleworeda12">{{ _lang('bole12') }}</option>
									<option value="boleworeda13">{{ _lang('bole13') }}</option>
									<option value="boleworeda14">{{ _lang('bole14') }}</option>
									<option value="boleworeda15">{{ _lang('bole15') }}</option>
									<option value="yekaworeda01">{{ _lang('yeka01') }}</option>
									<option value="yekaworeda02">{{ _lang('yeka02') }}</option>
									<option value="yekaworeda03">{{ _lang('yeka03') }}</option>
									<option value="yekaworeda04">{{ _lang('yeka04') }}</option>
									<option value="yekaworeda05">{{ _lang('yeka05') }}</option>
									<option value="yekaworeda06">{{ _lang('yeka06') }}</option>
									<option value="yekaworeda07">{{ _lang('yeka07') }}</option>
									<option value="yekaworeda08">{{ _lang('yeka08') }}</option>
									<option value="yekaworeda09">{{ _lang('yeka09') }}</option>
									<option value="yekaworeda10">{{ _lang('yeka10') }}</option>
									<option value="yekaworeda11">{{ _lang('yeka11') }}</option>
									<option value="yekaworeda12">{{ _lang('yeka12') }}</option>
									<option value="yekaworeda13">{{ _lang('yeka13') }}</option>
									<option value="yekaworeda14">{{ _lang('yeka14') }}</option>
									<option value="gulleleworeda01">{{ _lang('gullele01') }}</option>
									<option value="gulleleworeda02">{{ _lang('gullele02') }}</option>
									<option value="gulleleworeda03">{{ _lang('gullele03') }}</option>
									<option value="gulleleworeda04">{{ _lang('gullele04') }}</option>
									<option value="gulleleworeda05">{{ _lang('gullele05') }}</option>
									<option value="gulleleworeda06">{{ _lang('gullele06') }}</option>
									<option value="gulleleworeda07">{{ _lang('gullele07') }}</option>
									<option value="gulleleworeda08">{{ _lang('gullele08') }}</option>
									<option value="gulleleworeda09">{{ _lang('gullele09') }}</option>
									<option value="gulleleworeda10">{{ _lang('gullele10') }}</option>
									<option value="lemikuraworeda03">{{ _lang('lemikura03') }}</option>
									<option value="lemikuraworeda05">{{ _lang('lemikura05') }}</option>
									<option value="lemikuraworeda06">{{ _lang('lemikura06') }}</option>
									<option value="lemikuraworeda08">{{ _lang('lemikura08') }}</option>
									<option value="lemikuraworeda09">{{ _lang('lemikura09') }}</option>
									<option value="lemikuraworeda09">{{ _lang('lemikura10') }}</option>
									<option value="lemikuraworeda13">{{ _lang('lemikura13') }}</option>
									<option value="lemikuraworeda14">{{ _lang('lemikura14') }}</option>
									<option value="kolfeworeda01">{{ _lang('kolfe01') }}</option>
									<option value="kolfeworeda02">{{ _lang('kolfe02') }}</option>
									<option value="kolfeworeda03">{{ _lang('kolfe03') }}</option>
									<option value="kolfeworeda04">{{ _lang('kolfe04') }}</option>
									<option value="kolfeworeda05">{{ _lang('kolfe05') }}</option>
									<option value="kolfeworeda06">{{ _lang('kolfe06') }}</option>
									<option value="kolfeworeda07">{{ _lang('kolfe07') }}</option>
									<option value="kolfeworeda08">{{ _lang('kolfe08') }}</option>
									<option value="kolfeworeda09">{{ _lang('kolfe09') }}</option>
									<option value="kolfeworeda10">{{ _lang('kolfe10') }}</option>
									<option value="kolfeworeda11">{{ _lang('kolfe11') }}</option>
									<option value="kolfeworeda12">{{ _lang('kolfe12') }}</option>
									<option value="kolfeworeda13">{{ _lang('kolfe13') }}</option>
									<option value="kolfeworeda14">{{ _lang('kolfe14') }}</option>
									<option value="kolfeworeda15">{{ _lang('kolfe15') }}</option>
									<option value="akakikalityworeda01">{{ _lang('akakikality01') }}</option>
									<option value="akakikalityworeda02">{{ _lang('akakikality02') }}</option>
									<option value="akakikalityworeda03">{{ _lang('akakikality03') }}</option>
									<option value="akakikalityworeda04">{{ _lang('akakikality04') }}</option>
									<option value="akakikalityworeda05">{{ _lang('akakikality05') }}</option>
									<option value="akakikalityworeda06">{{ _lang('akakikality06') }}</option>
									<option value="akakikalityworeda07">{{ _lang('akakikality07') }}</option>
									<option value="akakikalityworeda08">{{ _lang('akakikality08') }}</option>
									<option value="akakikalityworeda09">{{ _lang('akakikality09') }}</option>
									<option value="akakikalityworeda10">{{ _lang('akakikality10') }}</option>
									<option value="akakikalityworeda11">{{ _lang('akakikality11') }}</option>
									<option value="akakikalityworeda12">{{ _lang('akakikality12') }}</option>
									<option value="akakikalityworeda13">{{ _lang('akakikality13') }}</option>
								    <option value="nifassilkworeda01">{{ _lang('nifassilk01') }}</option>
									<option value="nifassilkworeda02">{{ _lang('nifassilk02') }}</option>
									<option value="nifassilkworeda03">{{ _lang('nifassilk03') }}</option>
									<option value="nifassilkworeda04">{{ _lang('nifassilk04') }}</option>
									<option value="nifassilkworeda05">{{ _lang('nifassilk05') }}</option>
									<option value="nifassilkworeda06">{{ _lang('nifassilk06') }}</option>
									<option value="nifassilkworeda07">{{ _lang('nifassilk07') }}</option>
									<option value="nifassilkworeda08">{{ _lang('nifassilk08') }}</option>
									<option value="nifassilkworeda09">{{ _lang('nifassilk09') }}</option>
									<option value="nifassilkworeda10">{{ _lang('nifassilk10') }}</option>
									<option value="nifassilkworeda11">{{ _lang('nifassilk11') }}</option>
									<option value="nifassilkworeda12">{{ _lang('nifassilk12') }}</option>
									<option value="kirkosworeda01">{{ _lang('kirkos01') }}</option>
									<option value="kirkosworeda02">{{ _lang('kirkos02') }}</option>
									<option value="kirkosworeda03">{{ _lang('kirkos03') }}</option>
									<option value="kirkosworeda04">{{ _lang('kirkos04') }}</option>
									<option value="kirkosworeda05">{{ _lang('kirkos05') }}</option>
									<option value="kirkosworeda06">{{ _lang('kirkos06') }}</option>
									<option value="kirkosworeda07">{{ _lang('kirkos07') }}</option>
									<option value="kirkosworeda08">{{ _lang('kirkos08') }}</option>
									<option value="kirkosworeda09">{{ _lang('kirkos09') }}</option>
									<option value="kirkosworeda10">{{ _lang('kirkos10') }}</option>
									<option value="kirkosworeda11">{{ _lang('kirkos11') }}</option>
									<option value="aradaworeda01">{{ _lang('arada01') }}</option>
									<option value="aradaworeda02">{{ _lang('arada02') }}</option>
									<option value="aradaworeda03">{{ _lang('arada03') }}</option>
									<option value="aradaworeda04">{{ _lang('arada04') }}</option>
									<option value="aradaworeda05">{{ _lang('arada05') }}</option>
									<option value="aradaworeda06">{{ _lang('arada06') }}</option>
									<option value="aradaworeda07">{{ _lang('arada07') }}</option>
									<option value="aradaworeda08">{{ _lang('arada08') }}</option>
									<option value="aradaworeda09">{{ _lang('arada09') }}</option>
									<option value="aradaworeda10">{{ _lang('arada10') }}</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('House_No') }}</label>
								<input type="text" class="form-control" name="House_No" value="{{ $member->House_No }}">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">{{ _lang('Credit Source') }}</label>
								<input type="text" class="form-control" name="credit_source" value="{{ $member->credit_source }}">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">{{ _lang('Address') }}</label>
								<textarea class="form-control" name="address">{{ $member->address }}</textarea>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">{{ _lang('Photo') }}</label>
								<input type="file" class="form-control dropify" name="photo" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" data-default-file="{{ profile_picture($member->photo) }}">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<button type="submit" class="btn btn-primary"><i class="ti-check-box"></i>&nbsp;{{ _lang('Update') }}</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-4">
			<div class="card">
				<div class="card-header">
					@if($member->user_id == NULL)
						<div class="togglebutton">
							<h4 class="header-title d-flex align-items-center">{{ _lang('Login Details') }}&nbsp;&nbsp;
								<input type="checkbox" id="client_login" value="1" name="client_login">
							</h4>
						</div>
					@else
						<h4 class="header-title">{{ _lang('Login Details') }}</h4>
						<input type="hidden" value="1" name="client_login">
					@endif
				</div>
				<div class="card-body" {{ $member->user_id == NULL ? 'id=client_login_card' : '' }}>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">{{ _lang('Name') }}</label>
								<input type="text" class="form-control" name="name" value="{{ $member->user->name }}">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">{{ _lang('Email') }}</label>
								<input type="text" class="form-control" name="login_email" value="{{ $member->user->email }}">
							</div>
						</div>


						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">{{ _lang('Password') }}</label>
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">{{ _lang('Status') }}</label>
								<select class="form-control select2 auto-select" data-selected="{{ $member->user->status }}" name="status">
									<option value="">{{ _lang('Select One') }}</option>
									<option value="1">{{ _lang('Active') }}</option>
									<option value="0">{{ _lang('In Active') }}</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</form>
@endsection


