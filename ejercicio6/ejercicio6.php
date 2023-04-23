<?php
    class Saludar{
        private $nombre;
        private $apellido;
        function __construct($nombreDelUser, $apellidoDelUser){
            $this->nombre = $nombreDelUser;
            $this->apellido = $apellidoDelUser;
        }

        function saludoFormal($horario_actual){
            $saludo = "";
            date_default_timezone_set('America/Argentina/Buenos_Aires');
            $horario_actual = strtotime($horario_actual);
            $horario_1 = strtotime(date("05:00:00"));
            $horario_2 = strtotime(date("13:00:00"));
            $horario_3 = strtotime(date("21:00:00"));
            if($horario_1 <= $horario_actual && $horario_2 >= $horario_actual){
                $saludo .= "Buenos días " . $this->nombre . " " . $this->apellido;

            } elseif($horario_2 <= $horario_actual && $horario_3 >= $horario_actual){
                $saludo .= "Buenas tardes " . $this->nombre . " " . $this->apellido;
            } else{
                $saludo .= "Buenas noches " . $this->nombre . " " . $this->apellido;
            }
            return $saludo;
        }

        function saludoInformal($horario_actual){
            $saludo = "";
            date_default_timezone_set('America/Argentina/Buenos_Aires');
            $horario_actual = strtotime($horario_actual);
            $horario_1 = strtotime(date("05:00:00"));
            $horario_2 = strtotime(date("13:00:00"));
            $horario_3 = strtotime(date("21:00:00"));
            if($horario_1 < $horario_actual && $horario_2 > $horario_actual){
                $saludo .= "¡Hola " . $this->nombre . "! Que tengas un buen día";

            } elseif($horario_2 < $horario_actual && $horario_3 > $horario_actual){
                $saludo .= "¡Hola " . $this->nombre . "! Que tengas una buena tarde";
            } else{
                $saludo .= "¡Hola " . $this->nombre . "! Que tengas una buena noche";
            }
            return $saludo;
        }
    }
?>