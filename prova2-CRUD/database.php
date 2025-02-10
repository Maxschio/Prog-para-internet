<?php
function conectDb() {
    $user="root";
    $pass="Berbelle77-";
    $database="crud";
    $host="localhost";

    $db= new PDO( "mysql:host=$host;dbname=$database",  $user,password:$pass);
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //xhcando se a conexao foi estabelecida con ucesso e retornando a conexao 
    
    //função que conecta com o banco de dados e retorna a conexão com banco ou false
    if ($db) {
        return $db;
    }
    else {
        return false;
    }
//SHOW databases;
//CREATE database crud default char set "utf8";

//use crud;
//CREATE table usuario(id INT primary key auto_increment,
//                        nome varchar(100) not null,
//                        email varchar(100));

}

function check_conn($conn_id): void{
    if ($conn_id ) {
        echo "Conexao concluida";
    }
    else {
        echo "Erro ao conectar";
    }
}
//var_dump(conectDb());
//check_conn( conectDb());

?>