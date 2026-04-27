<?php
  namespace Projeto\Telas;
  require_once('../DAO/conexao.php');
  require_once('../DAO/inserir.php');
  use Projeto\DAO\Conexao;
  use Projeto\DAO\Inserir;

  $conexao = new Conexao();
  $inserir = new Inserir();
  $mensagem = "";

  if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $tipo   = $_POST['tipo'];
    $modelo = $_POST['modelo'];
    $ano    = $_POST['ano'];
    $cor    = $_POST['cor'];
    $placa  = $_POST['placa'];

    $mensagem = $inserir -> cadastrarVeiculo($conexao,
                                             $tipo,
                                             $modelo,
                                             $ano,
                                             $cor,
                                             $placa);
  } else {
    $mensagem = "Código inválido!";
  }

?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Veículo
    </title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <form method="POST">
      <div class="mb-3">
        <label for="tipo" class="form-label">Tipo: </label>
        <input type="text" class="form-control" id="tipo" name="tipo">
      </div>
      <div class="mb-3">
        <label for="modelo" class="form-label">modelo: </label>
        <input type="text" class="form-control" id="modelo" name="modelo">
      </div>
      <div class="mb-3">
        <label for="ano" class="form-label">ano: </label>
        <input type="date" class="form-control" id="ano" name="ano">
      </div>
      <div class="mb-3">
        <label for="cor" class="form-label">cor: </label>
        <input type="color" class="form-control" id="cor" name="cor">
      </div>
      <div class="mb-3">
        <label for="placa" class="form-label">placa: </label>
        <input type="text" class="form-control" id="placa" name="placa">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="modal-body">
      <?php
        echo $mensagem;
      ?>
    </div>
    <a href="../index.php" type="submit" class="btn btn-outline-secondary">Voltar</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>