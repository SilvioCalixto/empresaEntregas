<?php
namespace Projeto\DAO;
require_once('conexao.php');
use Projeto\DAO\Conexao;

class ClienteDAO {

    private $conn;

    public function __construct() {
        $conexao = new Conexao();
        $this->conn = $conexao->conectar();
    }

    // 🔹 LISTAR NORMAL
    public function listar() {
        $sql = "SELECT * FROM cliente";
        return mysqli_query($this->conn, $sql);
    }

    // 🔥 LISTAR COM ENDEREÇO (NOVO MÉTODO)
    public function listarComEndereco() {
        $sql = "
        SELECT cliente.*, endereco.logradouro, endereco.numero, endereco.bairro
        FROM cliente
        LEFT JOIN endereco 
        ON cliente.codigoEndereco = endereco.codigo
        ";

        return mysqli_query($this->conn, $sql);
    }

    // 🔹 BUSCAR POR ID
    public function buscarPorId($id) {
    $sql = "SELECT * FROM cliente WHERE codigo = $id";
    $result = mysqli_query($this->conn, $sql);

    return mysqli_fetch_assoc($result);
}

    // 🔹 INSERIR
    public function inserir($nome, $cnpj, $telefone, $codigoEndereco) {
        $sql = "INSERT INTO cliente (nome, cnpj, telefone, codigoEndereco) 
                VALUES ('$nome', '$cnpj', '$telefone', '$codigoEndereco')";
        return mysqli_query($this->conn, $sql);
    }

    // 🔹 ATUALIZAR
    public function atualizar($id, $nome, $telefone) {
        $sql = "UPDATE cliente 
                SET nome='$nome', telefone='$telefone' 
                WHERE codigo=$id";
        return mysqli_query($this->conn, $sql);
    }

    // 🔹 EXCLUIR
    public function excluir($id) {

    $verifica = "SELECT * FROM encomenda WHERE codigoCliente = $id";
    $result = mysqli_query($this->conn, $verifica);

    if(mysqli_num_rows($result) > 0){
        echo "Não pode excluir: cliente possui encomendas!";
        return;
    }

    $sql = "DELETE FROM cliente WHERE codigo = $id";
    mysqli_query($this->conn, $sql);
}
}