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
              <li class="current">Blog Detail</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Page Title -->
  
      
      <section id="courses-course-details" class="courses-course-details section">

        <div class="container aos-init aos-animate" data-aos="fade-up">
  
          <div class="row">
            <div class="col-lg-8">
              <img src="{{asset('assets/img/course-details.jpg')}}" class="img-fluid" alt="">
              <h3>Et enim incidunt fuga tempora</h3>
              <p>
                Qui et explicabo voluptatem et ab qui vero et voluptas. Sint voluptates temporibus quam autem. Atque nostrum voluptatum laudantium a doloremque enim et ut dicta. Nostrum ducimus est iure minima totam doloribus nisi ullam deserunt. Corporis aut officiis sit nihil est. Labore aut sapiente aperiam.
                Qui voluptas qui vero ipsum ea voluptatem. Omnis et est. Voluptatem officia voluptatem adipisci et iusto provident doloremque consequatur. Quia et porro est. Et qui corrupti laudantium ipsa.
                Eum quasi saepe aperiam qui delectus quaerat in. Vitae mollitia ipsa quam. Ipsa aut qui numquam eum iste est dolorum. Rem voluptas ut sit ut.
              </p>
            </div>
            <div class="col-lg-4">
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Trainer</h5>
                <p><a href="#">Walter White</a></p>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Course Fee</h5>
                <p>$165</p>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Available Seats</h5>
                <p>30</p>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Schedule</h5>
                <p>5.00 pm - 7.00 pm</p>
              </div>
  
            </div>
          </div>
  
        </div>
  
      </section>

      @endsection