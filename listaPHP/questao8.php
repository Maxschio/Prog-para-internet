<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações com String</title>
</head>
<body>

    <h2>Informe uma String:</h2>

    <form method="POST" action="">
        <label for="texto">String: </label>
        <input type="text" name="texto" id="texto" required /><br/>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if (isset($_POST['texto'])) {
        $texto = $_POST['texto'];

        $tamanho = strlen($texto);
        echo "<p><strong>Tamanho da String:</strong> $tamanho</p>";

        $textoInvertido = strrev($texto);
        if (strtolower($texto) == strtolower($textoInvertido)) {
            echo "<p><strong>A string é um palíndromo!</strong></p>";
        } else {
            echo "<p><strong>A string não é um palíndromo.</strong></p>";
        }

        $vogais = 0;
        $consoantes = 0;
        $textoSemEspacos = preg_replace("/\s+/", "", $texto);

        for ($i = 0; $i < strlen($textoSemEspacos); $i++) {
            $char = strtolower($textoSemEspacos[$i]); 
            if (in_array($char, ['a', 'e', 'i', 'o', 'u'])) {
                $vogais++;
            } elseif (preg_match("/[a-z]/", $char)) {
                $consoantes++;
            }
        }

        echo "<p><strong>Quantidade de Vogais:</strong> $vogais</p>";
        echo "<p><strong>Quantidade de Consoantes:</strong> $consoantes</p>";
    }
    ?>

</body>
</html>
