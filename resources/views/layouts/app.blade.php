<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
  <title>Noor Al-Awab</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ url('/css/all.min.css') }}" />
  <link rel="stylesheet" href="{{ url('/css/all.min.css') }}" />
  <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ url('/css/app.css') }}" />
  <link rel="stylesheet" href="{{ url('/bootstrap/css/bootstrap.min.css') }}" />

  <!-- Scripts -->
  <script src="{{URL('/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/js/jquery-1.9.1.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.singlePageNav.min.js') }}"></script>
  <script src="{{ asset('/js/app.js') }}"></script>

</head>


<body>
  <!-- Header -->
  <div class="container" id="home">
    <div class="col-12 text-center">
      <div class="tm-page-header">

        <img src="https://i.ibb.co/NskZq7C/IMG-3966.jpg" alt="" class="logoimg">

        <h1 class="d-inline-block text-uppercase">Noor Al-Awab</h1>
      </div>
    </div>
  </div>

  <!-- Navbar -->

  <div class="tm-nav-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-md navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tmMainNav" aria-controls="tmMainNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="tmMainNav">
              <ul class="navbar-nav mx-auto tm-navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link external" href="/">الصفحة الرئيسية
                    <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link external" href="/blog">المنتجات</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#company">الشركة</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#activities">اخر المنتجات</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#contact"> تواصل معنا</a>
                </li>

              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <div>
    @yield('content')
  </div>

  <div>
    @include('layouts.footer')
  </div>



</body>

</html>