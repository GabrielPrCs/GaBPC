@extends('layouts.app')

@section('content')

  <div class="container">

    <div class="row white-text text-center text-uppercase">
      <div class="col-12">
        <h1 class="font-weight-bold">
          Gabriel Prieto Cassano
        </h1>
        <h5>
          Desarrollo de aplicaciones web
        </h5>
      </div>
    </div>

    <div class="row">
      <div class="col-12"><br></div>
    </div>

    <div class="row text-center">

      <div class="col-12 col-sm-6 offset-md-2 col-md-4">
        <div id="frontend" class="card card-body">
          <h4 class="card-title">Desarrollo Frontend</h4>
          <p class="card-text">Utilizando diversas tecnologías, tales como <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a> y <a href="https://vuejs.org/" target="_blank">Vue.js</a>.</p>
        </div>
      </div>

      <div class="col-12 d-block d-sm-none">
        <br>
      </div>

      <div class="col-12 col-sm-6 col-md-4">
        <div id="backend" class="card card-body">
          <h4 class="card-title">Desarrollo Backend</h4>
          <p class="card-text">Utilizando el framework para PHP <a href="https://www.laravel.com" target="_blank">Laravel</a>.</p>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-12 offset-sm-1 col-sm-10 offset-md-3 col-md-6">
        <hr>
      </div>
    </div>

    <div class="row">
      <div class="col-12 mt-3 mb-3">
        <h2 class="white-text font-weight-bold text-center">Diseños</h2>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-12 offset-md-2 col-md-8">
        <div class="view overlay hm-teal-strong">
          <a href="{{ route('shop') }}">
            <img src="{{ asset('img/shop.png') }}" class="img-fluid rounded" alt="placeholder">
            <div class="mask flex-center waves-effect waves-light">
              <b class="white-text">Tienda Online</b>
            </div>
          </a>
        </div>
        <hr>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-12 offset-md-2 col-md-8">
        <div class="view overlay hm-blue-strong">
          <a href="{{ route('gallery') }}">
            <img src="{{ asset('img/gallery.png') }}" class="img-fluid rounded" alt="placeholder">
            <div class="mask flex-center waves-effect waves-light">
              <b class="white-text">Galería de imágenes</b>
            </div>
          </a>
        </div>
        <hr>
      </div>
    </div>

  </div>

@endsection

@section('js')
  <script>
  var resize_panel = function() {
    if($('#frontend').height() < $('#backend').height()) {
      $('#frontend').height($('#backend').height())
    } else {
      $('#backend').height($('#frontend').height())
    }
  }
  $(window).resize(resize_panel);
  $(window).ready(resize_panel);
  </script>
@endsection
