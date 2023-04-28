<?php

class Partida
{
    private $puntaje;
    private $vidas;
    public function __construct()
    {
        $this->puntaje = 0;
        $this->vidas = 3;
    }

    /**
     * @return int
     */
    public function mostrarPuntaje()
    {
        return "Puntaje actual: " . $this->puntaje ." - Vidas restantes: ". $this->vidas;
    }

    public function sumarPuntaje($valor){
        $this->puntaje += $valor;
    }
    public function restarVida(){
        $this->vidas--;
        /*if($this->vidas == 0){
            throw new Exception('FIN DE PARTIDA');
        }
        try{
        }catch (Exception $algo){
            echo "Excepcion: "  . $algo->getMessage();
        }*/
    }

}