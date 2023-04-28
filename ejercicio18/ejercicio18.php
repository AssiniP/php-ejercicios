<?php
include_once ("Pacman.php");
include_once ("Partida.php");
include_once ("Pildora.php");
include_once ("Fantasma.php");
include_once ("FantasmaComestible.php");
//No se me ocurrio como presentarlo en el navegador

$partida = new Partida();
$pacman = new Pacman($partida);
$pildora = new Pildora();
$fantasma = new Fantasma();
$fantasmaComestible = new FantasmaComestible();

$pacman->chocaContra($fantasmaComestible);
echo $pacman->mostrarPuntaje() . "</br>";

$pacman->chocaContra($fantasmaComestible);
$pacman->chocaContra($fantasmaComestible);
echo $pacman->mostrarPuntaje() . "</br>";

$pacman->chocaContra($pildora);
echo $pacman->mostrarPuntaje() . "</br>";

$pacman->chocaContra($pildora);
$pacman->chocaContra($pildora);
echo $pacman->mostrarPuntaje() . "</br>";

$pacman->chocaContra($fantasma);
echo $pacman->mostrarPuntaje() . "</br>";
$pacman->chocaContra($fantasma);
$pacman->chocaContra($fantasma);

echo $pacman->mostrarPuntaje() . "</br>";

$partida->mostrarPuntaje();
?>
