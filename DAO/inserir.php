<?php
namespace Projeto\DAO;
require_once('Conexao.php');

use Exception;
use mysqli;
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
        return "<br<br> Algo deu errado!!!<br><br> $erro";
      }
    }

    public function cadastrarCliente(Conexao $conexao,
                                     string $nome,
                                     string $cnpj,
                                     string $telefone)
    {
      try {
        $conn = $conexao->conectar();
        $sql = "INSERT INTO cliente(codigo, nome, cnpj, telefone, codigoEndereco) values('', '$nome','$cnpj','$telefone','')";
        $result = mysqli_query($conn, $sql);

        mysqli_close($conn);

        if($result) {
          return "<br><br> Inserido com sucesso!";
        }
        return "<br><br> Não inserido!";
      }
      catch(Exception $erro) {
        return "<br><br> Algo deu errado!! <br><br> $erro";
      }
    }

    public function cadastrarVeiculo(Conexao $conexao,
                                     string $tipo,
                                     string $modelo,
                                     string $ano,
                                     string $cor,
                                     string $placa)
    {
      try {
        $conn = $conexao->conectar();
        $sql = "INSERT INTO veiculo(codigo, tipo, modelo, ano, cor, placa)
        values('', '$tipo', '$modelo', '$ano', '$cor', '$placa')";
        $result = mysqli_query($conn, $sql);

        mysqli_close($conn);

        if($result) {
          return "<br><br> Inserido com sucesso!";
        }
        return "<br><br> Não inserido!";
      }
      catch(Exception $erro) {
        return "<br><br> Algo deu errado!! <br><br> $erro";
      }
    }

    public function cadastrarEntregador(Conexao $conexao,
                                        string $nome,
                                        string $cpf,
                                        string $cnh)
    {
      try{
        $conn = $conexao->conectar();
        $sql = "INSERT INTO entregador(codigo, nome, cpf, cnh)
        values('', '$nome', '$cpf','$cnh')";
        $result = mysqli_query($conn, $sql);

        mysqli_close($conn);

        if($result) {
          return "<br><br> Inserido com sucesso!";
        }
        return "<br><br> Não inserido!";
      }
      catch(Exception $erro) {
        return "<br><br> Algo deu errado!! <br><br> $erro";
      }
    }

    public function cadastrarEncomenda(Conexao $conexao,
                                       string $descricao,
                                       float  $peso,
                                       float  $valorDeclarado,
                                       string $horarioPrevisto,
                                       string $situacao)
    {
      try{
        $conn = $conexao->conectar();
        $sql = "INSERT INTO encomenda(codigo, descricao, peso, valorDeclarado, horarioPrevisto, situacao, codigoCliente, codigoRoteiroEntrega)
        values('', '$descricao','$peso','$valorDeclarado', '$horarioPrevisto', '$situacao','', '')";
        $result = mysqli_query($conn, $sql);

        mysqli_close($conn);

        if($result) {
          return "<br><br> Inserido com sucesso";
        }
        return "<br><br> Não Inserido!";
      }
      catch(Exception $erro) {
        return "<br><br> Algo deu errado!! <br><br> $erro";
      }
    }

    public function cadastrarRoteiroEntrega(Conexao $conexao,
                                            string $regiaoEntrega,
                                            string $diaEntrega)
    {
      try {
        $conn = $conexao->conectar();
        $sql = "INSERT INTO roteiroEntrega(codigo, regiaoEntrega, diaEntrega, codigoEntregador, codigoVeiculo)
        values('', '$regiaoEntrega', '$diaEntrega', '', '')";
        $result = mysqli_query($conn, $sql);

        mysqli_close($conn);

        if($result) {
          return "<br><br> Inserido com sucesso";
        }
        return "<br><br> Não inserido";
      }
      catch(Exception $erro) {
        return "<br><br> Algo deu errado!! <br><br> $erro";
      }
    }
  }
?>