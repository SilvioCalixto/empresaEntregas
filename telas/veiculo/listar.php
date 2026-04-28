<?php
require_once('../../DAO/VeiculoDAO.php');

use Projeto\DAO\VeiculoDAO;

$dao = new VeiculoDAO();

// excluir
if(isset($_GET['acao']) && $_GET['acao'] == 'excluir'){
    $dao->excluir($_GET['id']);
    header("Location: listar.php");
    exit;
}

$result = $dao->listar();
?>

<h1>Veículos</h1>

<a href="cadastrar.php">Novo Veículo</a>

<table border="1">
<tr>
  <th>ID</th>
  <th>Tipo</th>
  <th>Modelo</th>
  <th>Ano</th>
  <th>Cor</th>
  <th>Placa</th>
  <th>Ações</th>
</tr>

<?php while($v = mysqli_fetch_assoc($result)){ ?>
<tr>
  <td><?= $v['codigo'] ?></td>
  <td><?= $v['tipo'] ?></td>
  <td><?= $v['modelo'] ?></td>
  <td><?= $v['ano'] ?></td>
  <td><?= $v['cor'] ?></td>
  <td><?= $v['placa'] ?></td>
  <td>
    <a href="editar.php?id=<?= $v['codigo'] ?>">✏️ Editar</a>
    <a href="?acao=excluir&id=<?= $v['codigo'] ?>">🗑️ Excluir</a>
  </td>
</tr>
<?php } ?>

</table>