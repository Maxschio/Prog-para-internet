<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificar Triângulo</title>
</head>
<body>
<!--Crie um script PHP que leia três números representando os possíveis lados de um 
triângulo e classifique o triângulo de acordo com os tamanhos dos lados.-->
<h2>Informe os três lados do triângulo:</h2>

<form method="POST" action="">
    <label for="lado1">Lado 1:</label>
    <input type="number" name="lado1" required><br><br>
    
    <label for="lado2">Lado 2:</label>
    <input type="number" name="lado2" required><br><br>
    
    <label for="lado3">Lado 3:</label>
    <input type="number" name="lado3" required><br><br>
    
    <button type="submit">Classificar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];

    if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
        if ($lado1 == $lado2 && $lado2 == $lado3) {
            echo "<p>O triângulo é Equilátero (todos os lados são iguais).</p>";
        } elseif ($lado1 == $lado2 || $lado2 == $lado3 || $lado1 == $lado3) {
            echo "<p>O triângulo é Isósceles (dois lados são iguais).</p>";
        } else {
            echo "<p>O triângulo é Escaleno (todos os lados são diferentes).</p>";
        }
    } else {
        echo "<p>Os valores informados não podem formar um triângulo.</p>";
    }
}
?>

</body>
</html>
