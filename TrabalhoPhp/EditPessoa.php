<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pessoa</title>
</head>
<body>
    <?php
        include_once("Database.php");
        include_once("Pessoa_da.php");
        if (isset($_GET["pessoa_id"])) //Pega o id da pessoa
        {
            $id = $_GET["pessoa_id"];
            $pessoa = getUsuario($id);
        }
    ?> 
    <fieldset> <!-- campo onde mostra os campos editáveis e faz alterações -->
    <form action="PessoaController.php" method="post"> 
    <input type="text" name="id" id="id" value="<?php echo $pessoa['id']; ?>" hidden>
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="<?php echo $pessoa['nome']; ?>">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="<?php echo $pessoa['email']; ?>">
    <input type="text" name="acao" value="editar" hidden> 
    <input type="submit" value="Salvar Alterações">
</form>
    </fieldset>
</body>
</html>
