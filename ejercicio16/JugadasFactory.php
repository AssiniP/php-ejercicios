<?php
    include_once ("jugadas/Papel.php");
    include_once ("jugadas/Tijera.php");
    include_once ("jugadas/Piedra.php");

    class JugadasFactory{
    public function crear($jugada, $jugador){
        $jugada = strtolower($jugada);
        switch ($jugada){
            case "papel":
                return new Papel($jugador);
            case "tijera":
                return new Tijera($jugador);
            case "piedra":
                return new Piedra($jugador);
        }
    }
    }
?>
