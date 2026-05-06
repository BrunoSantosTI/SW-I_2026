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
            echo '<img class="logo" src="img/DuoLogoo.png" alt="Logo">';
            echo '<div class="nav">';
            foreach($_MENU as $key => $value){
                echo '<div class="links-nav"><a class="titulo" href="?page='.$key.'">'.$key.'</a></div>';
            }
            echo '</div>';
        ?>
        <hr>
    </header>

    <body>
        <main>
            <?php
                $_pagina = $_GET['page'] ?? 'Home';

                if(array_key_exists($_pagina, $_MENU)){
                    include $_MENU[$_pagina];

                } else {
                    echo '<h1>Página não encontrada</h1>';
                }
            ?> 
        </main>    
        <footer>
            <h1>Feito por Bruno Ferreira dos Santos</h1>
            <p>Copyright © 2026 - Todos os direitos reservados.</p>
        </footer> 
    </body>
</html>