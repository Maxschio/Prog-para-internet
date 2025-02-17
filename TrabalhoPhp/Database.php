 <!-- Função que conecta com o banco de dados e retorna a conexão com o banco ou false -->
 <?php

function conectdb() {
    $user = "root";
    $pass = "aluno";
    $database = "crud";
    $host = "localhost";

    try {   //Verifica se existe o usuario no banco de dados
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        echo "Erro de conexão: " . $e->getMessage();
        return false;
    }
}
    // Verifica se a conexão foi feita
function check_conn($conn_id): void {
    if ($conn_id) {
        echo "Conexão bem-sucedida";
    } else {
        echo "Erro na conexão";
    }
}
?>
