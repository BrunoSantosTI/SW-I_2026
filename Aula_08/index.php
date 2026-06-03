<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de CPF - PHP</title>
</head>
<body>
    <main>
        <div class="container">
            <form method="post">
                <div class="AreaCPF">
                    <label for="CPF">Digite o seu CPF</label>
                    <input class="inputCPF" type="text" name="CPF" id="idCPF" placeholder="01234567890" required>
                </div>

                <input class="btnEnviar" type="submit" value="Enviar" name="btn_enviar">
            </form>

            <?php
                if (isset($_POST['btn_enviar'])) {
                    $_CPF = $_POST["CPF"];
                    $_CPF = preg_replace('/[^0-9]/', '', $_CPF);

                    $_digitos = str_split($_CPF);
                    
                    $_i = 10;
                    $_t = 0;
                    $_soma = 0;

                    while ($_i >= 2) {
                        $_soma += $_i * $_digitos[$_t];
                        $_i --;
                        $_t ++;
                    }
                    print_r($_t);

                    $_dig1 = $_soma % 11;


                    print_r($_dig1);
                }



            ?>  
        </div>
    </main>
</body>
</html>