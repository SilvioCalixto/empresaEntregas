<?php
  namespace Projeto\Telas;
  require_once('../DAO/conexao.php');
  require_once('../DAO/inserir.php');
  use Projeto\DAO\Conexao;
  use Projeto\DAO\Inserir;

  $conexao = new Conexao();
  $inserir = new Inserir();
  $mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
  if (!empty($_POST['codigo']) && is_numeric($_POST['codigo'])) {

  $logradouro = $POST['logradouro'];
  $numero     = $_POST['numero'];
  $bairro     = $_POST['bairro'];
  $estado     = $_POST['estado'];
  $cep        = $_POST['cep'];

  $mensagem = $inserir -> cadastrarEndereco($conexao,
                                            $logradouro,
                                            $numero,
                                            $bairro,
                                            $estado,
                                            $cep);
                                            $resultado = "Código inválido!";
    }
  }

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Endereço</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <form>
      <div class="mb-3">
        <label for="logradouro" class="form-label">Logradouro: </label>
        <input type="text" class="form-control" id="logradouro" name="logradouro">
      </div>
      <div class="mb-3">
        <label for="numero" class="form-label">Número: </label>
        <input type="number" class="form-control" id="numero" name="numero">
      </div>
      <div class="mb-3">
        <label for="bairro" class="form-label">Bairro: </label>
        <input type="text" class="form-control" id="bairro" name="bairro">
      </div>
      <div class="mb-3">
        <label for="estado" class="form-label">Estado: </label>
        <input type="text" class="form-control" id="estado" name="estado">
      </div>
      <div class="mb-3">
        <label for="cep" class="form-label">Cep: </label>
        <input type="text" class="form-control" id="cep" name="cep">
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