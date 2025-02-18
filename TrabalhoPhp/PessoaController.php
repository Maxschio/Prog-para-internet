<?php
include_once("Database.php");
include_once("Pessoa_da.php");

if (isset($_POST["acao"])) {
    if ($_POST["acao"] == "cadastrar") {
        //Lógica para cadastrar um novo usuário
        if (isset($_POST["nome"]) && isset($_POST["email"]))//Verifica se os campos foram enviados
        {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            insere_usuario($nome, $email); //envia pro  database
            header("Location: listar.php"); //leva para a tela citada: location
            exit();
        }
    } elseif ($_POST["acao"] == "editar") {
        //Lógica para editar um usuário existente
        if (isset($_POST["id"]) && isset($_POST["nome"]) && isset($_POST["email"])) {
            $id = $_POST["id"]; // guarda as inform em variaveis
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            
            //Chama a função de edição
            editar_usuario($id, $nome, $email);
            header("Location: listar.php");
            exit();
        }
    } 
} else {
    echo "Erro: Ação não especificada.";
}
?>
