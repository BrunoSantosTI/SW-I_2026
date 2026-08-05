<?php
    require_once 'BibliotecaLocal/autoload.php';

    $imc = new calcularIMC();
    $val = new validarCPF();

    echo $imc->calcularIMC(75, 1.80);
    echo "<br><br>";
    echo $val->validarCPF("529.982.247-25");
?>