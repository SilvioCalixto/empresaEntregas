<?php
require_once('../../DAO/EncomendaDAO.php');

use Projeto\DAO\EncomendaDAO;

$dao = new EncomendaDAO();

if(isset($_GET['acao']) && $_GET['acao'] == 'excluir'){
    $dao->excluir($_GET['id']);
    header("Location: listar.php");
    exit;
}

$result = $dao->listar();
?>

<h1>Encomendas</h1>

<a href="cadastrar.php">Nova Encomenda</a>

<table border="1">
<tr>
  <th>ID</th>
  <th>Descrição</th>
  <th>Peso</th>
  <th>Valor</th>
  <th>Cliente</th>
  <th>Entregador</th>
  <th>Veículo</th>
  <th>Região</th>
  <th>Dia</th>
  <th>Ações</th>
</tr>

<?php while($e = mysqli_fetch_assoc($result)){ ?>
<tr>
  <td><?= $e['codigo'] ?></td>
  <td><?= $e['descricao'] ?></td>
  <td><?= $e['peso'] ?></td>
  <td><?= $e['valorDeclarado'] ?></td>

  <td><?= $e['cliente'] ?? '-' ?></td>
  <td><?= $e['entregador'] ?? '-' ?></td>
  <td><?= $e['veiculo'] ?? '-' ?></td>
  <td><?= $e['regiaoEntrega'] ?? '-' ?></td>
  <td><?= $e['diaEntrega'] ?? '-' ?></td>

  <td>
    <a href="editar.php?id=<?= $e['codigo'] ?>">✏️ Editar</a>
    <a href="?acao=excluir&id=<?= $e['codigo'] ?>">🗑️ Excluir</a>
  </td>
</tr>
<?php } ?>

</table>