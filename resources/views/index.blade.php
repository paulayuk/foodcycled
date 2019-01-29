@extends('layouts.fepartial')

@section('content')
<section class="hero-area bg-1 text-center overly">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Header Contetnt -->
                <div class="content-block">
                    
                     <div class="act-buttons" style="margin-bottom: 20px; margin-right: 5px;">
                        <p class="pheader" style="font-size: 35px; font-weight: bold;">Find a Meal</p>
                    </div>
                
                <!-- Advance Search -->

                    <div class="form-group">
                    <div class="input-group row">
                      <div class="input-group-prepend">
                        <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Choose Category:</button>
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
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Available Food Tickets</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr> 
                          <th>
                            Items
                          </th>
                          <th>
                            Food Ticket Description
                          </th>
                          <th>
                            Donated by
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                           Location
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <img src="{{ asset('images/app.jpg') }}" class="mr-2" alt="image">
                           
                          </td>
                          <td>
                            <a href="tickets.html">Crispy Chicken Tickets</a>
                          </td>
                          <td>
                            Walmart
                          </td>
                          <td>
                            <label class="badge badge-gradient-success">Available</label>
                          </td>
                          <td>
                            California
                          </td>
                      
                        </tr>
                        <tr>
                          <td>
                            <img src="{{ asset('images/app.jpg') }}" class="mr-2" alt="image">
                            
                          </td>
                          <td>
                           <a href="tickets.html"> Crispy Chicken Tickets</a>
                          </td>
                          <td>
                            Subway
                          </td>
                          <td>
                            <label class="badge badge-gradient-primary">Available</label>
                          </td>
                          <td>
                            New York
                          </td>
                      
                        </tr>
                       <tr>
                          <td>
                            <img src="{{ asset('images/app.jpg') }}" class="mr-2" alt="image">
                            
                          </td>
                          <td>
                            <a href="tickets.html">Crispy Chicken Tickets</a>
                          </td>
                          <td>
                            Chickfila
                          </td>
                          <td>
                            <label class="badge badge-gradient-info">Available</label>
                          </td>
                          <td>
                            Boston
                          </td>
                      
                        </tr>
                      <tr>
                          <td>
                            <img src="{{ asset('images/app.jpg') }}" class="mr-2" alt="image">
                           
                          </td>
                          <td>
                           <a href="tickets.html"> Crispy Chicken Tickets</a>
                          </td>
                          <td>
                            Walmart
                          </td>
                          <td>
                            <label class="badge badge-gradient-danger">Unvailable</label>
                          </td>
                          <td>
                            Georgia
                          </td>
                      
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </div>
</section>


<!--==========================================
=            All Category Section            =
===========================================-->
<div class="mini-spacer bg-info text-white c2a7">
                    <div class="container">
                        <div class="d-flex">
                            <div class="display-7 align-self-center">Donate for the greater good by giving out free food tickets</div>
                            <div class="ml-auto m-t-10 m-b-10"><a href="donation.html" class="btn btn-outline-light btn-md">Donate Tickets</a></div>
                        </div>
                    </div>
                </div>



<div class="testimonial3 spacer bg-light">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <h2 class="title">Testimonials</h2>
                                <h4 class="subtitle">Here's what people have to say about us</h4>
                            </div>
                        </div>
                        <!-- Row  -->
                        <div class="row testi3 m-t-40">
                            <!-- item -->
                            <div class="col-lg-4 col-md-4" data-aos="fade-right">
                                <div class="card card-shadow">
                                    <div class="card-body">
                                        <h6 class="font-light m-b-30">“Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras venene veliel vestibulum.”</h6>
                                        <div class="d-flex no-block align-items-center">
                                            <span class="thumb-img"><img src="{{ asset('images/1.jpg') }}" alt="wrapkit" class="circle"/></span>
                                            <div class="m-l-20">
                                                <h6 class="m-b-0 customer">Michelle Anderson</h6>
                                                <div class="font-10">
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-muted"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <!-- item -->
                            <div class="col-lg-4 col-md-4" data-aos="fade-up">
                                <div class="card card-shadow">
                                    <div class="card-body">
                                        <h6 class="font-light m-b-30">“Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras venene veliel vestibulum.”</h6>
                                        <div class="d-flex no-block align-items-center">
                                            <span class="thumb-img"><img src="{{ asset('images/2.jpg') }}" alt="wrapkit" class="circle"/></span>
                                            <div class="m-l-20">
                                                <h6 class="m-b-0 customer">Mark mesty</h6>
                                                <div class="font-10">
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-muted"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <!-- item -->
                            <div class="col-lg-4 col-md-4" data-aos="fade-left">
                                <div class="card card-shadow">
                                    <div class="card-body">
                                        <h6 class="font-light m-b-30">“Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras venene veliel vestibulum.”</h6>
                                        <div class="d-flex no-block align-items-center">
                                            <span class="thumb-img"><img src="{{ asset('images/3.jpg') }}" alt="wrapkit" class="circle"/></span>
                                            <div class="m-l-20">
                                                <h6 class="m-b-0 customer">Limpsy adam</h6>
                                                <div class="font-10">
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-muted"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            
                        </div>
                    </div>
                </div>

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
         <div class="section-title">
          <h2>Our Donors & Sponsors</h2>
          
        </div>
        <div class="owl-carousel clients-carousel">
          <img src="{{ asset('images/clients/client-1.png') }}" alt="">
          <img src="{{ asset('images/clients/client-2.png') }}" alt="">
          <img src="{{ asset('images/clients/client-3.png') }}" alt="">
          <img src="{{ asset('images/clients/client-4.png') }}" alt="">
          <img src="{{ asset('images/clients/client-5.png') }}" alt="">
          <img src="{{ asset('images/clients/client-6.png') }}" alt="">
          <img src="{{ asset('images/clients/client-7.png') }}" alt="">
          <img src="{{ asset('images/clients/client-8.png') }}" alt="">
        </div>

      </div>
    </section><!-- #clients -->

@endsection
