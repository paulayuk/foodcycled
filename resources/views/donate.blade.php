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
                <span class="font-weight-bold mb-2">Name</span>
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
              Donate Tickets
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Donate Tickets</a></li>              
              </ol>
            </nav>
          </div>
          <div class="row">        
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  @if (session('success'))
                     <div class="alert alert-success">
                       {{ session('success') }}
                     </div>
                  @endif
                  <h4 class="card-title">Donate Tickets</h4>
                
                  <form method="POST" action="{{ route('donatetickets') }}" class="forms-sample">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Name:</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Address: </label>
                      <input type="text" class="form-control" name="address" id="address" placeholder="Address" required>
                    </div>
                    <div class="form-group form-inline">
                      <label class="mr-2" for="inlineFormInputName2">City: </label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="city" name="city" placeholder="E.g Allen Ave." required>
                   
                       <label class="mr-2"  for="inlineFormInputName2">State: </label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="state" name="state" placeholder="New York" required>
                  

                    <label class="mr-2" for="inlineFormInputGroupUsername2">Zip: </label>
                    <div class="input-group mb-2 mr-sm-2">                
                      <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="2938" required>
                    </div>
                    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">No of Tickets:</label>
                      <input type="text" class="form-control" name="ticketno" id="ticketno" placeholder="No of Tickets" required>
                    </div>
                     <div class="form-group">
                      <label for="exampleTextarea1">Comments:</label>
                      <textarea class="form-control" name="comments" id="comments" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient-danger mr-2">Submit</button>
                    <!-- <button class="btn btn-light">Cancel</button> -->
                  </form>
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
                            Ticket
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
                          <th>
                            Tracking ID
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                       {{--  @foreach($tickets as $ticket) --}}
                        <tr>                        
                          <td>
                           {{--  {{$tickets->name}} --}}
                          </td>
                          <td>
                            {{-- {{$ticket->no_of_tickets}} --}}
                          </td>
                          <td>
                            <label class="badge badge-gradient-success">Available</label>
                          </td>
                          <td>
                           {{--  {{$ticket->created_at}} --}}
                          </td>
                          <td>
                            WD-12345
                          </td>
                        </tr>
                       {{-- @endforeach --}}
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
