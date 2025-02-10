<?php
session_start(); 

$usuario_correto = 'admin';
$senha_correta = '1234';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario == $usuario_correto && $senha == $senha_correta) {
        $_SESSION['logado'] = true; // Inicia a sessão
        header('Location: tela_principal.php'); // Redireciona para a tela principal
        exit();
    } else {
        echo "Usuário ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="POST" action="">
    <label for="usuario">Usuário:</label>
    <input type="text" name="usuario" required><br><br>
    
    <label for="senha">Senha:</label>
    <input type="password" name="senha" required><br><br>
    
    <button type="submit">Entrar</button>
</form>

</body>
</html>
