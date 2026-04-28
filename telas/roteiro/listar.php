<?php
require_once('../../DAO/RoteiroDAO.php');

use Projeto\DAO\RoteiroEntregaDAO;

$dao = new RoteiroEntregaDAO();

if(isset($_GET['acao']) && $_GET['acao'] == 'excluir'){
    $dao->excluir($_GET['id']);
    header("Location: listar.php");
    exit;
}

$result = $dao->listar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  


<h1>Roteiros</h1>

<a href="cadastrar.php">Novo Roteiro</a>

<table border="1">
<tr>
  <th>ID</th>
  <th>Região</th>
  <th>Dia</th>
  <th>Entregador</th>
  <th>Veículo</th>
  <th>Ações</th>
</tr>

<?php while($r = mysqli_fetch_assoc($result)){ ?>
<tr>
  <td><?= $r['codigo'] ?></td>
  <td><?= $r['regiaoEntrega'] ?></td>
  <td><?= $r['diaEntrega'] ?></td>
  <td><?= $r['entregador'] ?></td>
  <td><?= $r['veiculo'] ?></td>
  <td>
    <a href="editar.php?id=<?= $r['codigo'] ?>">✏️ Editar</a>
    <a href="?acao=excluir&id=<?= $r['codigo'] ?>">🗑️ Excluir</a>
  </td>
</tr>
<?php } ?>

</table>

</body>
</html>