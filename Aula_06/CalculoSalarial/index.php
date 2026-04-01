<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Salarial PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="container">
            <form method="post">

                <h1 class="titulo">Cálculo Salarial</h1>

                <div class="areaInput">
                    <div class="labelNome">
                        <label for="nome">Nome</label>
                        <input class="inputNome" type="text" name="nome" id="idnome" placeholder="Seu nome..." required>
                    </div>

                    <div class="labelSB">
                        <label for="SB">Defina o Salário Bruto</label>
                        <input class="inputSB" type="number" name="SB" id="idSB" placeholder="0000.00" required>
                    </div>

                    <div class="labelFaltas">
                        <label for="faltas">Faltas</label>
                        <input class="inputFaltas" type="number" name="faltas" id="idfaltas" placeholder="0" required>
                    </div>
                </div>

                <input class="btnEnviar" type="submit" value="Enviar" name="btn_enviar">
            </form>
            <?php
                if (isset($_POST['btn_enviar'])) {
                    $_SB = $_POST["SB"];
                    $_nome = $_POST["nome"];
                    $_faltas = $_POST["faltas"];

                    $_SL = 0;
                    $_VT = $_SB * 0.06;
                    if ($_SB <= 1621.00) {
                        $_SL = $_SB - ($_SB * 0.075);

                    } elseif ($_SB >= 1621.01 && $_SB <= 2902.84) {
                        $_SL = $_SB - ($_SB * 0.09);
                        $_SL = $_SL -($_faltas * ($_SB / 30));
                    } elseif ($_SB >= 2902.85 && $_SB <= 4354.27) {
                        $_SL = $_SB - ($_SB * 0.12);
                        $_SL = $_SL -($_faltas * ($_SB / 30));
                    } elseif ($_SB >= 4354.28 && $_SB <= 8475.55) {
                        $_SL = $_SB - ($_SB * 0.14);
                        $_SL = $_SL -($_faltas * ($_SB / 30));
                    } else {
                        $_SL = $_SB - ($_SB * 0.14);
                        $_SL = $_SL -($_faltas * ($_SB / 30));
                    }

                    $_SF = $_SL - $_VT;
                    echo "<h2>Olá, " . $_nome . "!</h2>";
                    echo "<h2>Salário Final: " . $_SF . "</h2>";
                }      
                ?>

        </div>
    </main>
    
</body>
</html> 