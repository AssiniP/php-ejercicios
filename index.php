<html>
<head>
    <meta charset="UTF-8">
    <title>EJERCICIOS EN PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<!--
<body style="background-color: #716969">
    <h1 class="title">Assini Paula</h1>

    <li class="navigation">
        <ul class="nav-child">
            <a href="ejercicio1/ejercicio1.php" class="nav-link">Ejercicio 1</a>
        </ul>
        <ul class="nav-child">
            <a href="ejercicio2/ejercicio2.php" class="nav-link">Ejercicio 2</a>
        </ul>
        <ul class="nav-child">
            <a href="ejercicio3/ejercicio3.php" class="nav-link">Ejercicio 3</a>
        </ul>
        <ul class="nav-child">
            <a href="ejercicio4/ejercicio4.php" class="nav-link">Ejercicio 4</a>
        </ul class="nav-child">
        <ul class="nav-child">
            <a href="ejercicio5/ejercicio5.php" class="nav-link">Ejercicio 5</a>
        </ul>
        <ul class="nav-child">
            <a href="ejercicio6/ejercicio6.php" class="nav-link">Ejercicio 6</a>
        </ul>
        <ul class="nav-child">
            <a href="ejercicio9/ejercicio9.php" class="nav-link">Ejercicio 9</a>
        </ul>
        <ul class="nav-child">
            <a href="ejercicio10/ejercicio10.php" class="nav-link">Ejercicio 10</a>
        </ul>
        <ul class="nav-child">
            <a href="ejercicio11/ejercicio11.php" class="nav-link">Ejercicio 11</a>
        </ul>
        <ul class="nav-child">
            <a href="ejercicio12/ejercicio12.php" class="nav-link">Ejercicio 12</a>
        </ul>
        <ul class="nav-child">
            <a href="ejercicio13/ejercicio13.php" class="nav-link">Ejercicio 13</a>
        </ul>
        <ul class="nav-child">
            <a href="ejercicio14/ejercicio14.php" class="nav-link">Ejercicio 14</a>
        </ul>
        <ul class="nav-child">
            <a href="ejercicio15/ejercicio15.php" class="nav-link">Ejercicio 15</a>
        </ul>
        <ul class="nav-child">
            <a href="ejercicio16/ejercicio16.php" class="nav-link">Ejercicio 16</a>
        </ul>
        <ul class="nav-child">
            <a href="ejercicio17/ejercicio17.php" class="nav-link">Ejercicio 17</a>
        </ul>
        <ul class="nav-child">
            <a href="ejercicio18/ejercicio18.php" class="nav-link">Ejercicio 18</a>
        </ul>
        <ul class="nav-child">
            <a href="ejercicio19/ejercicio19.php" class="nav-link">Ejercicio 19</a>
        </ul>
        <ul class="nav-child">
            <a href="ejercicio20/ejercicio20.php" class="nav-link">Ejercicio 20</a>
        </ul>
    </li>

    <div class="content">
        <iframe src="https://miel.unlam.edu.ar/data/contenido/2628/Programacio-n-web-2.pdf" title="enunciado" class="enunciado"></iframe>
    </div>
    <footer class="footer">
        <p>Programación Web 2 - Turno noche</p>
        <img src="https://64.media.tumblr.com/dae9ec48d0e17d7e85486888b27421e2/011f0b3fe0697773-43/s250x400/e29b328433991f0506835190939aeadf62fa510e.gifv">
    </footer>
</body>-->
</html>
<?php
    include_once("header.html");
    $navigation = '
    <li class="navigation">
    <ul class="nav-child">
        <a href="ejercicio1/ejercicio1.php" class="nav-link">Ejercicio 1</a>
    </ul>
    <ul class="nav-child">
        <a href="ejercicio2/ejercicio2.php" class="nav-link">Ejercicio 2</a>
    </ul>
    <ul class="nav-child">
        <a href="ejercicio3/ejercicio3.php" class="nav-link">Ejercicio 3</a>
    </ul>
    <ul class="nav-child">
        <a href="ejercicio4/ejercicio4.php" class="nav-link">Ejercicio 4</a>
    </ul class="nav-child">
    <ul class="nav-child">
        <a href="ejercicio5/ejercicio5.php" class="nav-link">Ejercicio 5</a>
    </ul>
    <ul class="nav-child">
        <a href="ejercicio6/ejercicio6.php" class="nav-link">Ejercicio 6</a>
    </ul>
    <ul class="nav-child">
        <a href="ejercicio9/ejercicio9.php" class="nav-link">Ejercicio 9</a>
    </ul>
    <ul class="nav-child">
        <a href="ejercicio10/ejercicio10.php" class="nav-link">Ejercicio 10</a>
    </ul>
    <ul class="nav-child">
        <a href="ejercicio11/ejercicio11.php" class="nav-link">Ejercicio 11</a>
    </ul>
    <ul class="nav-child">
        <a href="ejercicio12/ejercicio12.php" class="nav-link">Ejercicio 12</a>
    </ul>
    <ul class="nav-child">
        <a href="ejercicio13/ejercicio13.php" class="nav-link">Ejercicio 13</a>
    </ul>
    <ul class="nav-child">
        <a href="ejercicio14/ejercicio14.php" class="nav-link">Ejercicio 14</a>
    </ul>
    <ul class="nav-child">
        <a href="ejercicio15/ejercicio15.php" class="nav-link">Ejercicio 15</a>
    </ul>
    <ul class="nav-child">
        <a href="ejercicio16/ejercicio16.php" class="nav-link">Ejercicio 16</a>
    </ul>
    <ul class="nav-child">
        <a href="ejercicio17/ejercicio17.php" class="nav-link">Ejercicio 17</a>
    </ul>
    <ul class="nav-child">
        <a href="ejercicio18/ejercicio18.php" class="nav-link">Ejercicio 18</a>
    </ul>
    <ul class="nav-child">
        <a href="ejercicio19/ejercicio19.php" class="nav-link">Ejercicio 19</a>
    </ul>
    <ul class="nav-child">
        <a href="ejercicio20/ejercicio20.php" class="nav-link">Ejercicio 20</a>
    </ul>
    </li>';
    echo $navigation;
    $enunciado = '<div class="content">
                  <iframe src="https://miel.unlam.edu.ar/data/contenido/2628/Programacio-n-web-2.pdf" title="enunciado" class="enunciado"></iframe>
                  </div>';
    echo $enunciado;
    include_once("footer.html");

