<?php
include_once "PessoaController.php";

//
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'] ?? null;
    $email = $_POST['email'] ?? null;
    $senha = $_POST['senha'] ?? null;

    if (!$nome || !$email || !$senha) {
        echo "Erro: Todos os campos são obrigatórios!";
        echo "<br><a href='index.php'>Voltar</a>";
        exit;
    }

    $pessoaController = new PessoaController();
    if ($pessoaController->cadastrarPessoa($nome, $email, $senha)) {
        header("Location: index.php"); // Redireciona para a listagem
        exit;
    } else {
        echo "Erro ao cadastrar usuário!";
        echo "<br><a href='index.php'>Voltar</a>";
    }
}
?>
