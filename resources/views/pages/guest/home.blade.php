
    @extends('layouts.guest')
    @section('content')
    
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="{{ asset('assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">
  
        <div class="container">
          <h2 data-aos="fade-up" data-aos-delay="100">Selamat datang<br>di portal resmi SMKN 10 Makassar </h2>
          <p data-aos="fade-up" data-aos-delay="200">SMK PK yang beralamat di jl. Bontomanai No.4, Gunung Sari Baru <br> Kecamatan Rapocini, Kota Makassar</p>
          <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
            <a href="courses.html" class="btn-get-started">Get Started</a>
          </div>
        </div>
  
      </section><!-- /Hero Section -->
  
      <!-- About Section -->
      <section id="about" class="about section">
  
        <div class="container ">
  
          <div class="row gy-4">
  
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
              <h3>Selamat Datang Di Portal Resmi UPT SMK Negeri 10 Makassar</h3>
              <h3 class="fst-italic">"</h3>
              <p class="fst-italic">
                  Kami Menyambut baik terbitnya Website UPT SMK Negeri 10 Makassar, dengan dipublikasinya website ini sekolah berharap, Peningkatan layanan pendidikan kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat..
              </p>
              <h2>"</h2>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Andi Umar Patta S.pd., M,Si</span></li>
                {{-- <li><i class="bi bi-check-circle"></i> <span>orangtua.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>masyarakat pada umumnya.</span></li> --}}
              </ul>
  
              {{-- <a href="#" class="read-more"><span>Andi Umar Patta S.pd., M,Si</span><i class="bi bi-arrow-right"></i></a> --}}
            </div>
  
          </div>
  
        </div>
  
      </section><!-- /About Section -->
  
      <!-- Counts Section -->
      <section id="counts" class="section counts light-background">
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row gy-4">
  
            <div class="col-lg-4 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Siswa</p>
              </div>
            </div><!-- End Stats Item -->
  
            <div class="col-lg-4 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
                <p>Guru</p>
              </div>
            </div><!-- End Stats Item -->
  
            <div class="col-lg-4 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
                <p>Program Keahlian</p>
              </div>
            </div><!-- End Stats Item -->
  
            {{-- <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
                <p>...</p>
              </div>
            </div><!-- End Stats Item --> --}}
  
          </div>
  
        </div>
  
      </section><!-- /Counts Section  -->
  
      <!-- Why Us Section -->
      {{-- jurusan Besar --}}
      <section id="why-us" class="section why-us d-none" >
  
        <div class="container">
          <h2 class="mb-3">Program Keahlian</h2>
          <div class="row gy-4">
  
              {{-- JURUSAN CARD BESAR --}}
            <div class="col-lg-12 d-flex align-items-center">
              <div class="row gy-4 justify-content-center" data-aos="fade-up" data-aos-delay="200">
  
                  <div class="col-12 col-xs-6 col-lg-3">
                      <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-clipboard-data"></i>
                        <h4>Corporis voluptates officia eiusmod</h4>
                        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                      </div>
                    </div><!-- End Icon Box -->
                <div class="col-12 col-xs-6 col-lg-3">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Corporis voluptates officia eiusmod</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div><!-- End Icon Box -->
  
                <div class="col-12 col-xs-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div><!-- End Icon Box -->
  
                <div class="col-12 col-xs-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Labore consequatur incidid dolore</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div><!-- End Icon Box -->
  
                <div class="col-12 col-xs-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Labore consequatur incidid dolore</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div><!-- End Icon Box -->
  
                <div class="col-12 col-xs-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Labore consequatur incidid dolore</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div><!-- End Icon Box -->
  
                <div class="col-12 col-xs-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Labore consequatur incidid dolore</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div><!-- End Icon Box -->
  
                <div class="col-12 col-xs-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Labore consequatur incidid dolore</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div><!-- End Icon Box -->
  
                <div class="col-12 col-xs-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Labore consequatur incidid dolore</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div><!-- End Icon Box -->
  
                <div class="col-12 col-xs-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Labore consequatur incidid dolore</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div><!-- End Icon Box -->
  
              </div>
            </div>
  
          </div>
  
        </div>
  
      </section><!-- /Why Us jurusan besar Section -->
  
      <!-- JURUSAN KECIL -->
      <section id="features" class="features section">
          <!-- Section Title -->
          
          <div class="container">
              
              <div class="container section-title mb-0 pt-5 pb-2" data-aos="fade-up">
                <h2>Jurusan</h2>
                <p>Program Keahlian</p>
              </div><!-- End Section Title -->
  
          <div class="row gy-4 justify-content-center">
  
            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="features-item">
                <i class="bi bi-eye" style="color: #ffbb2c;"></i>
                <h3><a href="" class="stretched-link">Teknik Instalasi Tenaga Listrik</a></h3>
              </div>
            </div><!-- End Feature Item -->
  
            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="features-item">
                <i class="bi bi-infinity" style="color: #5578ff;"></i>
                <h3><a href="" class="stretched-link">Teknik Permesinan</a></h3>
              </div>
            </div><!-- End Feature Item -->
  
            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="features-item">
                <i class="bi bi-mortarboard" style="color: #e80368;"></i>
                <h3><a href="" class="stretched-link">Teknik Pengelasan</a></h3>
              </div>
            </div><!-- End Feature Item -->
  
            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
              <div class="features-item">
                <i class="bi bi-nut" style="color: #e361ff;"></i>
                <h3><a href="" class="stretched-link">Teknik Kendaraan Ringan Otomotif</a></h3>
              </div>
            </div><!-- End Feature Item -->
  
            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
              <div class="features-item">
                <i class="bi bi-shuffle" style="color: #47aeff;"></i>
                <h3><a href="" class="stretched-link">Teknik Bisnis Sepeda Motor</a></h3>
              </div>
            </div><!-- End Feature Item -->
  
            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
              <div class="features-item">
                <i class="bi bi-star" style="color: #ffa76e;"></i>
                <h3><a href="" class="stretched-link">Teknik Audio Visual</a></h3>
              </div>
            </div><!-- End Feature Item -->
  
            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
              <div class="features-item">
                <i class="bi bi-x-diamond" style="color: #11dbcf;"></i>
                <h3><a href="" class="stretched-link">Teknik Elektronika Industri</a></h3>
              </div>
            </div><!-- End Feature Item -->
  
            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
              <div class="features-item">
                <i class="bi bi-camera-video" style="color: #4233ff;"></i>
                <h3><a href="" class="stretched-link">Bisnis Konstruksi dan Properti</a></h3>
              </div>
            </div><!-- End Feature Item -->
  
            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
              <div class="features-item">
                <i class="bi bi-command" style="color: #b2904f;"></i>
                <h3><a href="" class="stretched-link">Desain Permodelan dan Informasi</a></h3>
              </div>
            </div><!-- End Feature Item -->
  
            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
              <div class="features-item">
                <i class="bi bi-dribbble" style="color: #b20969;"></i>
                <h3><a href="" class="stretched-link">Teknik Komputer dan Komputer</a></h3>
              </div>
            </div><!-- End Feature Item -->
  
            {{-- <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
              <div class="features-item">
                <i class="bi bi-activity" style="color: #ff5828;"></i>
                <h3><a href="" class="stretched-link">Verdo Park</a></h3>
              </div>
            </div><!-- End Feature Item -->
  
            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
              <div class="features-item">
                <i class="bi bi-brightness-high" style="color: #29cc61;"></i>
                <h3><a href="" class="stretched-link">Flavor Nivelanda</a></h3>
              </div>
            </div><!-- End Feature Item --> --}}
  
          </div>
  
        </div>
  
      </section><!-- /Features Section -->
  
      <!-- Courses Section -->
      <section id="courses" class="courses section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Blog</h2>
          <p>Berita Terbaru</p>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="row">
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="course-item">
                <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="category">Ekstra Kurikuler</p>
                    <p class="price">28-12-2025</p>
                  </div>
  
                  <h3><a href="course-details.html">Kegiatan Pramuka dilakukan secara online</a></h3>
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
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="course-item">
                <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="category">Akademik</p>
                    <p class="price">12-04-2025</p>
                  </div>
  
                  <h3><a href="course-details.html">Pelatihan Siber Security</a></h3>
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
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="course-item">
                <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="category">Prestasi</p>
                    <p class="price">01-04-2025</p>
                  </div>
  
                  <h3><a href="course-details.html">Siswa SMKN 10 Makassar Peringkat 1 Sayembara Logo Nasional</a></h3>
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
  
      </section><!-- /Courses Section -->
  
      <!-- Trainers Index Section -->
      <section id="trainers-index" class="section trainers-index">
          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
              <h2>Guru</h2>
              <p>Guru Terbaik Kami</p>
          </div><!-- End Section Title -->
  
        <div class="container">
  
  
          <div class="row">
  
            <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Imam Nur Ihsan</h4>
                  <span>Guru Informatika</span>
                  <p>
                    Kata-kata hari ini - Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                  </p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div><!-- End Team Member -->
  
            <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
              <div class="member">
                <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Irda Baenaha</h4>
                  <span>Guru TKJ</span>
                  <p>
                      Kata-kata hari ini - Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                  </p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div><!-- End Team Member -->
  
            <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
              <div class="member">
                <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Ince St. Aisyah Triutami</h4>
                  <span>Guru TKJ</span>
                  <p>
                      Kata-kata hari ini - Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                  </p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div><!-- End Team Member -->
  
          </div>
          
          <div class="container">
              <div class="d-flex mt-4 justify-content-center" data-aos="fade-up" data-aos-delay="300">
                <a href="courses.html" class="btn btn-success">Semua Guru Kami</a>
              </div>
          </div>
  
        </div>
  
      </section><!-- /Trainers Index Section -->
      
  @endsection