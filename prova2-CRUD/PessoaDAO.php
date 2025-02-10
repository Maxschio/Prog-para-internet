<?php
include_once("database.php");
include_once("Pessoa.php");

class PessoaDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = conectDb();
    }

    public function insert(Pessoa $pessoa) {
        try {
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(":nome", $pessoa->nome);
            $stmt->bindValue(":email", $pessoa->email);
            $stmt->bindValue(":senha", $pessoa->senha); // Armazena diretamente
            return $stmt->execute();
        } catch (PDOException $e) {
            throw new Exception("Erro ao inserir usuário: " . $e->getMessage());
        }
    }
    

    public function selectAll() {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    public function delete($id) {

        $stmt = $this->conn->prepare("DELETE FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function selectById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function update(Pessoa $pessoa) {
        try {
            $sql = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':nome', $pessoa->nome);
            $stmt->bindParam(':email', $pessoa->email);
            $stmt->bindParam(':senha', $pessoa->senha);
            $stmt->bindParam(':id', $pessoa->id);
            return $stmt->execute();
        } catch (PDOException $e) {
            throw new Exception("Erro ao atualizar usuário: " . $e->getMessage());
        }
    }
    
    
    
}
?>
