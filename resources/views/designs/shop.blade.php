@extends('layouts.basic')

@section('title')
  Tienda Online
@endsection

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
            <a class="nav-link" data-toggle="modal" data-target="#categories"><i class="fa fa-bars" aria-hidden="true"></i> Categorías</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrito</a>
          </li>
        </ul>
        <!-- Links -->
        <a class="nav-link btn btn-primary btn-sm" href="{{ route('index') }}"> Volver a GaBPC</a>
      </div>

    </nav>
    <!--/.Navbar-->

    <div class="container mt-4">


      <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
          <!--Card-->
          <div class="card">
            <!--Card image-->
            <img class="img-fluid" src="{{ asset('img/shop/iphone.jpg') }}" alt="Card image cap">
            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">iPhone 5</h4>
              <!--Text-->
              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
              <hr class="my-2">
              <div class="row">
                <div class="col-4 text-left">250$</div>
                <div class="col-8 text-right">
                  <a>+<i class="fa fa-shopping-cart" aria-hidden="true"></i></a>&nbsp;&nbsp;
                  <a><i class="fa fa-share-alt" aria-hidden="true"></i></a>&nbsp;&nbsp;
                  <a><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
          <br>
          <!--/.Card-->
        </div>

        <div class="col-12 col-sm-6 col-md-4">
          <!--Card-->
          <div class="card">
            <!--Card image-->
            <img class="img-fluid" src="{{ asset('img/shop/imac.jpg') }}" alt="Card image cap">
            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">iMac</h4>
              <!--Text-->
              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
              <hr class="my-2">
              <div class="row">
                <div class="col-4 text-left">1900$</div>
                <div class="col-8 text-right">
                  <a>+<i class="fa fa-shopping-cart" aria-hidden="true"></i></a>&nbsp;&nbsp;
                  <a><i class="fa fa-share-alt" aria-hidden="true"></i></a>&nbsp;&nbsp;
                  <a><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
          <br>
          <!--/.Card-->
        </div>

        <div class="col-12 col-sm-6 col-md-4">
          <!--Card-->
          <div class="card">
            <!--Card image-->
            <img class="img-fluid" src="{{ asset('img/shop/beats.jpg') }}" alt="Card image cap">
            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Beats</h4>
              <!--Text-->
              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
              <hr class="my-2">
              <div class="row">
                <div class="col-4 text-left">500$</div>
                <div class="col-8 text-right">
                  <a>+<i class="fa fa-shopping-cart" aria-hidden="true"></i></a>&nbsp;&nbsp;
                  <a><i class="fa fa-share-alt" aria-hidden="true"></i></a>&nbsp;&nbsp;
                  <a><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
          <br>
          <!--/.Card-->
        </div>

        <div class="col-12 col-sm-6 col-md-4">
          <!--Card-->
          <div class="card">
            <!--Card image-->
            <img class="img-fluid" src="{{ asset('img/shop/camera.jpg') }}" alt="Card image cap">
            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Camera</h4>
              <!--Text-->
              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
              <hr class="my-2">
              <div class="row">
                <div class="col-4 text-left">3000$</div>
                <div class="col-8 text-right">
                  <a>+<i class="fa fa-shopping-cart" aria-hidden="true"></i></a>&nbsp;&nbsp;
                  <a><i class="fa fa-share-alt" aria-hidden="true"></i></a>&nbsp;&nbsp;
                  <a><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
          <br>
          <!--/.Card-->
        </div>

        <div class="col-12 col-sm-6 col-md-4">
          <!--Card-->
          <div class="card">
            <!--Card image-->
            <img class="img-fluid" src="{{ asset('img/shop/ds4.jpg') }}" alt="Card image cap">
            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">DualShock 4</h4>
              <!--Text-->
              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
              <hr class="my-2">
              <div class="row">
                <div class="col-4 text-left">75$</div>
                <div class="col-8 text-right">
                  <a>+<i class="fa fa-shopping-cart" aria-hidden="true"></i></a>&nbsp;&nbsp;
                  <a><i class="fa fa-share-alt" aria-hidden="true"></i></a>&nbsp;&nbsp;
                  <a><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
          <br>
          <!--/.Card-->
        </div>

        <div class="col-12 col-sm-6 col-md-4">
          <!--Card-->
          <div class="card">
            <!--Card image-->
            <img class="img-fluid" src="{{ asset('img/shop/mouse.jpg') }}" alt="Card image cap">
            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Magic Mouse</h4>
              <!--Text-->
              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
              <hr class="my-2">
              <div class="row">
                <div class="col-4 text-left">175$</div>
                <div class="col-8 text-right">
                  <a>+<i class="fa fa-shopping-cart" aria-hidden="true"></i></a>&nbsp;&nbsp;
                  <a><i class="fa fa-share-alt" aria-hidden="true"></i></a>&nbsp;&nbsp;
                  <a><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
          <br>
          <!--/.Card-->
        </div>


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

    <div class="modal fade left" id="categories" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-full-height modal-left modal-notify modal-success" role="document">
        <div class="modal-content">
          <div class="modal-body">

            <h3>Categorías</h3>
            <hr>
            <a class="btn btn-primary btn-outline btn-block">Categoría #1</a>
            <hr>
            <a class="btn btn-primary btn-outline btn-block">Categoría #2</a>
            <hr>
            <a class="btn btn-primary btn-outline btn-block">Categoría #3</a>
            <hr>
            <a class="btn btn-primary btn-outline btn-block">Categoría #4</a>
            <hr>

          </div>
          <div class="modal-footer text-center">
            <a class="btn btn-danger btn-outline btn-block" data-dismiss="modal">Cerrar</a>
          </div>
        </div>
      </div>
    </div>

  @endsection
