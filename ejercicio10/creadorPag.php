<?php
    function crearPagina($imagen, $filename){
        $paginaACrear = "paginas/" . $filename . ".php";
        copy("template.php", $paginaACrear);
        if(!$pagina = fopen($paginaACrear, 'a')){
            echo "malio sal";
        }
        $imgSource = "../" . $imagen;
        $texto = "?><html><h2>$filename</h2><img src='$imgSource'></html>";
        $fin = '<?php include_once("../../footer.html");';
        fwrite($pagina, $texto);
        fwrite($pagina, $fin);
        fclose($pagina);
    }
    function mostrarDireccion($nombre){
    return "paginas/". $nombre . ".php";
    }
?>