<html>
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 13</title>
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
                <a href="ejercicio13.php" class="nav-link">Ejercicio 13</a>
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
    $form = '<form method="post" action="ejercicio13.php">
        <input type="checkbox" name="entrada[]" id="doritos">
        <label for="doritos">Snacks</label>
        <input type="checkbox" name="plato_principal[]" id="milanesa">
        <label for="milanesa">Milanesa</label>
        <input type="checkbox" name="acompaniamiento[]" id="papas">
        <label for="papas">Papas fritas</label>
        <input type="checkbox" name="postre[]" id="helado">
        <label for="helado">Helado</label>
        <input type="submit" value="enviar">
        </form>';
    echo $form;
    if(isset($_POST)){
        echo "<p>El usuario eligio comer:</p><br>";
        $menu = parse_ini_file("menu.ini");
        if(isset($_POST['entrada'])){
            echo "<p>De entrada:</p>";
            echo "<p>". $menu['entrada'] . "</p>";
        }
        if (isset($_POST['plato_principal'])){
            echo "<p>De plato principal:</p>";
            echo "<p>". $menu['plato_principal'] . "</p>";
        }
        if(isset($_POST['acompaniamiento'])){
            echo "<p>De acompañamiento:</p>";
            echo "<p>". $menu['acompaniamiento'] . "</p>";
        }
        if(isset($_POST['postre'])){
            echo "<p>De postre:</p>";
            echo "<p>". $menu['postre'] . "</p>";
        }
    }
    include_once ("../footer.html");
?>
