<?php
    require_once 'BibliotecaLocal/autoload.php';

    $texto = new texto();
    $calc = new Calcular();
    $leg = new length();
    $rep = new replace();

    echo $calc->somar(10,20);
    echo "<br><br>";
    echo $texto->maiusculo("etec mcm");
    echo "<br><br>";
    echo $calc->multiplicar(10,20);
    echo "<br><br>";
    echo $leg->contar("123456789");
    echo "<br><br>";
echo $rep->repor("R$ 1.234,56 ABC");
?>