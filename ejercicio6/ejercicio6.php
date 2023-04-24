<html>
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 6</title>
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
                                <a href="ejercicio6.php" class="nav-link">Ejercicio 6</a>
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
    $formulario_6 =
        '<div class="content"><form name="saludo" action="" method="post">
                                <h2>Ejercicio 6: Nombre completo</h2>
                                <label for="nombre">Nombre: </label>
                                <input type="text" name="nombre" id="nombre_1">
                                <label for="apellido">Apellido: </label>
                                <input type="text" name="apellido" id="apellido_1">
                                <label for="apellido">Hora: </label>
                                <input type="time" name="hora" id="hora_1">
                                <input type="submit">
                                </form></div>';
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
    }
    include_once ("../footer.html");
    class Saludar{
        private $nombre;
        private $apellido;
        function __construct($nombreDelUser, $apellidoDelUser){
            $this->nombre = $nombreDelUser;
            $this->apellido = $apellidoDelUser;
        }

        function saludoFormal($horario_actual){
            $saludo = "";
            date_default_timezone_set('America/Argentina/Buenos_Aires');
            $horario_actual = strtotime($horario_actual);
            $horario_1 = strtotime(date("05:00:00"));
            $horario_2 = strtotime(date("13:00:00"));
            $horario_3 = strtotime(date("21:00:00"));
            if($horario_1 <= $horario_actual && $horario_2 >= $horario_actual){
                $saludo .= "Buenos días " . $this->nombre . " " . $this->apellido;

            } elseif($horario_2 <= $horario_actual && $horario_3 >= $horario_actual){
                $saludo .= "Buenas tardes " . $this->nombre . " " . $this->apellido;
            } else{
                $saludo .= "Buenas noches " . $this->nombre . " " . $this->apellido;
            }
            return $saludo;
        }

        function saludoInformal($horario_actual){
            $saludo = "";
            date_default_timezone_set('America/Argentina/Buenos_Aires');
            $horario_actual = strtotime($horario_actual);
            $horario_1 = strtotime(date("05:00:00"));
            $horario_2 = strtotime(date("13:00:00"));
            $horario_3 = strtotime(date("21:00:00"));
            if($horario_1 < $horario_actual && $horario_2 > $horario_actual){
                $saludo .= "¡Hola " . $this->nombre . "! Que tengas un buen día";

            } elseif($horario_2 < $horario_actual && $horario_3 > $horario_actual){
                $saludo .= "¡Hola " . $this->nombre . "! Que tengas una buena tarde";
            } else{
                $saludo .= "¡Hola " . $this->nombre . "! Que tengas una buena noche";
            }
            return $saludo;
        }
    }
?>