/**
    include_once("ejercicio1/ejercicio1.php");
    include_once("ejercicio2/ejercicio2.php");
    include_once("ejercicio3/ejercicio3.php");
    include_once("ejercicio4/ejercicio4.php");
    include_once("ejercicio5/ejercicio5.php");
    include_once("ejercicio6/ejercicio6.php");
    date_default_timezone_set('America/Argentina/Buenos_Aires');

    $formulario_1 =
        '<form name="semaforo" action="" method="post">
        <h2 style="color: #468189">Ejercicio 1: Semaforo</h2>
        <label for="color_semaforo">Color: </label>
        <input type="text" name="color" id="color_semaforo">
        <input type="submit">
        </form>';
    echo $formulario_1;

    if (isset($_POST['color'])){
        $color = $_POST['color'];
        echo "El color es " . $color . "<br>";
        echo "Semaforo A: " . semaforo_a($color) . "<br>";
        echo "Semaforo B: " . semaforo_b($color) . "<br>";
        echo "Semaforo C: " . semaforo_c($color) . "<br>";
    }

    $formulario_2 =
        '<form name="binomio" action="" method="post">
            <h2 style="color: #468189">Ejercicio 2: Binomio cuadrado perfecto</h2>
            <label for="valor_a">Valor de A: </label>
            <input type="text" name="valor_a" id="valor_a">
            <label for="valor_b"> Valor de B: </label>
            <input type="text" name="valor_b" id="valor_b">
            <input type="submit">
            </form>';
    echo $formulario_2;

    if (isset($_POST['valor_a'])&&isset($_POST['valor_b'])){
        $valor_a = $_POST['valor_a'];
        $valor_b = $_POST['valor_b'];
        echo "El valor de A es " . $valor_a . "<br>";
        echo "El valor de B es " . $valor_b . "<br>";
        echo "Binomio A: " . binomioCuadradoPerfecto_a($valor_a,$valor_b) . "<br>";
        echo "Binomio B: " . binomioCuadradoPerfecto_b($valor_a,$valor_b) . "<br>";
    }

    $formulario_3 =
        '<form name="concatenar" action="" method="post">
                <h2 style="color: #468189">Ejercicio 3: Concatenar texto</h2>
                <label for="texto_1">Texto 1: </label>
                <input type="text" name="texto_1" id="texto_1">
                <label for="texto_2">Texto 2: </label>
                <input type="text" name="texto_2" id="texto_2">
                <input type="submit">
                </form>';
    echo $formulario_3;

    if (isset($_POST['texto_1']) && isset($_POST['texto_2'])){
        $texto_1 = $_POST['texto_1'];
        $texto_2 = $_POST['texto_2'];
        echo "El texto 1 es " . $texto_1 . "<br>";
        echo "El texto 2 es " . $texto_2 . "<br>";
        echo "Concatenar: " . concatenar($texto_1,$texto_2) . "<br>";
    }

    $formulario_4 =
        '<form name="incrementar" action="" method="post">
                    <h2 style="color: #468189">Ejercicio 4: Incrementar</h2>
                    <label for="valor_1">Valor a incrementar: </label>
                    <input type="text" name="valor_1" id="valor_1">
                    <input type="submit">
                    </form>';
    echo $formulario_4;

    if (isset($_POST['valor_1'])){
        $valor_1 = $_POST['valor_1'];
        echo "El valor 1 es " . $valor_1 . "<br>";
        incrementar($valor_1);
        echo "El valor 1 ahora es " . $valor_1 . "<br>";
    }

    $formulario_5 =
        '<form name="sumatoria" action="" method="post">
                        <h2 style="color: #468189">Ejercicio 5: Sumatoria</h2>
                        <label for="array_1">Valores del array: </label>
                        <input type="text" name="array_1" id="array_1" placeholder="1,2,3,4,5">
                        <input type="submit">
                        </form>';
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

    $formulario_6 =
        '<form name="saludo" action="" method="post">
                            <h2 style="color: #468189">Ejercicio 6: Nombre completo</h2>
                            <label for="nombre">Nombre: </label>
                            <input type="text" name="nombre" id="nombre_1">
                            <label for="apellido">Apellido: </label>
                            <input type="text" name="apellido" id="apellido_1">
                            <label for="apellido">Hora: </label>
                            <input type="time" name="hora" id="hora_1">
                            <input type="submit">
                            </form>';
    echo $formulario_6;

    if (isset($_POST['nombre'])&&isset($_POST['apellido'])&&isset($_POST['hora'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $hora = $_POST['hora'];
        echo "Nombre: " . $nombre . "<br>";
        echo "Apellido: " . $apellido . "<br>";
        $saludo = new Saludar($nombre,$apellido);
        echo "Saludo informal: " . $saludo->saludoInformal($hora). "<br>";
        echo "Saludo formal: " . $saludo->saludoFormal($hora). "<br>";
    }*/


?>
