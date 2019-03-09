@extends('layouts.fepartial')

@section('content')
 <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-md-flex">
          <div class="col-md-6 ftco-animate img about-image" style="background-image: url('http://127.0.0.1:8000/images/about.jpg');">
          </div>
          <div class="col-md-6 ftco-animate p-md-5">
            <div class="row">
              <div class="col-md-12 nav-link-wrap mb-5">
                <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">What we do</a>

                  <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Our mission</a>

                  <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Our goal</a>
                </div>
              </div>
              <div class="col-md-12 d-flex align-items-center">
                
                <div class="tab-content ftco-animate" id="v-pills-tabContent">

                  <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                    <div>
                      <h2 class="mb-4"></h2>
                      <p>At Foodcyled we connect the giver with the receiver, making sure food distribution is made easier, while we feed the hungry.</p>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                    <div>
                      <h2 class="mb-4"></h2>
                      <p>Food cycled has a core mission of providing for all.</p>
                
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                    <div>
                      <h2 class="mb-4"></h2>
                      <p>Our is goal is to make sure that food availability and accessibility is made easy.</p>
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
