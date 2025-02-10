<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peso e Altura</title>
</head>
<body>

    <h2>Informe seu Peso e Altura</h2>
    <form method="POST" action="calculo.php">
        <input type="hidden" name="nome" value="<?php echo $_GET['nome']; ?>">
        <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">

        <label for="peso">Peso (kg):</label>
        <input type="number" step="0.1" name="peso" id="peso" required><br><br>

        <label for="altura">Altura (m):</label>
        <input type="number" step="0.01" name="altura" id="altura" required><br><br>

        <button type="submit">CALCULAR IMC</button>
    </form>

</body>
</html>
