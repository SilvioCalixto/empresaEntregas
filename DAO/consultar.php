<?php
  namespace Projeto\DAO;
  require_once('conexao.php');

use Exception;
use Projeto\DAO\Conexao;

  class Consultar{
    function consultarCliente(Conexao $conexao, int $codigo){
      try {
        $conn = $conexao->conectar();
        $sql = "SELECT * FROM cliente WHERE codigo = $codigo";
        $result = mysqli_query($conn, $sql);

        while($dados = mysqli_fetch_Array($result)){
          if($dados['codigo'] == $codigo){
            return "<br>Código: ".$dados['codigo'].
                   "<br>Nome: ".$dados['nome'].
                   "<br>Cnpj: ".$dados['Cnpj'].
                   "<br>Telefone: ".$dados['telefone'].
                   "<br>codigoEndereço: ".$dados['codigoEndereco'];
          }
        }
      }catch(Exception $erro) {
        echo "Algo deu errado! <br><br> $erro";
      }
    }

    function consultarEndereco(Conexao $conexao, int $codigo){
      try{
        $conn = $conexao->conectar();
        $sql = "SELECT * FROM  endereco WHERE codigo = $codigo";
        $result = mysqli_query($conn, $sql);

        while($dados = mysqli_fetch_Array($result)){
          if($dados['codigo'] == $codigo){
            return "<br>Código: ".$dados['codigo'].
                   "<br>Logradouro: ".$dados['logradouro'].
                   "<br>Número: ".$dados['numero'].
                   "<br>Bairro: ".$dados['bairro'].
                   "<br>Estado: ".$dados['estado'].
                   "<br>Cep: ".$dados['cep'];
          }
        }
      }catch(Exception $erro) {
        echo "Algo deu errado! <br><br> $erro";
      }
    }

    function consultarVeiculo(Conexao $conexao, int $codigo) {
      try{
        $conn = $conexao->conectar();
        $sql = "SELECT * FROM  veiculo WHERE codigo = $codigo";
        $result = mysqli_query($conn, $sql);

        while($dados = mysqli_fetch_Array($result)) {
          if($dados['codigo'] == $codigo) {
            return "<br>Código: ".$dados['codigo'].
                   "<br>Tipo: ".$dados['tipo'].
                   "<br>Modelo: ".$dados['modelo'].
                   "<br>Ano: ".$dados['ano'].
                   "<br>Cor: ".$dados['cor'].
                   "<br>Placa: ".$dados['placa'];
          }
        }

      }catch(Exception $erro) {
        echo "Algo deu errado! <br><br> $erro";
      }
    }

    function consultarEntregador(Conexao $conexao, int $codigo){
      try {
        $conn = $conexao->conectar();
        $sql = "SELECT * FROM entregador WHERE  codigo = $codigo";
        $result = mysqli_query($conn, $sql);

        while($dados = mysqli_fetch_Array($result)) {
          if($dados['codigo'] == $codigo) {
            return "<br>Código: ".$dados['codigo'].
                   "<br>Nome: ".$dados['nome'].
                   "<br>Cpf: ".$dados['cpf'].
                   "<br>Cnh: ".$dados['cnh'];
          }
        }

      }catch(Exception $erro){
        echo "Algo deu errado! <br><br> $erro";
      }
    }

    function consultarEncomenda(Conexao $conexao, int $codigo){
      try {
        $conn = $conexao->conectar();
        $sql = " SELECT * FROM encomenda WHERE codigo = $codigo";
        $result = mysqli_query($conn, $sql);

        while($dados = mysqli_fetch_Array($result)) {
          if($dados['codigo'] == $codigo) {
            return "<br>Código: ".$dados['codigo'].
                   "<br>Descrição: ".$dados['descricao'].
                   "<br>Peso: ".$dados['peso'].
                   "<br>Valor Declarado: ".$dados['valorDeclarado'].
                   "<br>Horário Previsto: ".$dados['horarioPrevisto'].
                   "<br>Situação: ".$dados['situacao'].
                   "<br>Código Cliente: ".$dados['codigoCliente'].
                   "<br>Código Roteiro Entrega: ".$dados['codigoRoteiroEntrega'];

          }
        }

      }catch(Exception $erro) {
        echo "Algo deu errado! <br><br> $erro";
      }
    }
  }
?>