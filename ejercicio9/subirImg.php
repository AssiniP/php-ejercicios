<?php
    $directorio = "imagenes/";
    $nombre = $_POST["nombre_img"];
    print_r($_FILES['imagen_user']['error']);
    $imagenSubida = $directorio . basename($_FILES["imagen_user"]["name"]);
    $imagenTipo = strtolower(pathinfo($imagenSubida, PATHINFO_EXTENSION));
    $direccion = $directorio . $nombre . "." . $imagenTipo;
    var_dump($direccion);
    if(move_uploaded_file($_FILES['imagen_user']['tmp_name'], $direccion)){
        echo "bien";
        header("Location: ejercicio9.php");

    }else{
        echo "mal";
        print_r($_FILES);
        die();
    };
?>
