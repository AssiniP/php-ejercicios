<?php

class Multiplicar
{
    private $operando1;
    private $operando2;
    public function __construct($operando1, $operando2)
    {
        $this->operando1 = $operando1;
        $this->operando2 = $operando2;
    }

    public function resolverEcuacion()
    {
        if($this->operando2->resolverEcuacion() != 0){
            return $this->operando1->resolverEcuacion() / $this->operando2->resolverEcuacion();
        }
        return "infinito";
    }
}