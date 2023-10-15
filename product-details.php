<?php
  include("php/conexion.php")
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Divina Belleza</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky background-header">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <nav class="main-nav">
                  <!-- ***** Logo Start ***** -->
                  <a href="index.php" class="logo">
                      <img src="assets/images/logo.png" alt="" style="height: 50px;">
                  </a>
                  <!-- ***** Logo End ***** -->
                  <!-- ***** Menu Start ***** -->
                  <ul class="nav">
                    <li><a href="index.php">Principal</a></li>
                    <li><a href="shop.php">Tienda</a></li>
                    <li><a href="product-details.php" class="active">Detalle del Producto</a></li>
                    <li><a href="contact.php">Contacto</a></li>
                    <li><a href="#">Acceder</a></li>
                </ul>   
                  <a class='menu-trigger'>
                      <span>Menu</span>
                  </a>
                  <!-- ***** Menu End ***** -->
              </nav>
          </div>
      </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->

  <?php

    $id = $_GET['productId'];
    $id = $conex->real_escape_string($id);
    
    $consulta = "SELECT * FROM `products` WHERE id = " . $id ;

		$resultado = mysqli_query($conex, $consulta);

    $fila = $resultado->fetch_assoc();

    $nombre = $fila["nombre"];
    $descripcion = $fila["descripcion"];
    $precio = $fila["precio"];
    $precioPasado = $fila["precio-pasado"];
    $descuento = $fila["descuento"];
    $stock = $fila["stock"];
    $categoria = $fila["categoria"];
    $statusPromocion = $fila["status-promocion"];
    $img = $fila["img"];



    $imprimir = '
    <div class="col-lg-6">
      <div class="left-image">
        <img src="' . $img . '" alt="">
      </div>
    </div>
    <div class="col-lg-6 align-self-center">
      <h4>' . $nombre . '</h4>
      <span class="price"><em>$' . $precio . '</em> $' . $precioPasado . '</span>
      <p>' . $descripcion . '</p>
      <!--<form id="qty" action="#">
        <input type="qty" class="form-control" id="1" aria-describedby="quantity" placeholder="1" min="0">
        <button type="submit"><i class="fa fa-shopping-bag"></i> Comprar</button>
      </form>-->
      <div id="paypal-button-conteiner"></div>

    </div>
    <div class="col-lg-12">
      <div class="sep"></div>
    </div>
    '


  ?>

  <div class="page-heading header-text" style="padding: 0px 0px 0px 0px;">
    <!-- <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Modern Warfare® II</h3>
          <span class="breadcrumb"><a href="#">Home</a>  >  <a href="#">Shop</a>  >  Assasin Creed</span>
        </div>
      </div>
    </div> -->
  </div>

  <div class="single-product section">
    <div class="container">
      <div class="row">
        <?php
          echo $imprimir;
        ?>
      </div>
    </div>
  </div>


  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2023 Divina Belleza. &nbsp;&nbsp; <a rel="nofollow" href="https://www.instagram.com/le_capitalista/" target="_blank">Desarrollador: Jorge Ruiz</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  <!-- Paypal CheakOut -->
  <script src="https://www.paypal.com/sdk/js?client-id=AVx33tw7VxNiav9_VP7cQflCJqUsLSDuNCixxKEyu33zJ7DUjlvaTOU57bTURu7_EzZsvmB7cJx7K8r6"></script>

  <script>
    paypal.Buttons({
      style:{
        color: 'blue',
        shape: 'pill',
        label: 'pay'
      },
      createOrder: function(data, actions){
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: 30000
            }
          }]
        });
      },
      onCancel: function(data){
        alert("Pago Cancelado con exito");
      }
    }).render('#paypal-button-conteiner');
    </script>
  <!-- <script src="https://www.paypal.com/sdk/js?client-id=test&components=buttons&enable-funding=paylater,venmo,card" data-sdk-integration-source="integrationbuilder_sc"></script> -->
  <!-- <script src="app.js"></script> -->
  </body>
</html>