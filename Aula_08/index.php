<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Validação de CPF</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2>Validação de CPF</h2>

        <form method="post">
            <label>Nome:</label>
            <input type="text" name="nome" required>

            <label>CPF:</label>
            <input type="text" name="cpf" required>

            <button type="submit" name="btn_enviar">Validar CPF</button>
        </form>
    </div>

    <?php

        if (isset($_POST['btn_enviar'])) {

            $nome = $_POST['nome'];
            $cpf = preg_replace('/[^0-9]/', '', $_POST['cpf']);

            function validarCPF($cpf)
            {
                if (strlen($cpf) != 11) {
                    return false;
                }

                if (preg_match('/(\d)\1{10}/', $cpf)) {
                    return false;
                }

                for ($t = 9; $t < 11; $t++) {
                    $soma = 0;

                    for ($c = 0; $c < $t; $c++) {
                        $soma += $cpf[$c] * (($t + 1) - $c);
                    }

                    $digito = ((10 * $soma) % 11) % 10;

                    if ($cpf[$c] != $digito) {
                        return false;
                    }
                }

                return true;
            }

            echo "<h2>Resultado</h2>";
            echo "<p>Nome: $nome</p>";

            if (validarCPF($cpf)) {
                echo "<p style='color:green; margin: 0 auto;'>CPF VÁLIDO</p>";
            } else {
                echo "<p style='color:red; margin: 0 auto;'>CPF INVÁLIDO</p>";
            }
        }
    ?>
</body>
</html>