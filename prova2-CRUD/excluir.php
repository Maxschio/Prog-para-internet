<?php
include_once "PessoaController.php";

//ve se o usuário foi
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //cria uma instancia pra classe
    $pessoaController = new PessoaController();

    //exclui a pessoa que o id foi selecionado
    //se a pessoa for rexcluida volta ao index(listagem)
    if ($pessoaController->excluirPessoa($id)) {
        header("Location: index.php");
    } else {
        echo "Erro ao excluir usuário.";
        echo "<br><a href='index.php'>Voltar</a>";
    }
}
?>
