<html>
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 1</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
</html>
<?php

    include_once ("../header.html");
    $navigation = '
        <li class="navigation">
        <ul class="nav-child">
            <a href="ejercicio1.php" class="nav-link">Ejercicio 1</a>
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
    $formulario_1 =
        '   <div class="content"><form name="semaforo" action="" method="post">
            <h2>Ejercicio 1: Semaforo</h2>
            <label for="color_semaforo">Color: </label>
            <input type="text" name="color" id="color_semaforo">
            <input type="submit">
            </form></div>';
    echo $formulario_1;

    if (isset($_POST['color'])){
        $color = $_POST['color'];
        echo "El color es " . $color . "<br>";
        echo "Semaforo A: " . semaforo_a($color) . "<br>";
        echo "Semaforo B: " . semaforo_b($color) . "<br>";
        echo "Semaforo C: " . semaforo_c($color) . "<br>";
    }

    include_once ("../footer.html");
    function semaforo_a($color){
        $color = strtolower($color);
        $respuesta = "";
        if ($color == "rojo"){
            $respuesta = "Frene";
        } elseif ($color == "amarillo"){
            $respuesta = "Precaución";
        } elseif ($color == "verde"){
            $respuesta = "Avance";
        } else{
            $respuesta = "Estado desconocido";
        }
        return $respuesta;
    }
    function semaforo_b($color){
        $color = strtolower($color);
        $respuesta = "";
        $color == "rojo" ? $respuesta = "Frene" : ($color == "amarillo" ? $respuesta = "Precaución":
            ($color == "verde" ? $respuesta = "Avance" : $respuesta = "Estado desconocido"));
        return $respuesta;
    }

    function semaforo_c($color){
        $color = strtolower($color);
        $respuesta = "";
        switch ($color){
            default:
                $respuesta = "Estado desconocido";
                break;
            case "amarillo":
                $respuesta = "Precaución";
                break;
            case "verde":
                $respuesta = "Avance";
                break;
            case "rojo":
                $respuesta = "Frene";
                break;
        }
        return $respuesta;
    }
?>