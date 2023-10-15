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
      .single-product form {
        display: flex;
        flex-direction: row;
      }

      /* Imagen Dinamica */
      
      #contenedor-imagen {
        border: 2px dashed #ccc;
        padding: 20px;
        text-align: center;
        cursor: pointer;
        position: relative;
        overflow: hidden; /* Oculta el mensaje emergente cuando no se muestra */
        border-radius: 50%; /* Hace que el contenedor sea un círculo */
        width: 400px; /* Ancho del círculo */
        height: 400px; /* Altura del círculo */
        float: center;
      }

      #contenedor-imagen img {
        width: 100%;
        height: 100%;
        /* display: none; */
      }

      #input-imagen {
        display: none;
      }

      /* Estilos para el mensaje emergente (círculo) */
      #mensaje-emergente {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        padding: 5px 10px;
        border-radius: 50%; /* Hace que el mensaje sea un círculo */
        width: 0; /* Ancho inicial 0 para la animación */
        height: 0; /* Altura inicial 0 para la animación */
        opacity: 0; /* Inicialmente invisible */
        transition: all 0.3s ease-in-out;
        transform: translateX(200px);
              /* Centra horizontalmente */
        display: flex;
        align-items: center;
        justify-content: center;
      }

        /* Mostrar el mensaje emergente cuando el cursor pasa por encima */
      #contenedor-imagen:hover #mensaje-emergente {
        width: 100%;
        height: 100%;
        opacity: 1;
        transform: translateX(0%);
      }

      #mensaje-emergente > span{
        width: 80%;
      }

      
      .single-product form select {
        /* width: 80px; */
        height: 50px;
        background-color: #f7f7f7;
        border: 1px solid #e7e7e7;
        border-radius: 25px;
        text-align: center;
        float: left;
        margin-right: 15px;
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
        <form class="col-lg-12 row" id="qty" action="php/product-upload.php" method="POST" enctype="multipart/form-data">
          <div class="col-lg-6">
            <div class="left-image">

              <div id='contenedorImagen'>
              
                <div id='contenedor-imagen'>
                  <img id='imagen-seleccionada' src='assets/images/products/LumiGlotion.png' alt='' style='border-radius: 100%;' id='img'>
                  <div id='mensaje-emergente'>
                    <span>
                      Selecciona una imagen para tu producto
                    </span>
                  </div>
                </div>
                <input type='file' id='input-imagen' accept='image/*' name='img'>

              </div>
            </div>
          </div>
          <div class="col-lg-6 align-self-center">
            <h4>Añadir Producto</h4>
            <div class="col-lg-12 row">
              <div class="col-lg-6">
                <input class="col-lg-12" name="nombre" type="text" placeholder="Nombre del Producto" width="500px">
                <input class="col-lg-12" name="descripcion" type="text" placeholder="Descripcion" width="500px">
                <input class="col-lg-12" name="precio" type="text" placeholder="Precio Actual" width="500px">
                <input class="col-lg-12" name="precio-pasado" type="text" placeholder="Precio Pasado" width="500px">
              </div>
              <div class="col-lg-6">
                <input class="col-lg-12" name="descuento" type="text" placeholder="Descuento" width="500px">
                <input class="col-lg-12" name="stock" type="number" placeholder="Stock" width="10px" min="0">

                <select class="col-lg-12" name="categoria">
                  <option value="">Ninguna</option>
                  <option value="Facial">Facial</option>
                  <option value="Uñas">Uñas</option>
                  <option value="Labios">Labios</option>
                  <option value="Pelo">Pelo</option>
                  <option value="Ojos">Ojos</option>
                </select>

                <select class="col-lg-12" name="status-promocion">
                  <option disabled selected>¿Esta en Promocion?</option>
                  <option value="1">Sí</option>
                  <option value="0">No</option>
                </select>
              </div>
              <button class="col-lg-12" type="submit"><i class="fa fa-plus"></i> Añadir</button>

            </div>

            <!-- <span class="price"><em>$28</em> $22</span> -->
              <!-- <input type="qty" class="form-control" id="1" aria-describedby="quantity" placeholder="stock"> -->
            <!-- <ul>
              <li><span>Game ID:</span> COD MMII</li>
              <li><span>Genre:</span> <a href="#">Action</a>, <a href="#">Team</a>, <a href="#">Single</a></li>
              <li><span>Multi-tags:</span> <a href="#">War</a>, <a href="#">Battle</a>, <a href="#">Royal</a></li>
            </ul> -->
          </div>
        </form>
        <div class="col-lg-12">
          <div class="sep"></div>
        </div>
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

	<!-- Imagen dinamica js -->
  <script> 
    const contenedorImagen = document.getElementById('contenedor-imagen');
    const imagenSeleccionada = document.getElementById('imagen-seleccionada');
    const inputImagen = document.getElementById('input-imagen');

    // Mostrar imagen cuando se selecciona una imagen
    inputImagen.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagenSeleccionada.src = e.target.result;
                imagenSeleccionada.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });

    // Permitir arrastrar y soltar una imagen
    contenedorImagen.addEventListener('dragover', function(e) {
        e.preventDefault();
        contenedorImagen.style.border = '2px dashed #333';
    });

    contenedorImagen.addEventListener('dragleave', function() {
        contenedorImagen.style.border = '2px dashed #ccc';
    });

    contenedorImagen.addEventListener('drop', function(e) {
        e.preventDefault();
        contenedorImagen.style.border = '2px dashed #ccc';
        const file = e.dataTransfer.files[0];
        if (file) {
            inputImagen.files = new DataTransfer().files;
            inputImagen.files.add(file);
            inputImagen.dispatchEvent(new Event('change'));
        }
    });

    // Abrir el explorador de archivos al hacer clic en el contenedor
    contenedorImagen.addEventListener('click', function() {
        inputImagen.click();
    });

    // Restablecer el valor del input al hacer clic para forzar una actualización visual
    inputImagen.addEventListener('click', function() {
        this.value = null;
    });
  </script>

  </body>
</html>