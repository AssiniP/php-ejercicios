<?php

class FantasmaComestible
{

    public function __construct()
    {
    }

    public function chocasteContraPacman($partida){
        $partida->sumarPuntaje(100);
    }
}