<?php
require_once('../../DAO/EncomendaDAO.php');
require_once('../../DAO/conexao.php');

use Projeto\DAO\EncomendaDAO;
use Projeto\DAO\Conexao;

$dao = new EncomendaDAO();
$conn = (new Conexao())->conectar();

$id = $_GET['id'];

if($_POST){
    $dao->atualizar(
        $id,
        $_POST['descricao'],
        $_POST['peso'],
        $_POST['valor'],
        $_POST['horario'],
        $_POST['situacao'],
        $_POST['cliente'],
        $_POST['roteiro']
    );

    header("Location: listar.php");
    exit;
}

$encomenda = $dao->buscarPorId($id);

$clientes = mysqli_query($conn, "SELECT * FROM cliente");
$roteiros = mysqli_query($conn, "SELECT * FROM roteiroEntrega");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<h1>Editar Encomenda</h1>

<form method="POST">

Descrição:
<input type="text" name="descricao" value="<?= $encomenda['descricao'] ?? '' ?>"><br><br>

Peso:
<input type="number" step="0.01" name="peso" value="<?= $encomenda['peso'] ?? '' ?>"><br><br>

Valor:
<input type="number" step="0.01" name="valor" value="<?= $encomenda['valorDeclarado'] ?? '' ?>"><br><br>

Horário:
<input type="time" name="horario" value="<?= $encomenda['horarioPrevisto'] ?? '' ?>"><br><br>

Situação:
<input type="text" name="situacao" value="<?= $encomenda['situacao'] ?? '' ?>"><br><br>

Cliente:
<select name="cliente">
<?php while($c = mysqli_fetch_assoc($clientes)){ ?>
<option value="<?= $c['codigo'] ?>"
<?= ($c['codigo'] == ($encomenda['codigoCliente'] ?? 0)) ? 'selected' : '' ?>>
<?= $c['nome'] ?>
</option>
<?php } ?>
</select><br><br>

Roteiro:
<select name="roteiro">
<?php while($r = mysqli_fetch_assoc($roteiros)){ ?>
<option value="<?= $r['codigo'] ?>"
<?= ($r['codigo'] == ($encomenda['codigoRoteiroEntrega'] ?? 0)) ? 'selected' : '' ?>>
<?= $r['regiaoEntrega'] ?> - <?= $r['diaEntrega'] ?>
</option>
<?php } ?>
</select><br><br>

<button>Salvar</button>

</form>

</body>
</html>
