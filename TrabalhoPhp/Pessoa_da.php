<?php
include_once("Database.php");
/* Insere usuarios no banco de dados */ 


function insere_usuario ($nome ,$email):void{
    $db = conectdb();
    $sql = "INSERT INTO usuarios(nome, email) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(1, $nome, PDO::PARAM_STR);
    $stmt->bindvalue(2, $email, PDO::PARAM_STR);
    
    

    try{
        $stmt-> execute();
        echo "- Usuario inserido -";
    }
    catch (PDOException $e){
        echo "- Erro ao inserir: - ". $e->getMessage();
    }
    $db = null;
    
}

function getUsuarios(){

    $db = conectdb();
    $sql = "select * from usuarios";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $resultado = $stmt-> fetchAll(PDO::FETCH_ASSOC);
    return ( $resultado);
    

} //procura por id
function getUsuario($id){

    $db = conectdb();
    $sql = "select * from usuarios where id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(1,$id); //?
    $stmt->execute();
    $usuario = $stmt-> fetch (PDO::FETCH_ASSOC);
    return ($usuario);
}

function editar_usuario($id, $nome, $email) {
    $db = conectdb();
    
    // SQL para atualizar os dados no banco de dados
    $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
    $stmt = $db->prepare($sql);
    
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':id', $id);

    $stmt->execute();
    // Fecha a conexão com o banco
    $db = null;
}


?>