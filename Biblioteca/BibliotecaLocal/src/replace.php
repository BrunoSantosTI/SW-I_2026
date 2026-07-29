<?php
    class Replace{
        public function repor($valor){
            $numeros = preg_replace('/[^0-9]/', '', $valor);
            return $numeros;
        }
    }
?>