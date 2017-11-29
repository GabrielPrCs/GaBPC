<nav class="navbar navbar-expand-lg navbar-dark indigo fixed-top">

  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">GaBPC</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="main-navbar">
        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('index') }}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#contact-modal"><i class="fa fa-phone" aria-hidden="true"></i> Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#about-modal"><i class="fa fa-user" aria-hidden="true"></i> Acerca</a>
            </li>
        </ul>
        <!-- Links -->
    </div>
    <!-- Collapsible content -->
  </div>

</nav>
