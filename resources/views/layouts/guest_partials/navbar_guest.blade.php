<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('assets/img/logo.png') }}" class="w-100">
        {{-- <h1 class="sitename">SMKN 10 Makassar</h1> --}}
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{route('home')}}" class="active">Home<br></a></li>
          <li class="dropdown"><a href="#"><span>Profil Sekolah</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Visi dan Misi</a></li>
              <li><a href="#">Struktur Organisasi</a></li>
              <li><a href="#">Program Keahlian</a></li>
              <li><a href="#">About</a></li>
            </ul>
          </li>
          <li><a href="{{route('guru')}}">Data Guru</a></li>
          <li><a href="{{route('blog')}}">Blog</a></li>
          <li><a href="{{route('pengumuman')}}">Pengumuman</a></li>
          <li><a href="{{route('galeri')}}">Galeri</a></li>          
          <li><a href="{{route('kontak')}}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      {{-- <a class="btn-getstarted" href="courses.html">Login</a> --}}

    </div>
  </header>