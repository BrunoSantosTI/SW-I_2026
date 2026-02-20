<?php
    $nome = "Bruno";
    $idade = 15;
    $altura = 1.80;
    $status = false;

    //Exibindo valores da variável
    echo "O nome é: $nome"; //1ºForma
    echo " <br>";
    echo "O nome é: " . $nome; //2ºForma
    echo " <br>";

    echo 'O nome é: $nome'; //teste erro
    echo '<br>';
    echo 'O nome é: ' . $nome; //teste erro
    echo ' <br>';

    echo $idade; //apenas o valor da variável
    echo "<br>";
    
    //Verificar tipo e valor de uma variável
    var_dump($altura); //depuração
    echo "<br>";
    print_r($altura);

    //laço de repetição de exemplo
    for ($i=1; $i < 6; $i++){
        echo $i . "<br>";
    }
    
    //curiosidade do php a respito do boleanos
    echo "O status é: $status";

    //Operadores aritméticos
    echo "+,-,/,%";

    //Operadores relacionais
    echo "==, !=, >, <, >=, <=";

    //Operadores lógicos
    echo "&&, ||, !";
?>