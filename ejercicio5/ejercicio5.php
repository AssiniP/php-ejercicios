<?php
    function sumatoria_a($array){
        $largo = count($array);

        foreach($array as $value){
            if(!is_numeric($value)){
                return "Hay valores no númericos en el array!";
            }
        }

        $resultado = 0;
        for($i = 0; $i < $largo; $i++){
            $resultado += $array[$i];
        }
        return $resultado;
    }
    function sumatoria_b($array){

        foreach($array as $value){
            if(!is_numeric($value)){
                return "Hay valores no númericos en el array!";
            }
        }

        $resultado = 0;
        foreach($array as $value){
            $resultado += $value;
        }
        return $resultado;
    }

    function sumatoria_c($array){

        foreach($array as $value){
            if(!is_numeric($value)){
                return "Hay valores no númericos en el array!";
            }
        }

        $resultado = 0;
        $i = 0;
        while ($i < count($array)){
            $resultado += $array[$i];
            $i++;
        }
        return $resultado;
    }
?>