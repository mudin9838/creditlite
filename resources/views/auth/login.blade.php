@extends('layouts.auth')

@section('content')
<section class="vh-100" style="background-color: black;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="public\uploads\media\front.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                    	<form method="POST" class="form-signin" action="{{ route('login') }}">
                        @csrf
  
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0"><img style="margin-left: 200px" class="logo" src="{{ get_logo() }}"></span> 
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">{{ _lang('Login To Your Account') }}
    @if(Session::has('error'))
                          <div class="alert alert-danger text-center">
                              <strong>{{ session('error') }}</strong>
                          </div>
                      @endif
  </h5>
  @if(Session::has('registration_success'))
                          <div class="alert alert-success text-center">
                              <strong>{{ session('registration_success') }}</strong>
                          </div>
                      @endif
  
  
                    <div class="form-outline mb-4">
                                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-lg" name="email" value="{{ old('email') }}" placeholder="{{ _lang('Email') }}" required autofocus>
  
                      <label class="form-label" for="form2Example17">Email address</label>
                      
                    </div>
  
                    <div class="form-outline mb-4">
                     <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-lg" name="password" placeholder="{{ _lang('Password') }}" required>
  
                                  @if ($errors->has('password'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>
   <div class="form-group row">
                            <div class="col-md-12">
                                <input type="hidden" name="g-recaptcha-response" id="recaptcha">
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						{{-- <div class="text-center">
							<div class="custom-control custom-checkbox mb-3">
								<input type="checkbox" name="remember" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
								<label class="custom-control-label" for="remember">{{ _lang('Remember Me') }}</label>
							</div>
						</div> --}}

                    <div class="pt-1 mb-4">
   <button type="submit" class="btn btn-dark btn-lg btn-block">
                                      {{ _lang('Login') }}
                                  </button>
  
                                  @if(get_option('member_signup') == 1)
                                      <a href="{{ route('register') }}" class="btn btn-link btn-register">{{ _lang('Create Account') }}</a>
                                  @endif		
                    </div> 
{{--   
                   <div class="form-group row mt-3">
                            <div class="col-md-12">
								<a class="btn-link" href="{{ route('password.request') }}">
									{{ _lang('Forgot Password?') }}
								</a>
							</div>
                        </div> --}}
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@if(get_option('enable_recaptcha', 0) == 1)
<script src="https://www.google.com/recaptcha/api.js?render={{ get_option('recaptcha_site_key') }}"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('{{ get_option('recaptcha_site_key') }}', {action: 'login'}).then(function(token) {
        if (token) {
            document.getElementById('recaptcha').value = token;
        }
        });
    });
</script>
@endif
@endsection