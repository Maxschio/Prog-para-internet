<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervalo de Números</title>
    <style>
        .numero {
            color: blue; 
            margin-right: 10px; 
        }
    </style>
</head>
<body>
    <!--Crie um site em PHP onde o usuário informe dois números para definir um intervalo. 
    Exiba cada número dentro de uma tag <span> com uma classe CSS especificada por você.-->

    <form method="POST" action="">
        <label for="inicio">Número Inicial: </label>
        <input type="number" name="inicio" id="inicio" required><br><br>

        <label for="fim">Número Final: </label>
        <input type="number" name="fim" id="fim" required><br><br>

        <button type="submit">Exibir Intervalo</button>
    </form>

    <?php
    if (isset($_POST['inicio']) && isset($_POST['fim'])) {
        $inicio = $_POST['inicio']; 
        $fim = $_POST['fim'];  

        for ($i = $inicio; $i <= $fim; $i++) {
            echo "<span class='numero'>$i</span>"; 
        }
    }
    ?>

</body>
</html>
