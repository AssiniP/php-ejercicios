<?php
    function semaforo_a($color){
        $color = strtolower($color);
        $respuesta = "";
        if ($color == "rojo"){
            $respuesta = "Frene";
        } elseif ($color == "amarillo"){
            $respuesta = "Precaución";
        } elseif ($color == "verde"){
            $respuesta = "Avance";
        } else{
            $respuesta = "Estado desconocido";
        }
        return $respuesta;
    }
    function semaforo_b($color){
        $color = strtolower($color);
        $respuesta = "";
        $color == "rojo" ? $respuesta = "Frene" : ($color == "amarillo" ? $respuesta = "Precaución":
            ($color == "verde" ? $respuesta = "Avance" : $respuesta = "Estado desconocido"));
        return $respuesta;
    }

    function semaforo_c($color){
        $color = strtolower($color);
        $respuesta = "";
        switch ($color){
            default:
                $respuesta = "Estado desconocido";
                break;
            case "amarillo":
                $respuesta = "Precaución";
                break;
            case "verde":
                $respuesta = "Avance";
                break;
            case "rojo":
                $respuesta = "Frene";
                break;
        }
        return $respuesta;
    }
?>