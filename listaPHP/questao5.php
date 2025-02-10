<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--Crie um site em PHP que faça o sorteio de um número aleatório no intervalo 
informado pelo usuário por meio de um formulário HTML.-->
<form method="POST" ACTION="">
    <label for="nmin">Número Mínimo: </label>
    <input name="nmin" type="number" value="" /><br/>
    
    <label for="nmax">Número Máximo: </label>
    <input name="nmax" type="number" value="" /><br/>

    <button type="submit">Sortear</button>
</form>

<?php
function sortear($min, $max) {
    $min = (int)$min;
    $max = (int)$max;

    return rand($min, $max);
}

if (isset($_POST['nmin']) && isset($_POST['nmax'])) {
    $min = $_POST['nmin'];
    $max = $_POST['nmax'];
    
    $numeroSorteado = sortear($min, $max);
    echo "<h2>O número sorteado é: $numeroSorteado</h2>";
}
?>

</body>
</html>
