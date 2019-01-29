@extends('layouts.authpartial')

@section('content')

<div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                   <form method="POST" action="{{ route('login') }}">
                        @csrf

                    <div class="form-group">
                      <input id="email" type="email" name="email" required autofocus" class="input-material" >
                      <label for="login-email" class="label-material">Email</label>
                           @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                          @endif
                    </div>

                    <div class="form-group">
                                              
                      <input id="password" type="password" name="password" required  class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
              <div>
                    <button type="submit" id="login" class="btn btn-info-gradiant">Log In</button></div>
                   
                  </form>
                
                  <a href="{{ route('password.request') }}" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="/register" class="signup">Signup</a>
                </div>
              </div>
            </div>

            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <!-- <img src="images/app.jpg"> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


                       
@endsection
