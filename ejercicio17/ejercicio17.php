<?php
include_once ("Sumar.php");
include_once ("Restar.php");
include_once ("Operando.php");
include_once ("Multiplicar.php");
//No se me ocurrio como presentarlo en el navegador

$resultado = new Multiplicar (new Operando('2'), new Sumar(
    new Restar(new Operando('5'), new Operando('3')),
    new Sumar(new Operando('3'), new Operando('4'))));

echo $resultado->resolverEcuacion();
?>
