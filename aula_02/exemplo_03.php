<?php
    $a = 10;
    $b = "5";
    echo "Soma: " . ($a + $b);

    //teste para ver se o resultado é realmete um número inteiro
    echo "<br>";
    $soma = $a + $b;
    var_dump($soma);

    //Mais exemplos práticos
    $c = 3;
    $d = 7;
    echo "<br>";
    echo "Soma: " . ($c % $d);

    echo "<hr>";

    //exemplo de operadores lógicos
    $x = true;
    $y = false;

    $result = $x && $y;

    echo "Resultado: " . $result;
?>