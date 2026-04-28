<?php
require_once('../../DAO/EncomendaDAO.php');
require_once('../../DAO/conexao.php');

use Projeto\DAO\EncomendaDAO;
use Projeto\DAO\Conexao;

$dao = new EncomendaDAO();
$conn = (new Conexao())->conectar();

if($_POST){
    $dao->inserir(
        $_POST['descricao'],
        $_POST['peso'],
        $_POST['valor'],
        $_POST['horario'],
        $_POST['situacao'],
        $_POST['cliente'],
        $_POST['roteiro']
    );

    echo "Encomenda cadastrada!";
}

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
  


<h1>Cadastrar Encomenda</h1>

<form method="POST">

Descrição:
<input type="text" name="descricao"><br><br>

Peso:
<input type="number" step="0.01" name="peso"><br><br>

Valor:
<input type="number" step="0.01" name="valor"><br><br>

Horário:
<input type="time" name="horario"><br><br>

Situação:
<input type="text" name="situacao"><br><br>

Cliente:
<select name="cliente">
<?php while($c = mysqli_fetch_assoc($clientes)){ ?>
<option value="<?= $c['codigo'] ?>"><?= $c['nome'] ?></option>
<?php } ?>
</select><br><br>

Roteiro:
<select name="roteiro">
<?php while($r = mysqli_fetch_assoc($roteiros)){ ?>
<option value="<?= $r['codigo'] ?>">
<?= $r['regiaoEntrega'] ?> - <?= $r['diaEntrega'] ?>
</option>
<?php } ?>
</select><br><br>

<button>Salvar</button>

</form>

</body>
</html>