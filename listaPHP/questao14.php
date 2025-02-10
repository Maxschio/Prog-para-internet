<?php
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$dbname = "nomeBanco"; 

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO usuarios (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Dados</title>
</head>
<body>

<h2>Inserir Dados no Banco de Dados</h2>

<form method="POST" action="">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br><br>
    
    <label for="email">E-mail:</label>
    <input type="email" name="email" required><br><br>
    
    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" required><br><br>
    
    <button type="submit">Inserir</button>
</form>

</body>
</html>
