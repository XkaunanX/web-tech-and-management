<?php

    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];
    $operacion = $_POST["operacion"];

    if ( is_numeric($num1) && is_numeric($num2) ) {

        if ( $operacion == 'suma' ) {
            $suma = $num1 + $num2;
            echo "La operacion $operacion entre $num1 y $num2 es igual a $suma";
        }elseif ( $operacion == 'resta') {
            $resta = $num1 - $num2;
            echo "La operacion $operacion entre $num1 y $num2 es igual a $resta";
        }elseif ( $operacion == 'multiplicacion') {
            $multi = $num1 * $num2;
            echo "La operacion $operacion entre $num1 y $num2 es igual a $multi";
        }elseif ( $operacion == 'division' && $num2 != 0 ) {
            $division = $num1 / $num2;
            echo "La operacion $operacion entre $num1 y $num2 es igual a $division";
        }

    } else {
        echo "Los campos no son numeros o estan vacios.";
    }

?>
