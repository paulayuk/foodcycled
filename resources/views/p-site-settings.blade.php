@extends('layouts.newapp')

@section('content')
<div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="images/faces/face1.jpg" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">{{Auth::user()->organization_name}}</span>
                <span class="text-secondary text-small">{{ Auth::user()->address }}</span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
         @can('isAdmin')
          <li class="nav-item">
            <a class="nav-link" href="/all-pantries">
              <span class="menu-title">All Pantries</span>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
          </li>
        @endcan
        @can('isAdmin')
          <li class="nav-item">
            <a class="nav-link" href="/all-tickets">
              <span class="menu-title">All Donated Tickets</span>
              <i class="mdi mdi-ticket  menu-icon"></i>
            </a>
          </li>
        @endcan
         @can('isDonor')
          <li class="nav-item">
            <a class="nav-link" href="/all-tickets">
              <span class="menu-title">All Donated Tickets</span>
              <i class="mdi mdi-ticket  menu-icon"></i>
            </a>
          </li>
        @endcan
         @can('isPantry')
          <li class="nav-item">
            <a class="nav-link" href="/all-tickets">
              <span class="menu-title">All Donated Tickets</span>
              <i class="mdi mdi-ticket  menu-icon"></i>
            </a>
          </li>
        @endcan
          @can('isAdmin')
          <li class="nav-item">
            <a class="nav-link" href="/all-users">
              <span class="menu-title">All Users</span>
              <i class="mdi mdi-account-card-details  menu-icon"></i>
            </a>
          </li>
          @endcan
          @can('isUser')
          <li class="nav-item">
            <a class="nav-link" href="/tickets">
              <span class="menu-title">Get Tickets</span>
              <i class="mdi mdi-ticket  menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/redeem-tickets">
              <span class="menu-title">Redeem Ticket</span>
              <i class="mdi mdi-ticket  menu-icon"></i>
            </a>
          </li>
          @endcan
          @can('isAdmin')
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Settings</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-account-settings-variant menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/site-settings">Site Settings</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin-settings">Admin Settings</a></li>
              </ul>
            </div>
          </li>
          @endcan
          @can('isDonor')
          <li class="nav-item">
            <a class="nav-link" href="/donate">
              <span class="menu-title">Donate</span>
              <i class="mdi mdi-account-card-details  menu-icon"></i>
            </a>
          </li>
          @endcan
           @can('isPantry')
          <li class="nav-item">
            <a class="nav-link" href="/donate">
              <span class="menu-title">Donate</span>
              <i class="mdi mdi-account-card-details  menu-icon"></i>
            </a>
          </li>
          @endcan
          @can('isPantry')
          <li class="nav-item">
            <a class="nav-link" href="/p-site-settings">
              <span class="menu-title">Site Settings</span>
              <i class="mdi mdi-account-settings-variant  menu-icon"></i>
            </a>
          </li>         
         <li class="nav-item">
            <a class="nav-link" href="/pantry-profile">
              <span class="menu-title">Profile Settings</span>
              <i class="mdi mdi-account-settings-variant  menu-icon"></i>
            </a>
          </li> 
          @endcan  
          @can('isPantry')   
          <li class="nav-item sidebar-actions">
            <span class="nav-link">        
            <a href="/donate" class="btn btn-block btn-lg btn-gradient-danger fw mt-4" style="color: white !important;">+ Donate Ticket</a>             
            </span>
          </li>
          @endcan
           @can('isDonor')   
          <li class="nav-item sidebar-actions">
            <span class="nav-link">        
            <a href="/donate" class="btn btn-block btn-lg btn-gradient-danger fw mt-4" style="color: white !important;">+ Donate Ticket</a>             
            </span>
          </li>
          @endcan
        </ul>
      </nav>
      <!-- partial -->
     <div class="main-panel">        
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Settings
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pantry Site</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            
          
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Site Settings</h4>
                
                  <p class="card-description">
                     @if (session('success'))
                     <div class="alert alert-success">
                       {{ session('success') }}
                     </div>
                  @endif
                  </p>
                  <form method="POST" action="{{ route('updatesite') }}" class="forms-sample">
                   @csrf

                    <div class="form-group">
                      <label for="exampleTextarea1">About Us</label>
                      <textarea class="form-control" placeholder="Write about your organization" id="about" name="about" rows="4"></textarea>
                    </div>   
   
                    <div class="form-group">
                      <label for="exampleTextarea1">Our Services</label>
                      <textarea class="form-control" placeholder="service 1, service 2 etc" id="services" name="services" rows="4"></textarea>
                    </div>
                     <div class="form-group">
                      <label for="exampleInputCity1">Operation Hours</label>
                      <input type="text" class="form-control" id="ophours" placeholder="E.g 9 - 5 Monday - Friday" name="ophours">
                    </div> 
                    <h3> Contact Details </h3>              
             
                    <div class="form-group">
                      <label for="exampleInputCity1">Location</label>
                      <input type="text" class="form-control" id="location" placeholder="Location" name="location">
                    </div>
                     <div class="form-group form-inline">
                      <label class="mr-2" for="inlineFormInputName2">City: </label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="city" placeholder="E.g Allen Ave." name="city">
                   
                      <label class="mr-2"  for="inlineFormInputName2">State: </label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="state" placeholder="New York" name="state">
                  
                    <label class="mr-2" for="inlineFormInputGroupUsername2">Zip: </label>
                    <div class="input-group mb-2 mr-sm-2">                
                      <input type="text" class="form-control" id="zip" name="zip" placeholder="2938">
                    </div>
                    
                    </div>
                      <div class="form-group form-inline">
                      <label class="mr-4" for="exampleInputEmail3">Email address:</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" >

                      <label class="ml-4 mr-4"  for="inlineFormInputName2">Phone No: </label>
                      
                    <input type="text" class="form-control mb-2 mr-sm-2" name="phoneno" id="phoneno" placeholder="+2349383993344">
                    </div>
                
                    <div class="form-group">
                      <label>Change Header Image</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    
                    <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
                  
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
            </div>
            </div>
          </div>
        </div>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
@endsection
