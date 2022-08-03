<?php

    class calculadora{

        //FUNCIÓN PARA SUMAR DOS NUMEROS
        function sumar($numero1,$numero2){

            $suma = $numero1 + $numero2;
            $operacion = "Suma";

            mostrarResultado($operacion,$suma);

        }

    }