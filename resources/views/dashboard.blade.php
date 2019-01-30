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
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>                 
              </span>
              Dashboard
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview
                  <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="{{ asset('images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image"/>
                  <h4 class="font-weight-normal mb-3">Tickets Value
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">100 tickets</h2>
                  <h6 class="card-text">Increased by 60%</h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src="{{ asset('images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image"/>                  
                  <h4 class="font-weight-normal mb-3">Weekly Ticket Usage
                    <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">10</h2>
                  <h6 class="card-text">Decreased by 10%</h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="{{ asset('images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image"/>                                    
                  <h4 class="font-weight-normal mb-3">Unique Ticket Users
                    <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">10</h2>
                  <h6 class="card-text">Increased by 5%</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recent Tickets</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr> 
                          <th>
                            Ticket ID
                          </th>
                          <th>
                            Quantity
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Donated on
                          </th>
                          @can('isAdmin')
                          <th>
                            Donated by
                          </th>
                          
                           <th>
                           Delete
                          </th>
                          @endcan
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($tickets as $ticket) 
                        <tr>                        
                          <td>
                            {{$ticket->tracking_id}}
                          </td>
                          <td>
                            {{$ticket->no_of_tickets}} 
                          </td>
                          <td>
                            <label class="badge badge-gradient-success">Available</label>
                          </td>
                          <td>
                            {{$ticket->created_at}}
                          </td>
                           @can('isAdmin')
                          <td>
                            {{$ticket->name}}
                          </td>
                         
                           <td>
                           <i style="font-size: 30px;" class=" mdi mdi-delete-forever "></i>
                          </td>   
                          @endcan                   
                        </tr>
                        @endforeach 
                      </tbody>
                    </table>
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
