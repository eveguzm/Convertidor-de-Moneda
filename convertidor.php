<?php

    class convertidorDeMoneda{
        private $valorDolar; //valorDolar

        public function __construct($valorDolar){
            $this->valorDolar = $valorDolar;
        }
        
        public function calcularMontoEnDolares($montoEnBolivares){
            return $montoEnBolivares/$this->valorDolar;

        }

    }

    if ($_SERVER ["REQUEST_METHOD"] == "POST"){

        $valorDolar = $_POST["valorDolar"];
        $montoEnBolivares = $_POST["montoEnBolivares"];

        $convertidor = new convertidorDeMoneda($valorDolar);
        $montoEnDolares = $convertidor->calcularMontoEnDolares($montoEnBolivares);

        echo "El monto en dolares es: $" . number_format($montoEnDolares,2);



    }