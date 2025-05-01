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
              <li class="current">Kontak</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Page Title -->
  
        <!-- Contact Section -->
        <section id="contact" class="contact section">
    
            <div class="mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.601549859783!2d119.4284094737652!3d-5.1676187521840244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2905cf008e5%3A0x69eabb4408b6986!2sSMKN%2010%20Makassar!5e0!3m2!1sid!2sid!4v1746122484340!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
    
          <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
    
            <div class="row gy-4">
    
              <div class="col-lg-4">
                <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h3>Alamat</h3>
                    <p>Jl. Bonto Manai No.14, Mannuruki, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90222</p>
                  </div>
                </div><!-- End Info Item -->
    
                <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-telephone flex-shrink-0"></i>
                  <div>
                    <h3>Hubungi Kami</h3>
                    <p>0411 853 973</p>
                  </div>
                </div><!-- End Info Item -->
    
                <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h3>Email Kami  </h3>
                    <p>smkn10makassar@gmail.com</p>
                  </div>
                </div><!-- End Info Item -->
    
              </div>
    
              {{-- <div class="col-lg-8">
                <form action="forms/contact.php" method="post" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                  <div class="row gy-4">
    
                    <div class="col-md-6">
                      <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                    </div>
    
                    <div class="col-md-6 ">
                      <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                    </div>
    
                    <div class="col-md-12">
                      <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                    </div>
    
                    <div class="col-md-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                    </div>
    
                    <div class="col-md-12 text-center">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
    
                      <button type="submit">Send Message</button>
                    </div>
    
                  </div>
                </form>
              </div><!-- End Contact Form --> --}}
    
            </div>
    
          </div>
    
        </section><!-- /Contact Section -->


      @endsection