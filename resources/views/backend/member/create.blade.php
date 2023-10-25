@extends('layouts.app')

@section('content')
<form method="post" class="validate" autocomplete="off" action="{{ route('members.store') }}" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="row">
		<div class="col-lg-8">
			<div class="card">
				<div class="card-header">
					<h4 class="header-title">{{ _lang('Add New Member') }}</h4>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('First Name') }}</label>						
								<input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Last Name') }}</label>						
								<input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Member No') }}</label>						
								<input type="text" class="form-control" name="member_no" value="{{ old('member_no') }}" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Job Position') }}</label>						
								<input type="text" class="form-control" name="Job_Position" value="{{ old('Job_Position') }}">
							</div>
						</div>

						@if(auth()->user()->user_type == 'admin')
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Branch') }}</label>						
								<select class="form-control select2" name="branch_id">
									<option value="">{{ get_option('default_branch_name', 'Main Branch') }}</option>
									{{ create_option('branches', 'id', 'name', auth()->user()->branch_id) }}
                                </select>
							</div>
						</div>
						@else
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Branch') }}</label>						
								<select class="form-control" name="branch_id" disabled>
									<option value="">{{ get_option('default_branch_name', 'Main Branch') }}</option>
									{{ create_option('branches', 'id', 'name', auth()->user()->branch_id) }}
                                </select>
							</div>
						</div>
						@endif

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Email') }}</label>						
								<input type="email" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Country Code') }}</label>						
								<select class="form-control select2" name="country_code">
									<option value="">{{ _lang('Country Code') }}</option>
									@foreach(get_country_codes() as $key => $value)
									<option value="{{ $value['dial_code'] }}" {{ old('country_code') == $value['dial_code'] ? 'selected' : '' }}>{{ $value['country'].' (+'.$value['dial_code'].')' }}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Mobile') }}</label>						
								<input type="text"  maxlength="10" class="form-control" name="mobile" value="{{ old('mobile') }}">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Gender') }}</label>						
								<select class="form-control auto-select" data-selected="{{ old('gender') }}" name="gender">
									<option value="">{{ _lang('Select One') }}</option>
									<option value="male">{{ _lang('Male') }}</option>
									<option value="male">{{ _lang('Female') }}</option>
								</select>
							</div>
						</div>

				
						<div class="col-md-6">
							<div class="form-group">
								<label for="ID1" class="control-label">{{ _lang('City') }}</label>
								<select  data-target="secondList" class="firstList selectFilter form-control">
									<option value="-1" selected="selected">Please select..</option>
									<option data-ref="addisketema" value="addisketema">{{ _lang('Addisketema') }}</option>
                                    <option data-ref="lideta" value="lideta">{{ _lang('Lideta') }}</option>
                                    <option data-ref="bole" value="bole">{{ _lang('Bole') }}</option>
                                    <option data-ref="yeka" value="yeka">{{ _lang('Yeka') }}</option>
                                    <option data-ref="gullele" value="gullele">{{ _lang('Gullele') }}</option>
                                    <option data-ref="lemikura" value="lemikura">{{ _lang('Lemikura') }}</option>
                                    <option data-ref="kolfe" value="kolfe">{{ _lang('Kolfe') }}</option>
                                    <option data-ref="akakikality" value="akakikality">{{ _lang('Akakikality') }}</option>
                                    <option data-ref="nifasSilk" value="nifasSilk">{{ _lang('NifasSilk') }}</option>
                                    <option data-ref="kirkos" value="kirkos">{{ _lang('Kirkos') }}</option>
                                    <option data-ref="arada" value="arada">{{ _lang('Arada') }}</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group" data-related-sub-select="ID2">
								<label class="control-label">{{ _lang('State') }}</label>
								<select data-target="thirdList" class="secondList selectFilter form-control" name="state">
									<option value="-1" selected="selected">Please select..</option>
									<option data-belong="addisketema" value="addisketemaworeda01">{{ _lang('addisketemaworeda01') }}</option>
									<option data-belong="addisketema" value="addisketemaworeda02">{{ _lang('addisketemaworeda02') }}</option>
									<option data-belong="addisketema" value="addisketemaworeda03">{{ _lang('addisketemaworeda03') }}</option>
									<option data-belong="addisketema" value="addisketemaworeda04">{{ _lang('addisketemaworeda04') }}</option>
									<option data-belong="addisketema" value="addisketemaworeda05">{{ _lang('addisketemaworeda05') }}</option>
									<option data-belong="addisketema" value="addisketemaworeda06">{{ _lang('addisketemaworeda06') }}</option>
									<option data-belong="addisketema" value="addisketemaworeda07">{{ _lang('addisketemaworeda07') }}</option>
									<option data-belong="addisketema" value="addisketemaworeda08">{{ _lang('addisketemaworeda08') }}</option>
									<option data-belong="addisketema" value="addisketemaworeda09">{{ _lang('addisketemaworeda09') }}</option>
									<option data-belong="addisketema" value="addisketemaworeda10">{{ _lang('addisketemaworeda10') }}</option>
									<option data-belong="lideta" value="lidetaworeda01">{{ _lang('lideta01') }}</option>
									<option data-belong="lideta" value="lidetaworeda02">{{ _lang('lideta02') }}</option>
									<option data-belong="lideta" value="lidetaworeda03">{{ _lang('lideta03') }}</option>
									<option data-belong="lideta" value="lidetaworeda04">{{ _lang('lideta04') }}</option>
									<option data-belong="lideta" value="lidetaworeda05">{{ _lang('lideta05') }}</option>
									<option data-belong="lideta" value="lidetaworeda06">{{ _lang('lideta06') }}</option>
									<option data-belong="lideta" value="lidetaworeda07">{{ _lang('lideta07') }}</option>
									<option data-belong="lideta" value="lidetaworeda08">{{ _lang('lideta08') }}</option>
									<option data-belong="lideta" value="lidetaworeda09">{{ _lang('lideta09') }}</option>
									<option data-belong="lideta" value="lidetaworeda10">{{ _lang('lideta10') }}</option>
									<option data-belong="bole" value="boleworeda01">{{ _lang('bole01') }}</option>
									<option data-belong="bole" value="boleworeda02">{{ _lang('bole02') }}</option>
									<option data-belong="bole" value="boleworeda03">{{ _lang('bole03') }}</option>
									<option data-belong="bole" value="boleworeda04">{{ _lang('bole04') }}</option>
									<option data-belong="bole" value="boleworeda05">{{ _lang('bole05') }}</option>
									<option data-belong="bole" value="boleworeda06">{{ _lang('bole06') }}</option>
									<option data-belong="bole" value="boleworeda07">{{ _lang('bole07') }}</option>
									<option data-belong="bole" value="boleworeda08">{{ _lang('bole08') }}</option>
									<option data-belong="bole" value="boleworeda09">{{ _lang('bole09') }}</option>
									<option data-belong="bole" value="boleworeda10">{{ _lang('bole10') }}</option>
									<option data-belong="bole" value="boleworeda11">{{ _lang('bole11') }}</option>
									<option data-belong="bole" value="boleworeda12">{{ _lang('bole12') }}</option>
									<option data-belong="bole" value="boleworeda13">{{ _lang('bole13') }}</option>
									<option data-belong="bole" value="boleworeda14">{{ _lang('bole14') }}</option>
									<option data-belong="bole" value="boleworeda15">{{ _lang('bole15') }}</option>
									<option data-belong="yeka" value="yekaworeda01">{{ _lang('yeka01') }}</option>
									<option data-belong="yeka" value="yekaworeda02">{{ _lang('yeka02') }}</option>
									<option data-belong="yeka" value="yekaworeda03">{{ _lang('yeka03') }}</option>
									<option data-belong="yeka" value="yekaworeda04">{{ _lang('yeka04') }}</option>
									<option data-belong="yeka" value="yekaworeda05">{{ _lang('yeka05') }}</option>
									<option data-belong="yeka" value="yekaworeda06">{{ _lang('yeka06') }}</option>
									<option data-belong="yeka" value="yekaworeda07">{{ _lang('yeka07') }}</option>
									<option data-belong="yeka" value="yekaworeda08">{{ _lang('yeka08') }}</option>
									<option data-belong="yeka" value="yekaworeda09">{{ _lang('yeka09') }}</option>
									<option data-belong="yeka" value="yekaworeda10">{{ _lang('yeka10') }}</option>
									<option data-belong="yeka" value="yekaworeda11">{{ _lang('yeka11') }}</option>
									<option data-belong="yeka" value="yekaworeda12">{{ _lang('yeka12') }}</option>
									<option data-belong="yeka" value="yekaworeda13">{{ _lang('yeka13') }}</option>
									<option data-belong="yeka" value="yekaworeda14">{{ _lang('yeka14') }}</option>
									<option data-belong="gullele" value="gulleleworeda01">{{ _lang('gullele01') }}</option>
									<option data-belong="gullele" value="gulleleworeda02">{{ _lang('gullele02') }}</option>
									<option data-belong="gullele" value="gulleleworeda03">{{ _lang('gullele03') }}</option>
									<option data-belong="gullele" value="gulleleworeda04">{{ _lang('gullele04') }}</option>
									<option data-belong="gullele" value="gulleleworeda05">{{ _lang('gullele05') }}</option>
									<option data-belong="gullele" value="gulleleworeda06">{{ _lang('gullele06') }}</option>
									<option data-belong="gullele" value="gulleleworeda07">{{ _lang('gullele07') }}</option>
									<option data-belong="gullele" value="gulleleworeda08">{{ _lang('gullele08') }}</option>
									<option data-belong="gullele" value="gulleleworeda09">{{ _lang('gullele09') }}</option>
									<option data-belong="gullele" value="gulleleworeda10">{{ _lang('gullele10') }}</option>
									<option data-belong="lemikura" value="lemikuraworeda03">{{ _lang('lemikura03') }}</option>
									<option data-belong="lemikura" value="lemikuraworeda05">{{ _lang('lemikura05') }}</option>
									<option data-belong="lemikura" value="lemikuraworeda06">{{ _lang('lemikura06') }}</option>
									<option data-belong="lemikura" value="lemikuraworeda08">{{ _lang('lemikura08') }}</option>
									<option data-belong="lemikura" value="lemikuraworeda09">{{ _lang('lemikura09') }}</option>
									<option data-belong="lemikura" value="lemikuraworeda09">{{ _lang('lemikura10') }}</option>
									<option data-belong="lemikura" value="lemikuraworeda13">{{ _lang('lemikura13') }}</option>
									<option data-belong="lemikura" value="lemikuraworeda14">{{ _lang('lemikura14') }}</option>
									<option data-belong="kolfe" value="kolfeworeda01">{{ _lang('kolfe01') }}</option>
									<option data-belong="kolfe" value="kolfeworeda02">{{ _lang('kolfe02') }}</option>
									<option data-belong="kolfe" value="kolfeworeda03">{{ _lang('kolfe03') }}</option>
									<option data-belong="kolfe" value="kolfeworeda04">{{ _lang('kolfe04') }}</option>
									<option data-belong="kolfe" value="kolfeworeda05">{{ _lang('kolfe05') }}</option>
									<option data-belong="kolfe" value="kolfeworeda06">{{ _lang('kolfe06') }}</option>
									<option data-belong="kolfe" value="kolfeworeda07">{{ _lang('kolfe07') }}</option>
									<option data-belong="kolfe" value="kolfeworeda08">{{ _lang('kolfe08') }}</option>
									<option data-belong="kolfe" value="kolfeworeda09">{{ _lang('kolfe09') }}</option>
									<option data-belong="kolfe" value="kolfeworeda10">{{ _lang('kolfe10') }}</option>
									<option data-belong="kolfe" value="kolfeworeda11">{{ _lang('kolfe11') }}</option>
									<option data-belong="kolfe" value="kolfeworeda12">{{ _lang('kolfe12') }}</option>
									<option data-belong="kolfe" value="kolfeworeda13">{{ _lang('kolfe13') }}</option>
									<option data-belong="kolfe" value="kolfeworeda14">{{ _lang('kolfe14') }}</option>
									<option data-belong="kolfe" value="kolfeworeda15">{{ _lang('kolfe15') }}</option>
									<option data-belong="akakikality" value="akakikalityworeda01">{{ _lang('akakikality01') }}</option>
									<option data-belong="akakikality" value="akakikalityworeda02">{{ _lang('akakikality02') }}</option>
									<option data-belong="akakikality" value="akakikalityworeda03">{{ _lang('akakikality03') }}</option>
									<option data-belong="akakikality" value="akakikalityworeda04">{{ _lang('akakikality04') }}</option>
									<option data-belong="akakikality" value="akakikalityworeda05">{{ _lang('akakikality05') }}</option>
									<option data-belong="akakikality" value="akakikalityworeda06">{{ _lang('akakikality06') }}</option>
									<option data-belong="akakikality" value="akakikalityworeda07">{{ _lang('akakikality07') }}</option>
									<option data-belong="akakikality" value="akakikalityworeda08">{{ _lang('akakikality08') }}</option>
									<option data-belong="akakikality" value="akakikalityworeda09">{{ _lang('akakikality09') }}</option>
									<option data-belong="akakikality" value="akakikalityworeda10">{{ _lang('akakikality10') }}</option>
									<option data-belong="akakikality" value="akakikalityworeda11">{{ _lang('akakikality11') }}</option>
									<option data-belong="akakikality" value="akakikalityworeda12">{{ _lang('akakikality12') }}</option>
									<option data-belong="akakikality" value="akakikalityworeda13">{{ _lang('akakikality13') }}</option>
								    <option data-belong="nifasSilk" value="nifassilkworeda01">{{ _lang('nifassilk01') }}</option>
									<option data-belong="nifasSilk" value="nifassilkworeda02">{{ _lang('nifassilk02') }}</option>
									<option data-belong="nifasSilk" value="nifassilkworeda03">{{ _lang('nifassilk03') }}</option>
									<option data-belong="nifasSilk" value="nifassilkworeda04">{{ _lang('nifassilk04') }}</option>
									<option data-belong="nifasSilk" value="nifassilkworeda05">{{ _lang('nifassilk05') }}</option>
									<option data-belong="nifasSilk" value="nifassilkworeda06">{{ _lang('nifassilk06') }}</option>
									<option data-belong="nifasSilk" value="nifassilkworeda07">{{ _lang('nifassilk07') }}</option>
									<option data-belong="nifasSilk" value="nifassilkworeda08">{{ _lang('nifassilk08') }}</option>
									<option data-belong="nifasSilk" value="nifassilkworeda09">{{ _lang('nifassilk09') }}</option>
									<option data-belong="nifasSilk" value="nifassilkworeda10">{{ _lang('nifassilk10') }}</option>
									<option data-belong="nifasSilk" value="nifassilkworeda11">{{ _lang('nifassilk11') }}</option>
									<option data-belong="nifasSilk" value="nifassilkworeda12">{{ _lang('nifassilk12') }}</option>
									<option data-belong="kirkos" value="kirkosworeda01">{{ _lang('kirkos01') }}</option>
									<option data-belong="kirkos" value="kirkosworeda02">{{ _lang('kirkos02') }}</option>
									<option data-belong="kirkos" value="kirkosworeda03">{{ _lang('kirkos03') }}</option>
									<option data-belong="kirkos" value="kirkosworeda04">{{ _lang('kirkos04') }}</option>
									<option data-belong="kirkos" value="kirkosworeda05">{{ _lang('kirkos05') }}</option>
									<option data-belong="kirkos" value="kirkosworeda06">{{ _lang('kirkos06') }}</option>
									<option data-belong="kirkos" value="kirkosworeda07">{{ _lang('kirkos07') }}</option>
									<option data-belong="kirkos" value="kirkosworeda08">{{ _lang('kirkos08') }}</option>
									<option data-belong="kirkos" value="kirkosworeda09">{{ _lang('kirkos09') }}</option>
									<option data-belong="kirkos" value="kirkosworeda10">{{ _lang('kirkos10') }}</option>
									<option data-belong="kirkos" value="kirkosworeda11">{{ _lang('kirkos11') }}</option>
									<option data-belong="arada" value="aradaworeda01">{{ _lang('arada01') }}</option>
									<option data-belong="arada" value="aradaworeda02">{{ _lang('arada02') }}</option>
									<option data-belong="arada" value="aradaworeda03">{{ _lang('arada03') }}</option>
									<option data-belong="arada" value="aradaworeda04">{{ _lang('arada04') }}</option>
									<option data-belong="arada" value="aradaworeda05">{{ _lang('arada05') }}</option>
									<option data-belong="arada" value="aradaworeda06">{{ _lang('arada06') }}</option>
									<option data-belong="arada" value="aradaworeda07">{{ _lang('arada07') }}</option>
									<option data-belong="arada" value="aradaworeda08">{{ _lang('arada08') }}</option>
									<option data-belong="arada" value="aradaworeda09">{{ _lang('arada09') }}</option>
									<option data-belong="arada" value="aradaworeda10">{{ _lang('arada10') }}</option>
								</select> 
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('House No') }}</label>						
								<input type="text" class="form-control" name="House_No" value="{{ old('House_No') }}">
							</div>
						</div>
	
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">{{ _lang('Credit Source') }}</label>						
								<input type="text" class="form-control" name="credit_source" value="{{ old('credit_source') }}">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">{{ _lang('Address') }}</label>						
								<textarea class="form-control" name="address">{{ old('address') }}</textarea>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">{{ _lang('Photo') }}</label>						
								<input type="file" class="form-control dropify" name="photo" >
							</div>
						</div>
							
						<div class="col-md-12">
							<div class="form-group">
								<button type="submit" class="btn btn-primary"><i class="ti-check-box"></i>&nbsp;{{ _lang('Submit') }}</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card">
				<div class="card-header">
					<div class="togglebutton">
                        <h4 class="header-title d-flex align-items-center">{{ _lang('Login Details') }}&nbsp;&nbsp;
                            <input type="checkbox" id="client_login" value="1" name="client_login">
                        </h4>
                    </div>
				</div>
				<div class="card-body" id="client_login_card">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">{{ _lang('Name') }}</label>
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">{{ _lang('Email') }}</label>
								<input type="email" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" class="form-control" name="login_email" value="{{ old('email') }}">
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
								<select class="form-control select2 auto-select" data-selected="{{ old('status') }}" name="status">
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
