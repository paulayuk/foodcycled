@extends('layouts.fepartial')

@section('content')
 <section class="page-title">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 text-center">
        <!-- Title text -->
        <h3>Upcoming Programs</h3>
      </div>
    </div>
  </div>
  <!-- Container End -->
</section>
<!--==================================
=            Blog Section            =
===================================-->

<section class="blog section">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
        <!-- Article 01 -->
        <article>
  <!-- Post Image -->
  <div class="image">
    <img src="{{ asset('images/blog/post-1.jpg') }}" alt="article-01">
  </div>
  <!-- Post Title -->
  <h3>Upcoming Programs</h3>
  <ul class="list-inline">
    <li class="list-inline-item">ON: </li>
    <li class="list-inline-item">Nov 22,2019</li>
  </ul>
  <!-- Post Description -->
  <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores iusto tempore voluptatum blanditiis impedit alias magni ullam facilis perspiciatis magnam!</p>
  <!-- Read more button -->
  <a href="" class="btn btn-transparent">Coming Soon</a>
</article>
        <!-- Article 02 -->
        <article>
          <div class="post-slider owl-carousel owl-theme">
            <div class="item"><img src="{{ asset('images/blog/post-2.jpg') }}" alt="Slider-Img-01"></div>
           
          </div>
          <h3>Upcoming programs</h3>
          <ul class="list-inline">
            <li class="list-inline-item">ON: </li>
            <li class="list-inline-item">Nov 22,2019</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores iusto tempore voluptatum blanditiis impedit alias magni ullam facilis perspiciatis magnam!</p>
          <a href="" class="btn btn-transparent">Coming Soon</a>
        </article>

    
      </div>
      <div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
       
      </div>
    </div>
  </div>
</section>



    

@endsection
