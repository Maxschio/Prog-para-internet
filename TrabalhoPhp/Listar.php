<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
</head>
<style>
        table {
            width: 50%;
            border-collapse: collapse; 
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 5px;
        }
        th {
            background-color: #f2f2f2;
        }
        td {
            height: 5px;
        }
    </style>
<body>
<?php   
include_once("Database.php");
include_once("Pessoa_da.php");

$lista_pessoa=getUsuarios();
?>


<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>email</th>
    </tr>
    <?php //implementção com foreach
      foreach($lista_pessoa as $registro) //Percorre cada elemento do array $lista_pessoa
      {
        ?>
    <tr>    // Exibir uma lista de pessoas em uma tabela
        <td><a href= "Editpessoa.php?pessoa_id=<?php echo $registro["id"]?>">
                <?php echo $registro["id"] ?>
            </a>
        </td>
        <td><?php  echo $registro["nome"]?></td>
        <td><?php  echo $registro["email"]?></td>
    </tr>
      <?php }?>
   

</table>
</body>
</html>