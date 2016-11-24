<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji|Indie+Flower" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    {{-- <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}
    {{-- <link rel="stylesheet" href="css/faq-style.css"> --}}

    {{-- <script src="js/utilidades.js" charset="utf-8"  type="text/javascript"></script> --}}
    {{-- <script src="js/main.js" charset="utf-8"  type="text/javascript"></script> --}}

    <!-- Styles -->
    {{-- <link href="/css/app.css" rel="stylesheet"> --}}

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
  <div class="container">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{-- {{ config('app.name', 'Laravel') }} --}}
                        Organic food
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>

        </nav>

        @yield('content')
    </div>

    <footer>
      <div class="infogeneral">
        <p>
          Somos alimentos orgánicos !

          Nos hemos especializado en el suministro de alimentos / productos orgánicos , producidos por los agricultores locales en todo el país .

          Con más de 15 años de experiencia podemos decir con orgullo que somos uno de los mejores en el negocio , un proveedor confiable para más de 1000 empresas .
        </p>
      </div>

      <div class="infoContacto">

        <p>Información de contacto
          <br> <br>
          <span class="ion-android-mail"></span>
          <a href="contacto@organicfood.com"> contacto@organicfood.com</a>.
          <br><br>
          <span class="ion-ios-telephone"></span>
          <a href="#">113 442 3545</a>
          <br><br>
          <span class="ion-android-pin"></span>
          <a href="#"> Avenida Siempre Viva 742 </a>
        </p>
      </div>

      <div class="Newsletter">
        <p>
          <a href="#"><img src="images/1472731849_square-facebook.svg" alt="" class="face" /></a>
          <a href="#"><img src="images/social-instagram-new-square2-128.png" alt="" class="instagram"/></a>
          <a href="#"><img src="images/twitter-128.png" alt="" class="twitter"/></a>
          <br>
          REGISTRATE
          <br>
          Recibí novedades en tu Email!
        </p>
        <br>
        <form class="Newslettercaja">
          <input type="text" placeholder="Tu email aqui">
        </form>
      </div>

    </footer>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
  </div>
</body>
</html>
