<?php
    $_MENU = [
        'Home' => 'home.php',
        'Sobre' => 'sobre.php',
        'Contato' => 'contato.php',
        'Experiencias' => 'experiencias.php',
        'Projetos' => 'projetos.php'
    ];
?>  

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>PHP Test</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@580&display=swap" rel="stylesheet">
    </head>

    <header class="header">
        <?php
            echo '<img class="logo" src="img/Duolingo-Logo.png" alt="Logo">';

            foreach($_MENU as $key => $value){
                echo '<a class="titulo" href="?page='.$key.'">'.$key.'</a> | ';
            }
        ?>
    </header>

    <body>    
        <?php
            $_pagina = $_GET['page'] ?? 'Home';

            if(array_key_exists($_pagina, $_MENU)){
                include $_MENU[$_pagina];

            } else {
                echo '<h1>Página não encontrada</h1>';
            }
        ?> 
        <footer>Feito por Bruno Ferreira dos Santos</footer> 
    </body>
</html>