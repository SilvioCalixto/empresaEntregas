<?php
namespace Projeto\DAO;

require_once(__DIR__ . '/conexao.php');

use Projeto\DAO\Conexao;

class EncomendaDAO {

    private $conn;

    public function __construct() {
        $conexao = new Conexao();
        $this->conn = $conexao->conectar();
    }

    public function listar() {
        $sql = "
        SELECT 
            e.*,
            c.nome AS cliente,
            r.regiaoEntrega,
            r.diaEntrega,
            ent.nome AS entregador,
            v.modelo AS veiculo
        FROM encomenda e
        LEFT JOIN cliente c ON e.codigoCliente = c.codigo
        LEFT JOIN roteiroEntrega r ON e.codigoRoteiroEntrega = r.codigo
        LEFT JOIN entregador ent ON r.codigoEntregador = ent.codigo
        LEFT JOIN veiculo v ON r.codigoVeiculo = v.codigo
        ";

        $result = mysqli_query($this->conn, $sql);

        if(!$result){
            die("Erro: " . mysqli_error($this->conn));
        }

        return $result;
    }

    public function inserir($descricao, $peso, $valor, $horario, $situacao, $cliente, $roteiro) {
        $sql = "
        INSERT INTO encomenda 
        (descricao, peso, valorDeclarado, horarioPrevisto, situacao, codigoCliente, codigoRoteiroEntrega)
        VALUES 
        ('$descricao', '$peso', '$valor', '$horario', '$situacao', '$cliente', '$roteiro')
        ";

        return mysqli_query($this->conn, $sql);
    }

    public function buscarPorId($id) {
        $sql = "SELECT * FROM encomenda WHERE codigo = $id";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    public function atualizar($id, $descricao, $peso, $valor, $horario, $situacao, $cliente, $roteiro) {
        $sql = "
        UPDATE encomenda SET
        descricao='$descricao',
        peso='$peso',
        valorDeclarado='$valor',
        horarioPrevisto='$horario',
        situacao='$situacao',
        codigoCliente='$cliente',
        codigoRoteiroEntrega='$roteiro'
        WHERE codigo=$id
        ";

        return mysqli_query($this->conn, $sql);
    }

    public function excluir($id) {
        $sql = "DELETE FROM encomenda WHERE codigo = $id";
        return mysqli_query($this->conn, $sql);
    }
}