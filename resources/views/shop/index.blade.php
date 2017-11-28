@extends('layouts.basic')

@section('css')
<style media="screen">
body {
  background: whitesmoke;
}
</style>
@endsection

@section('content')

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light blue-grey lighten-5">

    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="#">Online Shop</a>

      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link"><i class="fa fa-money" aria-hidden="true"></i> Ofertas <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"><i class="fa fa-bars" aria-hidden="true"></i> Categorías</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrito</a>
          </li>
        </ul>
        <!-- Links -->

      </div>

    </nav>
    <!--/.Navbar-->




    <div class="container mt-4">

      <div class="row">
        <div class="col-12 offset-sm-2 col-sm-8">
          <!--Carousel Wrapper-->
          <div id="carousel-example-1z" class="carousel slide carousel-fade z-depth-2" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-1z" data-slide-to="1"></li>
              <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
              <!--First slide-->
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://static.pexels.com/photos/4158/apple-iphone-smartphone-desk.jpg" alt="First slide">
              </div>
              <!--/First slide-->
              <!--Second slide-->
              <div class="carousel-item">
                <img class="d-block w-100" src="https://static.pexels.com/photos/610945/pexels-photo-610945.jpeg" alt="Second slide">
              </div>
              <!--/Second slide-->
              <!--Third slide-->
              <div class="carousel-item">
                <img class="d-block w-100" src="https://static.pexels.com/photos/577769/pexels-photo-577769.jpeg" alt="Third slide">
              </div>
              <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
          </div>
          <!--/.Carousel Wrapper-->
        </div>
      </div>

      <div class="row">
        <div class="col-12 offset-sm-1 col-sm-10">
          <br>
          <hr>
        </div>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <table class="table text-center">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario ($)</th>
                    <th>Subtotal ($)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Item #1</td>
                    <td>6</td>
                    <td>10.00</td>
                    <td>60.00</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Item #25</td>
                    <td>3</td>
                    <td>15.00</td>
                    <td>45.00</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Item #6</td>
                    <td>5</td>
                    <td>5.00</td>
                    <td>25.00</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><b>Total</b></td>
                    <td><b>130.00</b></td>
                  </tr>

                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-angle-left" aria-hidden="true"></i> Seguir Comprando</button>
              <button type="button" class="btn btn-success"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Realizar Compra</button>
            </div>
          </div>
        </div>
      </div>




    </div>
  @endsection
