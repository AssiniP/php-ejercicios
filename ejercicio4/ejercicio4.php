<html>
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 4</title>
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
                        <a href="ejercicio4.php" class="nav-link">Ejercicio 4</a>
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
    $formulario_4 =
        '<div class="content"><form name="incrementar" action="" method="post">
                        <h2>Ejercicio 4: Incrementar</h2>
                        <label for="valor_1">Valor a incrementar: </label>
                        <input type="text" name="valor_1" id="valor_1">
                        <input type="submit">
                        </form></div>';
    echo $formulario_4;

    if (isset($_POST['valor_1'])){
        $valor_1 = $_POST['valor_1'];
        echo "El valor 1 es " . $valor_1 . "<br>";
        incrementar($valor_1);
        echo "El valor 1 ahora es " . $valor_1 . "<br>";
    }
    include_once ("../footer.html");
    function incrementar(&$variable){
        $variable++;
    }
?>
