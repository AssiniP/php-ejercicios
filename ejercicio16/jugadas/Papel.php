<?php

class Papel
{
    /**
     * @var mixed
     */
    private $jugador;
    public function __construct($nombreJugador){
        $this->jugador = $nombreJugador;
    }
    function competirContra($otro){
        return $otro->teCompitePapel($this);
    }
    function teCompiteTijera($otro){
        return $otro->ganaste();
    }
    function teCompitePiedra($otro){
        return $this->ganaste();
    }
    function teCompitePapel($otro){
        return "empate";
    }
    private function ganaste(){
        return $this->jugador;
    }
}