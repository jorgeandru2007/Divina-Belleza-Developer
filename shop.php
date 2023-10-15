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
    <style>
        /* .barraBusquedaDiv{
          display: flex;
          flex-direction: row;
        }

        .barraBusquedaDiv > input{
          width: 90%;
          border-radius: 15px 0 0 15px;
          border:none;

          text-indent: 15px;
        }

        .barraBusquedaDiv > div{
          width: 10%;
          background-color: #ee626b;
          color: white;
          border-radius: 0 15px 15px 0;
          
          display: flex;
          flex-direction: row;
          justify-content: center;
          align-items: center;
        } */

        
        .barraBusquedaDiv{
          position: relative;
          max-width: 1100px;
          width: 100%;
        }

        .barraBusquedaDiv > input{
          width: 100%;
          height: 50px;
          outline: none;
          border-radius: 25px;
          background-color: #fff;
          border: none;
          padding: 0px 25px;
          font-size: 14px;
          color: #7a7a7a;
        }

        .barraBusquedaDiv > button{
          display: inline-block;
          height: 50px;
          line-height: 50px;
          background-color: #ee626b;
          color: #fff;
          font-size: 15px;
          text-transform: uppercase;
          font-weight: 500;
          padding: 0px 25px;
          border: none;
          border-radius: 25px;
          position: absolute;
          right: 0;
          top: 0;
          transition: all .3s;
        }

        .barraBusquedaDiv > button:hover{
          background-color: #a73139;
        }

    </style>
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
  <header class="header-area header-sticky">
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
                      <li><a href="shop.php" class="active">Tienda</a></li>
                      <li><a href="product-details.php">Detalle del Producto</a></li>
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


  <!-- 
		$consulta = "SELECT * FROM `lugares` WHERE `categoria` = 'Parque' ORDER BY `calificacion` DESC";

    
		$i = 0;
		if ($i < 3) {
			$Spa = "";
			$resultado->num_rows;
			while ($fila = $resultado->fetch_assoc() and $i < 3) {
				$i = $i + 1;

				$codigo = $fila["codigo"];
				$lugar = $fila["lugar"];
				
				$Spa .= "<i><a href=\"mapa.php?lugar='" . $codigo . "'\"> " . $lugar . "  •</a></i>";
			}
		}
   -->

   <?php
    $imprimirShop = "";
    
		if (isset($_GET['searchKeyword'])) {
			$searchKeyword = $_GET['searchKeyword'];
      $searchKeyword = $conex->real_escape_string($searchKeyword);

      $consulta = "SELECT * FROM `products` WHERE nombre LIKE '%" . $searchKeyword . "%' ORDER BY `posicion`";
    } else{
      $consulta = "SELECT * FROM `products` ORDER BY `posicion`";
    }

		$resultado = mysqli_query($conex, $consulta);

    while ($fila = $resultado->fetch_assoc()) {


      $id = $fila["id"];
      $nombre = $fila["nombre"];
      $descripcion = $fila["descripcion"];
      $precio = $fila["precio"];
      $precioPasado = $fila["precio-pasado"];
      $descuento = $fila["descuento"];
      $stock = $fila["stock"];
      $categoria = $fila["categoria"];
      $statusPromocion = $fila["status-promocion"];
      $img = $fila["img"];

      
      $imprimirShop .= '
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 ' . $categoria . '">
            <div class="item">
              <div class="thumb">
                <a href="product-details.php?productId=' . $id . '"><img src="' . $img . '" alt=""></a>
                <span class="price"><em>$' . $precioPasado . '</em>$ ' . $precio . ' </span>
              </div>
              <div class="down-content">
                <span class="category">' . $categoria . '</span>
                <h4>' . $nombre . '</h4>
                <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
              </div>
            </div>
          </div>
        ';
    }
   ?>

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Tienda</h3>
          <!-- <span class="breadcrumb"><a href="#">Home</a> > Our Shop</span> -->
        </div>
      </div>
      
      <br><br>

      <div class="search-input">
        <form id="search" action="#" class="barraBusquedaDiv">
          <input type="text" placeholder="Escribe un producto" id='searchText' name="searchKeyword" onkeypress="handle" />
          <button role="button">Buscar</button>
        </form>
      </div>

      <div class="section trending">
        <ul class="trending-filter">
          <li>
            <a class="is_active" href="#!" data-filter="*">Mostrar Todos</a>
          </li>
          <li>
            <a href="#!" data-filter=".Facial">Facial</a>
          </li>
          <li>
            <a href="#!" data-filter=".Uñas">Uñas</a>
          </li>
          <li>
            <a href="#!" data-filter=".Labios">Labios</a>
          </li>
          <li>
            <a href="#!" data-filter=".Pelo">Pelo</a>
          </li>
          <li>
            <a href="#!" data-filter=".Ojos">Ojos</a>
          </li>
        </ul>
      </div>

    </div>
  </div>

  <div class="section trending">
    <div class="container-md">
      <!-- <div class="barraBusquedaDiv">
        <input type="text" placeholder="¿Estas buscando algun producto en especifico?...">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
        </div>
      </div> -->
      

    </div>
    <div class="container">
      <div class="row trending-box">
        <?php
          echo $imprimirShop;
        ?>
      </div>

      <!-- <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
          <li><a href="#"> &lt; </a></li>
            <li><a href="#">1</a></li>
            <li><a class="is_active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"> &gt; </a></li>
          </ul>
        </div>
      </div> -->

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

  </body>

    
    
</html>