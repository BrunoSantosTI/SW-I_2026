<?php
require_once __DIR__ . '/BibliotecaLocal/autoload.php';

$imcCalculator = new calcularIMC();
$cpfValidator = new validarCPF();

$cpf = $_POST['cpf'] ?? '';
$cpfValido = null;
$peso = $_POST['peso'] ?? '';
$altura = $_POST['altura'] ?? '';
$imcResultado = null;
$imcMensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['validar_cpf'])) {
        $cpfValido = $cpfValidator->validarCPF($cpf);
    }

    if (isset($_POST['calcular_imc'])) {
        $pesoNum = floatval(str_replace(',', '.', $peso));
        $alturaNum = floatval(str_replace(',', '.', $altura));

        if ($pesoNum <= 0 || $alturaNum <= 0) {
            $imcMensagem = 'Informe peso e altura válidos.';
        } else {
            $imcResultado = $imcCalculator->calcularIMC($pesoNum, $alturaNum);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Validação de CPF e Cálculo de IMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Validação de CPF e Cálculo de IMC</h1>

        <section class="form-card">
            <h2>Validar CPF</h2>
            <form method="post">
                <div class="field">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" value="<?php echo htmlspecialchars($cpf); ?>" placeholder="000.000.000-00" required>
                </div>
                <button type="submit" name="validar_cpf">Verificar CPF</button>
            </form>

            <?php if ($cpfValido !== null): ?>
                <div class="result">
                    <p><span class="label">CPF</span> <?php echo htmlspecialchars($cpf ?: 'Não informado'); ?></p>
                    <p><span class="label">Status</span> <?php echo $cpfValido ? 'CPF válido' : 'CPF inválido'; ?></p>
                </div>
            <?php endif; ?>
        </section>

        <section class="form-card">
            <h2>Calcular IMC</h2>
            <form method="post">
                <div class="field">
                    <label for="peso">Peso (kg)</label>
                    <input type="number" id="peso" name="peso" value="<?php echo htmlspecialchars($peso); ?>" step="0.1" min="0" placeholder="ex: 70.5" required>
                </div>
                <div class="field">
                    <label for="altura">Altura (m)</label>
                    <input type="number" id="altura" name="altura" value="<?php echo htmlspecialchars($altura); ?>" step="0.01" min="0" placeholder="ex: 1.75" required>
                </div>
                <button type="submit" name="calcular_imc">Calcular IMC</button>
            </form>

            <?php if ($imcResultado !== null): ?>
                <div class="result">
                    <p><span class="label">IMC</span> <?php echo $imcResultado['imc']; ?></p>
                    <p><span class="label">Classificação</span> <?php echo $imcResultado['classificacao']; ?></p>
                </div>
            <?php elseif ($imcMensagem): ?>
                <div class="result">
                    <p><?php echo htmlspecialchars($imcMensagem); ?></p>
                </div>
            <?php endif; ?>
        </section>
    </div>
</body>
</html>