@extends('layouts.fepartial')

@section('content')
 <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-md-flex">
          <div class="col-md-6 ftco-animate img about-image" style="background-image: url({{asset('images/about.jpg')}});">
          </div>
          <div class="col-md-6 ftco-animate p-md-5">
            <div class="row">
             
              <div class="col-md-12 d-flex align-items-center">
                
                <div class="tab-content ftco-animate" id="v-pills-tabContent">

                  <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                    <div>
                      <h2 class="mb-4">{{$ticket->name}} Ticket</h2>
                      <i>Ticket Code:</i><p>{{$ticket->tracking_id}}</p>
                   
                      <i>Status:</i> <p>Available</p>
                      <i>Donated by:</i><p>{{$ticket->donated_by}}</p>
                   
                      <i>Meal Location:</i><p>{{$ticket->address}}</p>
                      
                    </div>
                  </div>

                 
               <div class="col-md-12 nav-link-wrap mb-5">
                <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" style="background-color: #ff6a5b;margin-right: 10px; border-radius: 30px; padding: 15px;" href="/redeem-tickets"  aria-controls="v-pills-whatwedo" aria-selected="true">Use Ticket</a>

                  <a class="nav-link active" style="background-color: #ff6a5b;margin-right: 10px; border-radius: 30px; padding: 15px;" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Print Ticket</a>                
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
