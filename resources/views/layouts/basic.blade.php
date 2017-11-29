<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GaBPC | @yield('title')</title>
    <!-- CSS -->
    @include('layouts.partials._styles')
    @yield('css')
  </head>

  <body>
    <div id="app">
      @yield('content')
    </div>
    <!-- Javascripts -->
    @include('layouts.partials._scripts')
    @yield('js')
  </body>

</html>
