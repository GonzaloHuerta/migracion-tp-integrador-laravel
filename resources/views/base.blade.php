<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji|Indie+Flower" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="css/faq-style.css">

        <script src="js/utilidades.js" charset="utf-8"  type="text/javascript"></script>
        <script src="js/main.js" charset="utf-8"  type="text/javascript"></script>

    </head>
  <body>
    <div class="container">
      <header>
        <img src="images/sello.jpg" alt="sello-confiable" class="sello" />

        <div class="option-rigth">
          <div class="registro">
            <a href="/login">Login</a> |
            <a href="/register">Registrarse</a>
          </div>

          <div class="cart-look">
            <a href="#" class="cart">
              <span class="ion-ios-cart"></span>
              <span class="number-price">0</span>
              <span class="number-price">- items</span>
            </a>
            <a href="#">
              <span class="ion-android-search"></span>
            </a>
          </div>
        </div>

        <nav class="main-nav">
          <ul>
  					<li><a href="/">home</a></li>
  					<li><a href="#">nosotros</a></li>
  					<li><a href="#">productos</a></li>
  					<li><a href="/faq">FAQ</a></li>
  					<li><a href="#">sucursales</a></li>
  					<li><a href="#">contacto</a></li>
  				</ul>
        </nav>

          @yield('contenido', 'No hay contenido')

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
