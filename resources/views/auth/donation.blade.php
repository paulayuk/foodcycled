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
                 <span style="color: blue; font-weight: bold">Thanks for donating</span>
                    <div class="form-group">
                      <input id="name" type="text" name="name" required  class="input-material">
                      <input id="category" type="hidden" name="category" value="donor">
                      <label for="login-username" class="label-material">Your Name or Organization name</label>
                    </div>
                    <div class="form-group">
                      <input id="email" type="email" name="email" required  class="input-material">
                      <label for="login-email" class="label-material">Email</label>
                    </div>
                    <div class="form-group">
                      <input id="password" type="password" name="password" required class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                     <div class="form-group">
                      <input id="password-confirm" type="password" name="password_confirmation" required class="input-material">
                      <label for="login-password" class="label-material">Re -Password</label>
                    </div>
                   <div class="form-group">
                      <label for="exampleFormControlSelect1">Account Type:</label>
                      <select class="account_type" name="account_type" id="account_type">
                        <option>Choose your category</option>
                         <option value="individual">Individual</option>
                         <option Value="organization">Organization</option>
                      </select>
                    </div> 
                    
                  <div class="form-group">
                     
                       <input id="state" type="text" name="state" required  class="input-material">
                      <label for="login-password" class="label-material">State</label>
                    </div>
                    <div class="form-group">
                        <input id="city" type="text" name="city" required  class="input-material">
                      <label for="login-password" class="label-material">city</label>
                   </div>
                     <div class="form-group">
                      <input id="zipcode" type="text" name="zipcode" required  class="input-material">
                      <label for="zipcode" class="label-material">Zip-Code</label>
                    </div>
                    <div class="form-group">
                      <input id="address" type="text" name="address" required class="input-material">
                      <label for="login-email" class="label-material">Address</label>
                    </div>
                    
                      <div>
                    <button type="submit" id="login" class="btn btn-info-gradiant">Sign Up</button></div>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
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
