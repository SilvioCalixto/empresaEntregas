<?php 
  namespace Projeto\DAO;

use Exception;

  class Conexao {
    function conectar() {
      try {
        $conn = mysqli_connect('localhost',
                               'root',
                               '',
                               'entregas');
      if($conn) {
        echo "<br> Conectado com sucesso!";
        return $conn;
      }
      echo "Algo deu errado!";
      }
      catch(Exception $erro)
      {
        return "Algo deu errado!<br><br> $erro";
      }
    }
  }

?>