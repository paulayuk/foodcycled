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
                   <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <span style="color: blue; font-weight: bold">Sign Up as:</span>
                    <div class="form-group">
                      <label for="category"></label>
                      <select class="form-control" name="category" id="category">
                         <option>Choose Category:</option>
                         <option value="pantry">Food Pantry Operator</option>
                         <option value="donor">Sponsor</option>
                         <option value="user">User</option>
                      </select>
                    </div>
                    <div class="form-group">
                               
                      <input id="email" type="email" name="email" required  class="input-material">
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
                     <div class="form-group">
                      <input id="password-confirm" type="password" name="password_confirmation" required class="input-material">
                      <label for="login-password" class="label-material">Re -Password</label>
                    </div>
                    {{-- <div class="form-check-inline">
                    <p style="display: inline-block;">Account Type:</p>
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="individual" id="individual" checked>Individual</label>
                    </div>
                    <div class="form-check-inline">
                      <label class="form-check-label"><input type="radio" class="form-check-input" name="organization" id="organization" >Organization</label>
                    </div>   --}}   
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Account Type:</label>
                      <select class="account_type" name="account_type" id="account_type">
                        <option></option>
                         <option value="individual">Individual</option>
                         <option Value="organization">Organization</option>
                      </select>
                    </div>             
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">State</label>
                      <select class="state" name="state" id="state">
                        <option></option>
                         <option value="New York">New York</option>
                         <option Value="New Jersey">New Jersey</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">City</label>
                        <select class="city" name="city" id="city">
                          <option></option>
                          <option value="New York">New York</option>
                          <option>New Jersey</option>
                        </select>
                   </div>
                     <div class="form-group">
                      <input id="zipcode" type="text" name="zipcode" required  class="input-material">
                      <label for="zipcode" class="label-material">Zip-Code</label>
                    </div>
                    <div class="form-group">
                      <input id="address" type="text" name="address" required class="input-material">
                      <label for="address" class="label-material">Address</label>
                    </div>                  
                 <div>
                    <button type="submit" id="login" class="btn btn-info-gradiant">Sign Up</button></div>
                    
                  </form><a href="{{ route('password.request') }}" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="/register" class="signup">Signup</a>
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
