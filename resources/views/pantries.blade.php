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
          <div class="advance-search">
            <form action="#">
              <div class="row zz">
                <!-- Store Search -->
                <div class="col-lg-9 col-md-12">
                  <h2 style="color: #fff;">Food Pantries by Location</h2>
                </div>
                
              </div>
            </form>
            
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
          <h2>Food Pantries by States, cities or Zipcodes</h2>
          
        </div>
      </div>
    </div>
    <div class="row">
    @foreach($pantries as $pantry)
      <div class="col-sm-12 col-lg-4">
        <!-- product card -->
        <div class="product-item bg-light">
          <div class="card">
            <div class="thumb-content">
              <!-- <div class="price">$200</div> -->
              <a href="">
                <img class="card-img-top img-fluid" src="{{ asset('images/work3.jpg') }}" alt="Card image cap">
              </a>
            </div>
            <div class="card-body">
              <h4 class="card-title"><a href="">{{$pantry->organization_name}}</a></h4>
              <ul class="list-inline product-meta">
                <li class="list-inline-item">
                  {{-- <h6 style="padding-right: 15px;"><i class="fas fa-user-alt"></i><i style="font-size: 10px">In : </i>1200 </h6 style="padding-right: 5px;"><br/> --}}
                </li>
                <li class="list-inline-item">
                  <a href=""><i style="font-size: 10px">Joined On: </i><i class="fa fa-calendar"></i>{{$pantry->created_at}}</a>
                </li>
              </ul>
            <div class="act-buttons" style="margin-bottom: 20px; margin-right: 5px;">
                <a href="pantry.html" class="btn btn-info-gradiant font-14">
                Visit Page &rarr;</a>
            </div>
          </div>
        </div>
      </div>
    </div>
   @endforeach
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
