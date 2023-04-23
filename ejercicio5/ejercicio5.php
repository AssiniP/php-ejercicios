<html>
<head>
    <meta charset="UTF-8">
    <title>EJECICIO 5</title>
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
                            <a href="ejercicio5.php" class="nav-link">Ejercicio 5</a>
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
    $formulario_5 =
        '<div class="content"><form name="sumatoria" action="" method="post">
                            <h2>Ejercicio 5: Sumatoria</h2>
                            <label for="array_1">Valores del array: </label>
                            <input type="text" name="array_1" id="array_1" placeholder="1,2,3,4,5">
                            <input type="submit">
                            </form></div>';
    echo $formulario_5;

    if (isset($_POST['array_1'])){
        $valores = $_POST['array_1'];
        $array_1 = array_map("intval", explode(",", $valores));
        $i = 0;
        foreach ($array_1 as $valor){
            echo "El array tiene el valor " . $valor . " en el index " . $i . "<br>";
            $i++;
        }
        echo "Sumatoria A: " . sumatoria_a($array_1). "<br>";
        echo "Sumatoria B: " . sumatoria_b($array_1). "<br>";
        echo "Sumatoria C: " . sumatoria_c($array_1). "<br>";
    }
    include_once ("../footer.html");
    function sumatoria_a($array){
        $largo = count($array);

        foreach($array as $value){
            if(!is_numeric($value)){
                return "Hay valores no númericos en el array!";
            }
        }

        $resultado = 0;
        for($i = 0; $i < $largo; $i++){
            $resultado += $array[$i];
        }
        return $resultado;
    }
    function sumatoria_b($array){

        foreach($array as $value){
            if(!is_numeric($value)){
                return "Hay valores no númericos en el array!";
            }
        }

        $resultado = 0;
        foreach($array as $value){
            $resultado += $value;
        }
        return $resultado;
    }

    function sumatoria_c($array){

        foreach($array as $value){
            if(!is_numeric($value)){
                return "Hay valores no númericos en el array!";
            }
        }

        $resultado = 0;
        $i = 0;
        while ($i < count($array)){
            $resultado += $array[$i];
            $i++;
        }
        return $resultado;
    }
?>