<?php

class Fizzbuzz
{

    private $valorInicial;
    private $valorFinal;
    public function __construct($valorInicial, $valorFinal)
    {
        $this->valorInicial = $valorInicial;
        $this->valorFinal = $valorFinal;
    }

    public function imprimirNumeros()
    {
        $impresion = "";
        for($i = $this->valorInicial; $i <= $this->valorFinal; $i++){
            $numero = $i;
            if(($i % 3) == 0 && ($i % 5) == 0){
                $numero = "fizzbuzz";
            } elseif(($i % 3) == 0){
                $numero = "fizz";
            } elseif(($i % 5) == 0){
                $numero = "buzz";
            }
            $impresion .= $numero . ", ";
        }
        return $impresion;
    }
}