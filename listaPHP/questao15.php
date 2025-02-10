<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostrar dados</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Dados</h2>

<table>
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
    </tr>

    <?php
    $dados = [
        ['nome' => 'Isa', 'email' => 'isa@lalala.com', 'telefone' => '99101-8437'],
        ['nome' => 'Dora', 'email' => 'dora@lelele.com', 'telefone' => '99155-8787'],
    ];

    if (count($dados) > 0) {
        foreach ($dados as $usuario) {
            echo "<tr>
                    <td>{$usuario['nome']}</td>
                    <td>{$usuario['email']}</td>
                    <td>{$usuario['telefone']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Nenhum registro encontrado</td></tr>";
    }
    ?>
</table>

</body>
</html>
