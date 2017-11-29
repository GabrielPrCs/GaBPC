<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>GaBPC | WebDesign</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.3/css/mdb.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Atomic+Age" rel="stylesheet">
  <script src="https://use.fontawesome.com/69bb74e1fb.js"></script>

  <style media="screen">
  body {
    background-image: url('{{ asset("img/bg.jpg") }}');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    font-family: 'Ubuntu', sans-serif;
  }
  #app {
    background: rgba(0,0,0,.5);
    padding-top: 100px;
    min-height: 100vh;
    /*width: 100vw;*/
  }
  </style>

  @yield('css')

</head>
<body>

  <div id="app">
    @include('layouts.partials._navbar')
    @yield('content')

    <!-- About Modal -->
    @include('layouts.partials._about-modal')
    <!-- Contact Modal -->
    @include('layouts.partials._contact-modal')
  </div>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.3/js/mdb.min.js"></script>

</body>
</html>
