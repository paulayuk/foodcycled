@extends('layouts.fepartial')

@section('content')
<section class="hero-area bg-1 text-center overly">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- Header Contetnt -->
        <div class="content-block">
        
        
        <!-- Advance Search -->
         <div class="form-group">
                    <div class="input-group row">
                      <div class="input-group-prepend">
                        <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Search by:</button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Food Tickets</a>
                          <a class="dropdown-item" href="#">Food Pantries</a>
                        </div>
                      </div>
                  <input type="text" class="form-control form-control-sm" placeholder="State">
                  <input type="text" class="form-control form-control-sm" placeholder="City">
                      <input type="text" class="form-control" placeholder="Zip Code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-sm btn-gradient-primary" type="button">Search</button>
                    </div>
                  </div>
                 
                </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title">
          <h2>Available Food Tickets</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- offer 01 -->
      <div class="col-sm-12 col-lg-4">
        <!-- product card -->
<div class="product-item bg-light">
  <div class="card">
    <div class="thumb-content">
      <!-- <div class="price">$200</div> -->
      <a href="">
        <img class="card-img-top img-fluid" src="{{ asset('images/products/products-1.jpg') }}" alt="Card image cap">
      </a>
    </div>
    <div class="card-body">
        <h4 class="card-title"><a href="">Stew And Fish Ticket</a></h4>
        <ul class="list-inline product-meta">
          <li class="list-inline-item">
            <h6 style="padding-right: 15px;"><i class="fas fa-user-alt"></i><i style="font-size: 10px">Donated by: </i>Desam Jones</h6 style="padding-right: 5px;">
          </li>
          
        </ul>
        <div class="act-buttons" style="margin-bottom: 20px; margin-right: 5px;">
                <a href="ticket.html" class="btn btn-info-gradiant font-14">
                Reedem Ticket &rarr;</a>
            </div>
    </div>
  </div>
</div>



      </div>
      <div class="col-sm-12 col-lg-4">
        <!-- product card -->
<div class="product-item bg-light">
  <div class="card">
    <div class="thumb-content">
      <!-- <div class="price">$200</div> -->
      <a href="">
        <img class="card-img-top img-fluid" src="{{ asset('images/products/products-1.jpg') }}" alt="Card image cap">
      </a>
    </div>
    <div class="card-body">
        <h4 class="card-title"><a href="">Stew And Fish Ticket</a></h4>
        <ul class="list-inline product-meta">
          <li class="list-inline-item">
            <h6 style="padding-right: 15px;"><i class="fas fa-user-alt"></i><i style="font-size: 10px">Donated by: </i>Desam Jones</h6 style="padding-right: 5px;">
          </li>
         
        </ul>
        <div class="act-buttons" style="margin-bottom: 20px; margin-right: 5px;">
                <a href="ticket.html" class="btn btn-info-gradiant font-14">
                Reedem Ticket &rarr;</a>
            </div>
    </div>
  </div>
</div>



      </div>
      <div class="col-sm-12 col-lg-4">
        <!-- product card -->
<div class="product-item bg-light">
  <div class="card">
    <div class="thumb-content">
      <!-- <div class="price">$200</div> -->
      <a href="">
        <img class="card-img-top img-fluid" src="{{ asset('images/products/products-1.jpg') }}" alt="Card image cap">
      </a>
    </div>
    <div class="card-body">
        <h4 class="card-title"><a href="">Stew And Fish Ticket</a></h4>
        <ul class="list-inline product-meta">
          <li class="list-inline-item">
            <h6 style="padding-right: 15px;"><i class="fas fa-user-alt"></i><i style="font-size: 10px">Donated by: </i>Desam Jones</h6 style="padding-right: 5px;">
          </li>
          
        </ul>
        <div class="act-buttons" style="margin-bottom: 20px; margin-right: 5px;">
                <a href="ticket.html" class="btn btn-info-gradiant font-14">
                Reedem Ticket &rarr;</a>
            </div>
    </div>
  </div>
</div>
    </div>    
    </div>
  </div>
   
</section>


<section class="popular-deals section bg-gray">
  
   
<nav aria-label="Page navigation example" style=" margin-left: 570px;">
          <ul class="pagination">
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
</section>



<!--==========================================
=            All Category Section            =
===========================================-->
  <div class="mini-spacer bg-info text-white c2a7">
      <div class="container">
          <div class="d-flex">
              <div class="display-7 align-self-center">Donate for the greater good by giving out free food tickets</div>
              <div class="ml-auto m-t-10 m-b-10"><button class="btn btn-outline-light btn-md">Donate Tickets</button></div>
          </div>
      </div>
  </div>
@endsection
