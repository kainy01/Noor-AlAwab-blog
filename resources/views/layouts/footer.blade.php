<!DOCTYPE html>
<html lang="en">

<head>
  <title>Noor Al-Awab</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ url('/css/all.min.css') }}" />
  <link rel="stylesheet" href="{{ url('/css/login.css') }}" />
  <link rel="stylesheet" href="{{ url('/css/fonts.css') }}" />
  <link rel="stylesheet" href="{{ url('/css/app.css') }}" />
  <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css.css') }}" />
  <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}" />

  <!-- Scripts -->
  <script src="{{ asset('/js/jquery-1.9.1.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.singlePageNav.min.js') }}"></script>
  <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/js/app.js') }}"></script>

</head>


<body>
  <footer class="container tm-footer">
    <div class="row tm-footer-row">
      <p class="col-md-10 col-sm-12 mb-0">
        Copyright &copy; 2018 Company Name - Design:

        @guest
        <!-- <a class="tm-footer-link" href="{{ route('login') }}">{{ __('Admin?') }}</a> -->
        @if (Route::has('register'))
        <!-- <a    href="{{ route('register') }}">{{ __('Register') }}</a> -->
        @endif
        @else
        <!-- <span>{{ Auth::user()->name }}</span> -->

        <a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        {{ csrf_field() }}
      </form>

      @endguest
      </p>

    </div>
    <div class="col-md-2 col-sm-12 scrolltop">
      <div class="scroll icon"><i class="fa fa-4x fa-angle-up"></i>
      </div>
    </div>
  </footer>
</body>

</html>