<?php
namespace Projeto\DAO;

require_once(__DIR__ . '/conexao.php');

use Projeto\DAO\Conexao;

class RoteiroEntregaDAO {

    private $conn;

    public function __construct() {
        $conexao = new Conexao();
        $this->conn = $conexao->conectar();
    }

    public function listar() {
        $sql = "
        SELECT r.*, e.nome AS entregador, v.modelo AS veiculo
        FROM roteiroEntrega r
        LEFT JOIN entregador e ON r.codigoEntregador = e.codigo
        LEFT JOIN veiculo v ON r.codigoVeiculo = v.codigo
        ";
        return mysqli_query($this->conn, $sql);
    }

    public function inserir($regiao, $dia, $entregador, $veiculo) {
        $sql = "
        INSERT INTO roteiroEntrega (regiaoEntrega, diaEntrega, codigoEntregador, codigoVeiculo)
        VALUES ('$regiao', '$dia', '$entregador', '$veiculo')
        ";
        return mysqli_query($this->conn, $sql);
    }

    public function buscarPorId($id) {
        $sql = "SELECT * FROM roteiroEntrega WHERE codigo = $id";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    public function atualizar($id, $regiao, $dia, $entregador, $veiculo) {
        $sql = "
        UPDATE roteiroEntrega SET
        regiaoEntrega='$regiao',
        diaEntrega='$dia',
        codigoEntregador='$entregador',
        codigoVeiculo='$veiculo'
        WHERE codigo=$id
        ";
        return mysqli_query($this->conn, $sql);
    }

    public function excluir($id) {
        $sql = "DELETE FROM roteiroEntrega WHERE codigo = $id";
        return mysqli_query($this->conn, $sql);
    }
}