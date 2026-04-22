<?php
    $_MENU = [
        'Home' => '<h1>Home</h1> <p>Conteúdo da página inicial</p>',
        'Sobre' => '<h1>Sobre</h1> <p>Conteúdo do sobre</p>',
        'Contato' => '<h1>Contato</h1> <p>Conteúdo do contato</p>',
        'Experiencias' => '<h1>Experiencias</h1> <p>Conteúdo de experiências</p>',
        'Projetos' => '<h1>Projetos</h1> <p>Conteúdo de projetos</p>'
    ];
?>  

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>PHP Test</title>

        <!-- Fonte -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
    </head>

    <header class="header">
        <?php
            echo '<img class="logo" src="img/FaviconMine.png" alt="Logo">';

            foreach($_MENU as $key => $value){
                echo '<a href="?page='.$key.'">'.$key.'</a> | ';
            }
        ?>
    </header>

    <body>    
        <?php
            $_pagina = isset($_GET['page']) ? $_GET['page'] : 'Home';

            if(array_key_exists($_pagina, $_MENU)){
                echo $_MENU[$_pagina];

            } else {
                echo '<h1>Página não encontrada</h1>';
            }
        ?>  
    </body>
</html>