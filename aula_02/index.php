<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula_02</title>
</head>
<body>
    <h1>Aula 02 - PHP e HTML</h1>
    <?php
        $nome = "Bruno";
        $a = 10;
        $b = 5;
        $soma = $a + $b;
        echo "<p>Bem-vindo $nome</p>"; //sem concatenação
        echo "<p>Bem-vindo " . $nome. "</p>"; //com concatenação 
        echo "<p style='color: red;'>A soma é : $soma </p>";
    ?>
</body>
</html>