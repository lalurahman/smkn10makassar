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
              <li class="current">Profil Sekolah</li>
              <li class="current">Visi Misi</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Page Title -->
  
      <section id="about-us" class="section about-us">


        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-6 order-1 order-lg-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-6 order-2 order-lg-1 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
              <h3>Visi</h3>
              <p class="fst-italic">
                Menyiapkan Sumber Daya Manusia yang terampil Berkarakter dan Berdayasaing Berlandaskan IMTAQ Dan IPTEK
              </p>

              <h3>Misi</h3>
              <p class="fst-italic">
                Berikut misi kami:
              </p>
              <ul>
                <li> <span>Mengembangkan Iklim belajar yang berkarakter pada norma dan budaya bangsa</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Melaksanakan Pendidikan dan latihan yang berwawasan mutuh dan keunggulan, terampil, dan bereorientasi masa depan.</span></li>                
                <li><i class="bi bi-check-circle"></i> <span>Mencetak Tamatan yang berkarakter, kolaborasi, adaptif, komunikatif, berwirausaha dan mandiri.</span></li>                
              </ul>
            </div>
  
          </div>
  
        </div>
  
      </section>

      @endsection