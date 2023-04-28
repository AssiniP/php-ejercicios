<?php

class Operando
{
    private $valor;
    public function __construct($int)
    {
        $this->valor = $int;
    }

    public function resolverEcuacion()
    {
        return $this->valor;
    }
}