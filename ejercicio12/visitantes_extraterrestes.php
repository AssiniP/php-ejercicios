<html>
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 12</title>
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
    $archivo = "extraterrestes.json";
    if($_POST && $_POST['planeta']){
        $visitante = array("nombre" => $_POST['nombre'], "planeta" => $_POST['planeta']);
        if(file_exists($archivo)){
            $datos = file_get_contents($archivo);
            $visitas= json_decode($datos);
            array_push($visitas, $visitante);
            $json = json_encode($visitas);
            file_put_contents($archivo, $json);
        }else{
            $array = array();
            array_push($array, $visitante);
            $json = json_encode($array);
            file_put_contents($archivo, $json);
        }
    }

    $visitas = file_get_contents($archivo);
    $array = json_decode($visitas, true);
    $extraterrestes = 0;
    echo "<div>";
    foreach ($array as $visita){
        echo "<p>Nos visito " . $visita['nombre'] . " del planeta " . $visita['planeta'] . "!</p> </br>";
        if($visita['planeta'] != 'la tierra'){
            $extraterrestes++;
        }
    }
    echo "<p> Hay " . $extraterrestes . " visitantes extraterrestres </p>";
    echo "</div>";

    include_once ("../footer.html");

?>
