<?php

require_once 'Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/dnhr/modelo/Categoria.php';

class CategoriaDAO {

    private $conexao;
    private $sql;
    private $resultado;
    private $tabela;

    public function __construct() {
        $conn = new Conexao();
        $this->conexao = $conn->getConexao();
        $this->tabela = "categoria";
    }

    public function cadastrar($dados) {
        $this->sql = "insert into $this->tabela (cat_nome, cat_descricao) values (:nome,:descricao)";

        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':nome', $dados->getNome());
        $this->resultado->bindParam(':descricao', $dados->getDescricao());

        $this->resultado->execute();
    }

    public function listarTodos() {
        $this->sql = "SELECT * FROM $this->tabela";
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->execute();
        return $this->resultado->fetchAll();
    }

    public function listarPorId($id) {
        $this->sql = "SELECT * FROM $this->tabela where cat_id=:id";
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':id', $id);
        $this->resultado->execute();
        return $this->resultado->fetch();
    }

    public function editar($dados) {

        $this->sql = "update $this->tabela set cat_nome=:nome, cat_descricao=:descricao 
        where cat_id=:id";

        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':nome', $dados->getNome());
        $this->resultado->bindParam(':descricao', $dados->getDescricao());
        $this->resultado->bindParam(':id', $dados->getId());
        
        $this->resultado->execute();
    }

    public function excluir($id) {
        $this->sql = "delete from $this->tabela where cat_id=:id";

        $this->resultado = $this->conexao->prepare($this->sql);

        $this->resultado->bindParam(':id', $id);
        
        $this->resultado->execute();
    }

}

?>
