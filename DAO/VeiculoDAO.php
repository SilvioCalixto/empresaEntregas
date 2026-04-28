<?php
namespace Projeto\DAO;

require_once(__DIR__ . '/conexao.php');

use Projeto\DAO\Conexao;

class VeiculoDAO {

    private $conn;

    public function __construct() {
        $conexao = new Conexao();
        $this->conn = $conexao->conectar();
    }

    public function listar() {
        $sql = "SELECT * FROM veiculo";
        return mysqli_query($this->conn, $sql);
    }

    public function buscarPorId($id) {
        $sql = "SELECT * FROM veiculo WHERE codigo = $id";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    public function inserir($tipo, $modelo, $ano, $cor, $placa) {
        $sql = "INSERT INTO veiculo (tipo, modelo, ano, cor, placa)
                VALUES ('$tipo', '$modelo', '$ano', '$cor', '$placa')";
        return mysqli_query($this->conn, $sql);
    }

    public function atualizar($id, $tipo, $modelo, $ano, $cor, $placa) {
        $sql = "UPDATE veiculo 
                SET tipo='$tipo', modelo='$modelo', ano='$ano', cor='$cor', placa='$placa'
                WHERE codigo=$id";
        return mysqli_query($this->conn, $sql);
    }

    public function excluir($id) {
        $sql = "DELETE FROM veiculo WHERE codigo = $id";
        return mysqli_query($this->conn, $sql);
    }
}