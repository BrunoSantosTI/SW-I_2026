<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="container">
            <form method="post">
                <h1 class="titulo">Cálculo de Média</h1>
                <div class="areaNome">
                    <div class="labelNome">
                        <label for="nome">Nome</label>
                        <input class="inputNome" type="text" name="nome" id="idnome" placeholder="Seu primeiro nome...">
                    </div>

                    <div class="labelNome">
                        <label for="sobrenome">Sobrenome</label>
                        <input class="inputNome" type="text" name="sobrenome" id="idsobrenome" placeholder="Seu sobrenome...">
                    </div>  
                </div>

                <div class="areaNota">
                    <div class="labelNota">
                        <label for="n1">Nota 1</label>
                        <input class="inputNota" type="text" name="n1" id="idn1" placeholder="Sua primeira nota...">
                    </div>

                    <div class="labelNota">
                        <label for="n2">Nota 2</label>
                        <input class="inputNota" type="text" name="n2" id="idn2" placeholder="Sua segunda nota...">
                    </div>

                    <div class="labelNota">
                        <label for="n3">Nota 3</label>
                        <input class="inputNota" type="text" name="n3" id="idn3" placeholder="Sua terceira nota...">
                    </div>                    
                </div>
    
                <input class="btnEnviar" type="submit" value="Enviar">
            </form>
            <?php
                $_nome = $_POST["nome"];
                $_sobrenome = $_POST["sobrenome"];
                $_n1 = $_POST["n1"];
                $_n2 = $_POST["n2"];
                $_n3 = $_POST["n3"];
                $_media= (($_n1+$_n2+$_n3)/3);
                echo "<p>Seja muito bem-vindo(a), $_nome $_sobrenome</p> <br> <p>Sua média final ficou em: $_media </p>";
            ?>

        </div>
    </main>
</body>
</html>