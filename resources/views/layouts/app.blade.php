<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GaBPC | WebDesign</title>
    <!-- CSS -->
    @include('layouts.partials._styles')
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
    }
    </style>
    @yield('css')
  </head>

  <body>
    <div id="app">
      <!-- Navbar -->
      @include('layouts.partials._navbar')
      <!-- Main Content -->
      @yield('content')
      <!-- About Modal -->
      @include('layouts.partials._about-modal')
      <!-- Contact Modal -->
      @include('layouts.partials._contact-modal')
    </div>
    <!-- Javascripts -->
    @include('layouts.partials._scripts')
    @yield('js')
  </body>
  
</html>
