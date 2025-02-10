<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado IMC</title>
</head>
<body>

    <?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $imc = $peso / ($altura * $altura);

    $imc_formatado = number_format($imc, 2, ',', '.');

    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Peso:</strong> $peso kg</p>";
    echo "<p><strong>Altura:</strong> $altura m</p>";
    echo "<p><strong>IMC:</strong> $imc_formatado</p>";
    ?>

</body>
</html>
