<?php
    if(!isset($_POST["nombre_img"]) || !isset($_POST["imagen_user"])){
        header("Location: ejercicio10.php");
    }

    $directorio = "imagenes/";
    $nombre = $_POST["nombre_img"];
    $imagenSubida = $directorio . basename($_FILES["imagen_user"]["name"]);
    $imagenTipo = strtolower(pathinfo($imagenSubida, PATHINFO_EXTENSION));
    $direccion = $directorio . $nombre . "." . $imagenTipo;
    var_dump($direccion);
    if(move_uploaded_file($_FILES['imagen_user']['tmp_name'], $direccion)){
        header("Location: ejercicio10.php");
    }else{
        die();
    };

?>
