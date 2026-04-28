<?php
namespace Projeto\DAO;

require_once(__DIR__ . '/conexao.php');

use Projeto\DAO\Conexao;

class EntregadorDAO {

    private $conn;

    public function __construct() {
        $conexao = new Conexao();
        $this->conn = $conexao->conectar();
    }

    public function listar() {
        $sql = "SELECT * FROM entregador";
        return mysqli_query($this->conn, $sql);
    }

    public function buscarPorId($id) {
        $sql = "SELECT * FROM entregador WHERE codigo = $id";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    public function inserir($nome, $cpf, $cnh) {
        $sql = "INSERT INTO entregador (nome, cpf, cnh)
                VALUES ('$nome', '$cpf', '$cnh')";
        return mysqli_query($this->conn, $sql);
    }

    public function atualizar($id, $nome, $cpf, $cnh) {
        $sql = "UPDATE entregador 
                SET nome='$nome', cpf='$cpf', cnh='$cnh'
                WHERE codigo=$id";
        return mysqli_query($this->conn, $sql);
    }

    public function excluir($id) {
        $sql = "DELETE FROM entregador WHERE codigo = $id";
        return mysqli_query($this->conn, $sql);
    }
}