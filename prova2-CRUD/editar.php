<?php
//pega as coisas da classe 
require_once "PessoaController.php";

//pega o usuário que foi para editar
if (!isset($_GET['id'])) {
    die("ID do usuário não foi fornecido!");
}

$id = (int) $_GET['id'];

$pessoaController = new PessoaController();

//se o usuári existe, busca a pessoa por id
try {
    $pessoa = $pessoaController->buscarPessoaPorId($id);
    if (!$pessoa) {
        die("Usuário não encontrado!");
    }
} 

//pega os dados enviados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? null;
    $email = $_POST['email'] ?? null;
    $senha = $_POST['senha'] ?? null;

    if ($nome && $email) {
        $result = $pessoaController->editarPessoa($id, $nome, $email, $senha);
        if ($result) {
            //vai pro index caso esteja certo
            header("Location: index.php");
            exit;
        } else {
            echo "Erro ao atualizar o usuário.";
        }
    } else {
        echo "Preencha todos os campos obrigatórios!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            text-align: center;
        }
    </style>
</head>
<body>
<form action="rota.php?action=editar" method="post">
    <input type="hidden" name="id" value="<?= htmlspecialchars($pessoa['id']) ?>">
    <h1>Editar Usuário</h1>
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($pessoa['nome']) ?>" required>
    <br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?= htmlspecialchars($pessoa['email']) ?>" required>
    <br><br>
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" placeholder="Nova senha (opcional)">
    <br><br>
    <button type="submit">Salvar</button>
    <a href="index.php">Cancelar</a>
</form>
</body>
</html>