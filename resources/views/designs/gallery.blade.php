@extends('layouts.basic')

@section('title')
  Galería de Imágenes
@endsection

@section('css')
<style media="screen">
.upload-button {
  position: fixed;
  bottom: 3vh;
  right: 1vw;
}
</style>
@endsection

@section('content')
  <div class="container-fluid mt-3">

    <div class="row">
      <div class="col-12 col-sm-4 col-md-3 text-center">

        <div class="jumbotron">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img(31).jpg" class="img-fluid z-depth-1 rounded-circle" alt="Responsive image">
            <h5 class="h5-responsive mt-3">Mia Stevans</h5>
            <span class="badge badge-default">Fotógrafa</span>
            <span class="badge badge-primary">Artista</span>
            <span class="badge badge-success">Diseñadora</span>
            <hr class="my-2">
            <span class="badge badge-pill light-blue"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</span>
            <span class="badge badge-pill info-color"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</span>
        </div>

        <a href="{{ route('index') }}" class="btn btn-primary btn-rounded">Volver a GaBPC</a>

      </div>

      <div class="col-12 col-sm-8 col-md-9">
        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-12 mb-3">

            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(137).jpg" class="img-fluid z-depth-1" alt="Responsive image">

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-3">

            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img(115).jpg" class="img-fluid z-depth-1" alt="Responsive image">

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-6 mb-3">

            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img(116).jpg" class="img-fluid z-depth-1" alt="Responsive image">

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-6 mb-3">

            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img(117).jpg" class="img-fluid z-depth-1" alt="Responsive image">

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-6 mb-3">

            <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img(117).jpg" class="img-fluid z-depth-1" alt="Responsive image">

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 mb-3">

            <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img(129).jpg" class="img-fluid z-depth-1" alt="Responsive image">

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->
      </div>
    </div>


  </div>

  <button type="button" class="upload-button btn btn-danger btn-lg">
    <i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
  </button>

@endsection
