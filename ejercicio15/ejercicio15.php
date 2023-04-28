<html>
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 15</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
</html>
<?php
    include_once ("../header.html");
    $navigation = '
            <li class="navigation">
            <ul class="nav-child">
                <a href="../ejercicio1/ejercicio1.php" class="nav-link">Ejercicio 1</a>
            </ul>
            <ul class="nav-child">
                <a href="../ejercicio2/ejercicio2.php" class="nav-link">Ejercicio 2</a>
            </ul>
            <ul class="nav-child">
                <a href="../ejercicio3/ejercicio3.php" class="nav-link">Ejercicio 3</a>
            </ul>
            <ul class="nav-child">
                <a href="../ejercicio4/ejercicio4.php" class="nav-link">Ejercicio 4</a>
            </ul class="nav-child">
            <ul class="nav-child">
                <a href="../ejercicio5/ejercicio5.php" class="nav-link">Ejercicio 5</a>
            </ul>
            <ul class="nav-child">
                <a href="../ejercicio6/ejercicio6.php" class="nav-link">Ejercicio 6</a>
            </ul>
            <ul class="nav-child">
                <a href="../ejercicio9/ejercicio9.php" class="nav-link">Ejercicio 9</a>
            </ul>
            <ul class="nav-child">
                <a href="../ejercicio10/ejercicio10.php" class="nav-link">Ejercicio 10</a>
            </ul>
            <ul class="nav-child">
                <a href="../ejercicio11/ejercicio11.php" class="nav-link">Ejercicio 11</a>
            </ul>
            <ul class="nav-child">
                <a href="../ejercicio12/ejercicio12.php" class="nav-link">Ejercicio 12</a>
            </ul>
            <ul class="nav-child">
                <a href="../ejercicio13/ejercicio13.php" class="nav-link">Ejercicio 13</a>
            </ul>
            <ul class="nav-child">
                <a href="../ejercicio14/ejercicio14.php" class="nav-link">Ejercicio 14</a>
            </ul>
            <ul class="nav-child">
                <a href="ejercicio15.php" class="nav-link">Ejercicio 15</a>
            </ul>
            <ul class="nav-child">
                <a href="../ejercicio16/ejercicio16.php" class="nav-link">Ejercicio 16</a>
            </ul>
            <ul class="nav-child">
                <a href="../ejercicio17/ejercicio17.php" class="nav-link">Ejercicio 17</a>
            </ul>
            <ul class="nav-child">
                <a href="../ejercicio18/ejercicio18.php" class="nav-link">Ejercicio 18</a>
            </ul>
            <ul class="nav-child">
                <a href="../ejercicio19/ejercicio19.php" class="nav-link">Ejercicio 19</a>
            </ul>
            <ul class="nav-child">
                <a href="../ejercicio20/ejercicio20.php" class="nav-link">Ejercicio 20</a>
            </ul>
            </li>';
    echo $navigation;
    $form =
        '<div class="content"><form name="texto" action="" method="post">
                                    <label for="nombre">Palabra a buscar: </label>
                                    <input type="text" name="palabra_buscada" id="palabra_buscada">
                                    <label for="texto">Texto: </label>
                                    <input type="text" name="texto" id="texto">
                                    <input type="submit">
                                    </form></div>';
    echo $form;

    if (isset($_POST['palabra_buscada']) && isset($_POST['texto'])){
        $palabra = $_POST['palabra_buscada'];
        $texto = $_POST['texto'];
        echo "En el texto: " . $texto . "<br>";
        echo "Se encontraron " . buscar($palabra,$texto) . " ocurrencias de la palabra " . $palabra;
    }
    function buscar($palabraBuscada, $texto){
        $ocurrencias = 0;
        $palabras_texto = explode(" ", $texto);
        for($i = 0; $i < count($palabras_texto); $i++){
            if($palabras_texto[$i] == $palabraBuscada){
                $ocurrencias++;
            }
        }
        return $ocurrencias;
    }

include_once ("../footer.html");
?>
