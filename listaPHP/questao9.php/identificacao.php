<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nome e email</title>
</head>
<body>

    <h2>Informe seu Nome e Email</h2>
    <form method="GET" action="dados.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required><br><br>

        <button type="submit">AVANÇAR</button>
    </form>

</body>
</html>
