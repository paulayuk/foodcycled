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
              All Pantries on Site
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Pantries</a></li>
                
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Pantries</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr> 
                          <th>
                            Name
                          </th>
                          <th>
                            Joined on
                          </th>
                          <th>
                            Donated Tickets
                          </th>                         
                          <th>
                           State
                          </th>
                          <th>
                           city
                          </th>
                           <th>
                           Delete
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          
                          <td>
                            Pantries 1
                          </td>
                          <td>
                            January 5, 2019
                          </td>
                          <td>
                            <label class="badge badge-gradient-success">No</label>
                          </td>
                          <td>
                            Los Angeles
                          </td>
                          <td>
                            CA
                          </td>
                          <td>
                           <i style="font-size: 30px;" class=" mdi mdi-delete-forever "></i>
                          </td>
                        </tr>
                         <tr>
                          
                          <td>
                            Pantries 1
                          </td>
                          <td>
                            January 5, 2019
                          </td>
                          <td>
                            <label class="badge badge-gradient-danger">No</label>
                          </td>
                          <td>
                            Los Angeles
                          </td>
                          <td>
                            CA
                          </td>
                          <td>
                           <i style="font-size: 30px;" class=" mdi mdi-delete-forever "></i>
                          </td>
                        </tr>
                          <tr>
                          
                          <td>
                            Pantries 1
                          </td>
                          <td>
                            January 5, 2019
                          </td>
                          <td>
                            <label class="badge badge-gradient-primary">Yes</label>
                          </td>
                          <td>
                            Los Angeles
                          </td>
                          <td>
                            CA
                          </td>
                          <td>
                           <i style="font-size: 30px;" class=" mdi mdi-delete-forever "></i>
                          </td>
                        </tr>
                         <tr>
                          
                          <td>
                            Pantries 1
                          </td>
                          <td>
                            January 5, 2019
                          </td>
                          <td>
                            <label class="badge badge-gradient-success">No</label>
                          </td>
                          <td>
                            Los Angeles
                          </td>
                          <td>
                            CA
                          </td>
                          <td>
                           <i style="font-size: 30px;" class=" mdi mdi-delete-forever "></i>
                          </td>
                        </tr>
                        </tr>
                      </tbody>
                    </table>
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
