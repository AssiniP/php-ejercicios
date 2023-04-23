<html>
<head>
    <meta charset="UTF-8">
    <title>EJECICIO 3</title>
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
                    <a href="ejercicio3.php" class="nav-link">Ejercicio 3</a>
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
                    <a href="../ejercicio15/ejercicio15.php" class="nav-link">Ejercicio 15</a>
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
    $formulario_3 =
        '<div class="content"><form name="concatenar" action="" method="post">
                    <h2>Ejercicio 3: Concatenar texto</h2>
                    <label for="texto_1">Texto 1: </label>
                    <input type="text" name="texto_1" id="texto_1">
                    <label for="texto_2">Texto 2: </label>
                    <input type="text" name="texto_2" id="texto_2">
                    <input type="submit">
                    </form></div>';
    echo $formulario_3;

    if (isset($_POST['texto_1']) && isset($_POST['texto_2'])){
        $texto_1 = $_POST['texto_1'];
        $texto_2 = $_POST['texto_2'];
        echo "El texto 1 es " . $texto_1 . "<br>";
        echo "El texto 2 es " . $texto_2 . "<br>";
        echo "Concatenar: " . concatenar($texto_1,$texto_2) . "<br>";
    }
    include_once ("../footer.html");
    function concatenar($texto1, $texto2){
        return $texto1 . $texto2;
    }
?>
