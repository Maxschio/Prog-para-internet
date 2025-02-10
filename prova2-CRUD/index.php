<?php
require_once "PessoaController.php";

$pessoaController = new PessoaController();

//lista as pessoas que estão cadastradas
try {
    $pessoas = $pessoaController->listarPessoa();
} catch (Exception $e) {
    die("Erro ao listar pessoas: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Usuários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center; 
            margin: 10;
            padding: 0;
        }

        h1 {
            margin-top: 40px;
        }

        a {
            text-decoration: apache_lookup_uri;
            font-size: 18px;
        }
        
        .cadastro {
            color: black;
        }

        .excluir {
            color: red;
        }

        .editar {
            color: blue;
        }

        table {
            margin: 50px auto;
            width: 80%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 1px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            text-align: center;
        }

        .actions a {
            margin: 5px 10px;
        }

    </style>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <a class="cadastro" href="cadastro.php">Cadastrar Novo Usuário</a>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($pessoas)): ?>
                <?php foreach ($pessoas as $pessoa): ?>
                    <tr>
                        <td><?= ($pessoa['nome']) ?></td>
                        <td><?= ($pessoa['email']) ?></td>
                        <td class="actions">
                            <a class="editar" href="editar.php?id=<?= ($pessoa['id']) ?>">Editar</a> |
                            <a class="excluir" href="rota.php?action=excluir&id=<?= ($pessoa['id']) ?>" 
                               onclick="return confirm('Tem certeza que deseja excluir este usuário?');">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">Nenhum usuário encontrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>