<?php
    function binomioCuadradoPerfecto_a($a, $b){
        if(!is_numeric($a)|| !is_numeric($b)){
            return "Hay un valor no númerico!";
        }
        $resultado = (($a + $b)**2);
        return $resultado;
    }

    function binomioCuadradoPerfecto_b($a, $b){
        if(!is_numeric($a)|| !is_numeric($b)){
            return "Hay un valor no númerico!";
        }
        $resultado = ($a**2) + 2*$a*$b + ($b**2);
        return $resultado;
    }
?>