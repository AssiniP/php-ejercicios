<html>
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 19</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
</html>
<?php
    /*Buenas profe o profes
    El contexto de este código es que quería hacer los ejercicios de TDD pero me dio vagueza descargar el PHPUnit

    En el momento pensé que hacer esto sería la mejor solución del mundo y me ahorraría banda de tiempo, pero no,
    pase más tiempo haciendo que los test case funcionen más que haciendo los tests.
    Decidi dejarlo porque me parecio divertido y tecnicamente fue con TDD.
    También por lo mismo no hice la kata de los bolos.
    Debería haber descargado el PHPUnit*/

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
                    <a href="ejercicio19.php" class="nav-link">Ejercicio 19</a>
                </ul>
                <ul class="nav-child">
                    <a href="../ejercicio20/ejercicio20.php" class="nav-link">Ejercicio 20</a>
                </ul>
                </li>';
    echo $navigation;
    include_once ("Fizzbuzz.php");
    $test = new fizzBuzzKata();

    echo "<h3>Que el 3 muestre fizz en vez del numero</h3>";
    $test->testQueElTresMuestreFizzEnVezDelNumero();
    echo "<h3>Que el 5 muestre buzz en vez del numero</h3>";
    $test->testQueElCincoMuestreBuzzEnVezDelNumero();
    echo "<h3>Que el 15 muestre fizzbuzz en vez del numero</h3>";
    $test->testQueElQuinceMuestreFizzbuzzEnVezDelNumero();

    echo "<h3>Que los multiplos de 3 muestren fizz en vez del numero</h3>";
    $test->testQueLosMultiplosDeTresMuestrenFizzEnVezDelNumero();
    echo "<h3>Que los multiplos de 5 muestren buzz en vez del numero</h3>";
    $test->testQueLosMultiplosDeCincoMuestrenBuzzEnVezDelNumero();
    echo "<h3>Que los multiplos de 3 y 5 muestren fizzbuzz en vez del numero</h3>";
    $test->testQueLosMultiplosDeTresYCincoMuestrenFizzBuzzEnVezDelNumero();

    $fizzbuzz = new Fizzbuzz(1, 100);
    echo "<h3>FIZZBUZZ COMPLETO</h3>";
    echo "<br>" . $fizzbuzz->imprimirNumeros();
    include_once ("../footer.html");

    class fizzBuzzKata{
        public function testQueElTresMuestreFizzEnVezDelNumero(){
            $valorInicial = 3;
            $valorFinal = 3;
            $fizzbuzz = new Fizzbuzz($valorInicial, $valorFinal);
            $resultado = $fizzbuzz->imprimirNumeros();
            if($resultado == "fizz, "){
                echo "paso!";
            }
        }
        public function testQueElCincoMuestreBuzzEnVezDelNumero(){
            $valorInicial = 5;
            $valorFinal = 5;
            $fizzbuzz = new Fizzbuzz($valorInicial, $valorFinal);
            $resultado = $fizzbuzz->imprimirNumeros();
            if($resultado == "buzz, "){
                echo "paso!";
            }
        }
        public function testQueElQuinceMuestreFizzbuzzEnVezDelNumero(){
            $valorInicial = 15;
            $valorFinal = 15;
            $fizzbuzz = new Fizzbuzz($valorInicial, $valorFinal);
            $resultado = $fizzbuzz->imprimirNumeros();
            if($resultado == "fizzbuzz, "){
                echo "paso!";
            }else{
                echo "no paso";
                echo $resultado;
            }}

        public function testQueLosMultiplosDeTresMuestrenFizzEnVezDelNumero(){
            $valorInicial = 3;
            $valorFinal = 9;
            $fizzbuzz = new Fizzbuzz($valorInicial, $valorFinal);
            $resultado = $fizzbuzz->imprimirNumeros();
            if($resultado == "fizz, 4, buzz, fizz, 7, 8, fizz, "){
                echo "paso!";
            }else{
                echo "no paso";
                echo $resultado;
            }
        }
        public function testQueLosMultiplosDeCincoMuestrenBuzzEnVezDelNumero(){
            $valorInicial = 5;
            $valorFinal = 10;
            $fizzbuzz = new Fizzbuzz($valorInicial, $valorFinal);
            $resultado = $fizzbuzz->imprimirNumeros();
            if($resultado == "buzz, fizz, 7, 8, fizz, buzz, "){
                echo "paso!";
            }else{
                echo "no paso </br>";
                echo $resultado;
            }
        }
        public function testQueLosMultiplosDeTresYCincoMuestrenFizzBuzzEnVezDelNumero(){
            $valorInicial = 29;
            $valorFinal = 31;
            $fizzbuzz = new Fizzbuzz($valorInicial, $valorFinal);
            $resultado = $fizzbuzz->imprimirNumeros();
            if($resultado == "29, fizzbuzz, 31, "){
                echo "paso!";
            }else{
                echo "no paso </br>";
                echo $resultado;
            }
        }

    }
?>
