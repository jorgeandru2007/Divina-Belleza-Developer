<?php
include("conexion.php");

// $img = $_POST["img"];
if($_FILES["img"]["error"] > 0){

}
else{
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $precioPasado = $_POST["precio-pasado"];
    $descuento = $_POST["descuento"];
    $stock = $_POST["stock"];
    $categoria = $_POST["categoria"];
    $statusPromocion = $_POST["status-promocion"];

    $nom_archivo = $_FILES['img']['name'];
    $ruta = "../assets/images/products/" . $nom_archivo;
    $archivo = $_FILES['img']['tmp_name'];
    $subir = move_uploaded_file($archivo, $ruta);
    $rutaDDBB = "assets/images/products/" . $nom_archivo;


    // $sentencia_img = "UPDATE productos SET imagen = '" . $ruta ."' WHERE id='"."id"."' ";
    $sentencia_img = "INSERT INTO 
    `products`(`nombre`, `descripcion`, `img`, `precio`, `precio-pasado`, `descuento`, `stock`, `status-promocion`, `categoria`)
    VALUES ('" . $nombre . "','" . $descripcion . "','" . $rutaDDBB . "','" . $precio . "','" . $precioPasado . "','" . $descuento . "','" . $stock . "','" . $statusPromocion . "','" . $categoria . "')";
    $conex->query($sentencia_img) or die ("Error al subir imagen: ". mysqli_error($conex));

    echo "<script>window.location.href = '../shop.php';</script>";
}

?>