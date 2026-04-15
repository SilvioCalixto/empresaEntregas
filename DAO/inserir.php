<?php
namespace Projeto\DAO;
require_once('Conexao.php');

use Exception;
use Projeto\DAO\Conexao;

  class Inserir {
    public function cadastrarEndereco(Conexao $conexao,
                                     string $logradouro,
                                     int    $numero,
                                     string $bairro,
                                     string $estado,
                                     string $cep)
    {
      try {
        $conn = $conexao->conectar();
        $sql = "INSERT INTO endereco(codigo, logradouro, numero, bairro, estado, cep) values('', '$logradouro','$numero','$bairro','$estado','$cep')";
        $result = mysqli_query($conn, $sql);

        mysqli_close($conn);

        if($result){
          return "<br><br> Inserindo com sucesso!";
        }
        return "<br><br> Não inserido!";
      }
      catch(Exception $erro)
      {
        return "<br.<br> Algo deu errado!!!<br><br> $erro";
      }
    }
  }
?>