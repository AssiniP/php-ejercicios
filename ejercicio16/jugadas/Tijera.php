<?php

class Tijera{
    private $jugador;
    public function __construct($nombreJugador){
        $this->jugador = $nombreJugador;
    }
    function competirContra($otro){
        return $otro->teCompiteTijera($this);
    }
    function teCompiteTijera($otro){
        return "empate";
    }
    function teCompitePiedra($otro){
        return $otro->ganaste();
    }
    function teCompitePapel($otro){
        return $this->ganaste();
    }
    private function ganaste(){
        return $this->jugador;
    }
}
?>