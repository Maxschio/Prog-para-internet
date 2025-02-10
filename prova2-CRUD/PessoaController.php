<?php

include_once "PessoaDAO.php";

//ACESSA o bd atraves do DAO
class PessoaController {
    private $dao;

    public function __construct() {
        $this->dao = new PessoaDAO();
    }

    //cria uma nova pessoa, recebe e salva seus dados
    public function cadastrarPessoa($nome, $email, $senha) {
        $pessoa = new Pessoa();
        $pessoa->setAll($nome, $email, $senha);
        //insere no banco
        return $this->dao->insert($pessoa);
    }

    public function listarPessoa() {
        return $this->dao->selectAll();
    }

    //exclui pelo id
    public function excluirPessoa($id) {
        return $this->dao->delete($id);
    }

    //cria um objeto e salva no banco
    public function editarPessoa($id, $nome, $email, $senha) {
        $pessoa = new Pessoa();
        $pessoa->id = $id;
        return $this->dao->update($pessoa);
    }
    
    

    public function buscarPessoaPorId($id) {
    return $this->dao->selectById($id);
    }
    
}
?>
