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
              <li class="current">Struktur Organisasi</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Page Title -->
  
      <section id="about-us" class="section about-us">


        <div class="container">
  
            <div class="order-2 order-lg-1 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                {{-- <h3>Visi</h3> --}}

                 <!-- Card Wrapper -->
                <div class="card shadow-sm">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Struktur Organisasi</h5>
                    <!-- Search box -->
                    <form class="d-flex" role="search">
                        <input class="form-control form-control-sm me-2" type="search" placeholder="Cari…" aria-label="Cari">
                        <button class="btn btn-sm btn-outline-primary" type="submit">Go</button>
                    </form>
                    </div>
            
                    <!-- Table -->
                    <div class="table-responsive">
                    <table class="table table-borderless table-striped align-middle mb-0">
                        <thead class="table-light">
                        <tr>
                            <th scope="col">Foto</th>
                            <th scope="col">Nip</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">foto terbaru</th>
                            <td>197010051999031012</td>
                            <td>ANDI UMAR PATTA, S.Pd., M.Si</td>
                            <td>KEPALA SEKOLAH</td>
                            
                        </tr>
                        <tr>
                            <th scope="row">Foto terbaru</th>
                            <td>196802191993031010	</td>
                            <td>TAKBIR, S.Pd., M.M</td>
                            <td>WAKASEK KURIKULUM</td>
                            
                        </tr>

                        <tr>
                            <th scope="row">Foto terbaru</th>
                            <td>4324535235	</td>
                            <td>Fulan</td>
                            <td>Dumy</td>
                        </tr>

                        <tr>
                            <th scope="row">Foto terbaru</th>
                            <td>4324535235	</td>
                            <td>Fulan</td>
                            <td>Dumy</td>
                        </tr>
                        <!-- … baris lainnya … -->
                        </tbody>
                    </table>
                    </div>
                </div>
              
            </div>
  
        </div>
  
      </section>

      @endsection