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
            <form action="cad-php" method="post">
                <div class="areaNota">
                    <label for="nome">Nome</label>
                    <input class="inputNome" type="text" name="nome" id="idnome" placeholder="Seu primeiro nome...">
        
                    <label for="sobrenome">Sobrenome</label>
                    <input class="inputNome" type="text" name="sobrenome" id="idsobrenome" placeholder="Seu sobrenome...">
                </div>

                <div class="areaNota">
                    <label for="n1">Nota 1</label>
                    <input class="inputNota" type="text" name="n1" id="idn1" placeholder="Sua primeira nota...">
        
                    <label for="n2">Nota 2</label>
                    <input class="inputNota" type="text" name="n2" id="idn2" placeholder="Sua segunda nota...">
        
                    <label for="n3">Nota 3</label>
                    <input class="inputNota" type="text" name="n3" id="idn3" placeholder="Sua terceira nota...">
                </div>
    
                <input class="btnEnviar" type="submit" value="Enviar">
            </form>
        </div>
    </main>
</body>
</html>