<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SMKN 10 Makassar | Home</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon" >
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">


@include('layouts.guest_partials.styles_guest')


</head>

<body class="index-page">

  @include('layouts.guest_partials.navbar_guest')

  <main class="main"> 
    @yield('content')
  </main>

 @include('layouts.guest_partials.footer_guest')
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>©{{ date('Y') }} <span>Copyright</span> <strong class="px-1 sitename">SMKN 10 Makassar</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Develop by <a href="http://wa.me/6282349338541" target="_blank">Ikram Anas</a> Distributed by <a href="https://ahadunstudio.id" target="_blank">Ahadun Studio
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Preloader -->
  <div id="preloader"></div>

  @include('layouts.guest_partials.script_guest')

</body>

</html>