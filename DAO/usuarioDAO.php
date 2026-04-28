<?php
namespace Projeto\DAO;

require_once(__DIR__ . '/conexao.php');

use Projeto\DAO\Conexao;

class UsuarioDAO {

    private $conn;

    public function __construct() {
        $conexao = new Conexao();
        $this->conn = $conexao->conectar();
    }

    public function cadastrar($nome, $email, $senha) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuario (nome, email, senha)
                VALUES ('$nome', '$email', '$senhaHash')";

        return mysqli_query($this->conn, $sql);
    }

    public function buscarPorEmail($email) {
        $sql = "SELECT * FROM usuario WHERE email = '$email'";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    public function login($email, $senha) {

        $usuario = $this->buscarPorEmail($email);

        if($usuario && password_verify($senha, $usuario['senha'])){
            return $usuario;
        }

        return false;
    }
}