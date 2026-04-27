<?php
  namespace Projeto\Telas;
  require_once('../DAO/conexao.php');
  require_once('../DAO/inserir.php');
  use Projeto\DAO\Conexao;
  use Projeto\DAO\Inserir;

  $conexao = new Conexao();
  $inserir = new Inserir();
  $mensagem = "";

  if($_SERVER["REQUEST_METHOD"] === "POST"){

    $descricao            = $_POST['descricao'];
    $peso                 = $_POST['peso'];
    $valorDeclarado       = $_POST['valorDeclarado'];
    $horarioPrevisto      = $_POST['horarioPrevisto'];
    $situacao             = $_POST['situacao'];

    $mensagem = $inserir -> cadastrarEncomenda($conexao,
                                               $descricao,
                                               $peso,
                                               $valorDeclarado,
                                               $horarioPrevisto,
                                               $situacao);
  } else {
    $mensagem = "Código inválido!";
  }

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empresa de Entregas</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
  <form method="POST">
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição: </label>
        <input type="text" class="form-control" id="descricao" name="descricao">
      </div>
      <div class="mb-3">
        <label for="peso" class="form-label">Peso: </label>
        <input type="number" class="form-control" id="peso" name="peso">
      </div>
      <div class="mb-3">
        <label for="valorDeclarado" class="form-label">Valor Declarado: </label>
        <input type="text" class="form-control" id="valorDeclarado" name="valorDeclarado">
      </div>
      <div class="mb-3">
        <label for="horarioPrevisto" class="form-label">Horario Previsto: </label>
        <input type="text" class="form-control" id="horarioPrevisto" name="horarioPrevisto">
      </div>
      <div class="mb-3">
        <label for="situacao" class="form-label">Situação: </label>
        <input type="text" class="form-control" id="situacao" name="situacao">
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