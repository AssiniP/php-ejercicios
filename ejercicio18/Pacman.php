<?php

class Pacman
{

    private $partida;

    public function __construct($puntaje)
    {
        $this->partida = $puntaje;
        $this->vidas = 3;
    }

    public function chocaContra($otro)
    {
        return $otro->chocasteContraPacman($this->partida);
    }

    public function mostrarPuntaje()
    {
        return $this->partida->mostrarPuntaje();
    }


}