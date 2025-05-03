<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('assets/img/logo.png') }}" class="w-100">
        {{-- <h1 class="sitename">SMKN 10 Makassar</h1> --}}
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{route('home')}}" class="@if (request()->is('/')) active @endif">Home<br></a></li>
          <li class="dropdown"><a href="#"><span>Profil Sekolah</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{route('visi_misi')}}">Visi dan Misi</a></li>
              <li><a href="{{route('struktur_organisasi')}}">Struktur Organisasi</a></li>
              <li><a href="{{route('program_keahlian')}}">Program Keahlian</a></li>
              <li><a href="{{route('about')}}">About</a></li>
            </ul>
          </li>
          <li><a href="{{route('guru')}}" class="@if (request()->is('guru')) active @endif">Data Guru</a></li>
          <li><a href="{{route('blog')}}" class="@if (request()->is('blog')) active @endif">Blog</a></li>
          <li><a href="{{route('pengumuman' )}}"class="@if (request()->is('pengumuman')) active @endif")>Pengumuman</a></li>
          <li><a href="{{route('galeri')}}"class="@if (request()->is('galeri')) active @endif")>Galeri</a></li>          
          <li><a href="{{route('kontak')}}"class="@if (request()->is('kontak')) active @endif")>Contact</a></li>

          <li class="dropdown"><a href="#"><span></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{route('login')}}">Log In</a></li>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      {{-- <a class="btn-getstarted" href="courses.html">Login</a> --}}

    </div>
  </header>