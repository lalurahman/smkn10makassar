@extends('layouts.guest')
@section('content')

{{-- <body class="trainers-page"> --}}


    <main class="main">
        
      <!-- Page Title -->
      <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
          <div class="container">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li class="current">Pengumuman</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Page Title -->
  
      <section id="events" class="events section">

        <div class="container aos-init aos-animate" data-aos="fade-up">
  
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/events-item-1.jpg" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Introduction to webdesign</a></h5>
                  <p class="fst-italic text-center">Sunday, September 26th at 7:00 pm</p>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/events-item-2.jpg" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Marketing Strategies</a></h5>
                  <p class="fst-italic text-center">Sunday, November 15th at 7:00 pm</p>
                  <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                </div>
              </div>
  
            </div>
          </div>
  
        </div>
  
      </section>

      @endsection