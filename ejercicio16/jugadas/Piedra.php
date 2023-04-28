<?php

class Piedra
{
    /**
     * @var mixed
     */
    private $jugador;
    public function __construct($nombreJugador){
        $this->jugador = $nombreJugador;
    }
    function competirContra($otro){
        return $otro->teCompitePiedra($this);
    }
    function teCompiteTijera($otro){
        return $this->ganaste();
    }
    function teCompitePiedra($otro){
        return "empate";
    }
    function teCompitePapel($otro){
        return $otro->ganaste();
    }
    private function ganaste(){
        return $this->jugador;
    }
}