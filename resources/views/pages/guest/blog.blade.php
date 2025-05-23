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
              <li class="current">Blog</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Page Title -->
  
      
      <section id="courses" class="courses section">

        <div class="container">
  
          <div class="row">
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
              <div class="course-item">
                <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="category">Web Development</p>
                    <p class="price">$169</p>
                  </div>
  
                  <h3><a href="{{route('blog.detail')}}">Website Design</a></h3>
                  <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="assets/img/trainers/trainer-1-2.jpg" class="img-fluid" alt="">
                      <a href="" class="trainer-link">Antonio</a>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bi bi-person user-icon"></i>&nbsp;50
                      &nbsp;&nbsp;
                      <i class="bi bi-heart heart-icon"></i>&nbsp;65
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- End Course Item-->
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
              <div class="course-item">
                <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="category">Marketing</p>
                    <p class="price">$250</p>
                  </div>
  
                  <h3><a href="{{route('blog.detail')}}">Search Engine Optimization</a></h3>
                  <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="assets/img/trainers/trainer-2-2.jpg" class="img-fluid" alt="">
                      <a href="" class="trainer-link">Lana</a>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bi bi-person user-icon"></i>&nbsp;35
                      &nbsp;&nbsp;
                      <i class="bi bi-heart heart-icon"></i>&nbsp;42
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- End Course Item-->
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
              <div class="course-item">
                <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="category">Content</p>
                    <p class="price">$180</p>
                  </div>
  
                  <h3><a href="{{route('blog.detail')}}">Copywriting</a></h3>
                  <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="assets/img/trainers/trainer-3-2.jpg" class="img-fluid" alt="">
                      <a href="" class="trainer-link">Brandon</a>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bi bi-person user-icon"></i>&nbsp;20
                      &nbsp;&nbsp;
                      <i class="bi bi-heart heart-icon"></i>&nbsp;85
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- End Course Item-->
  
          </div>
  
        </div>
  
      </section>

      @endsection