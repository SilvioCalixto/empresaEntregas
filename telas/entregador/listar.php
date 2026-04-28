<?php
require_once('../../DAO/EntregadorDAO.php');

use Projeto\DAO\EntregadorDAO;

$dao = new EntregadorDAO();

// excluir
if(isset($_GET['acao']) && $_GET['acao'] == 'excluir'){
    $dao->excluir($_GET['id']);
    header("Location: listar.php");
    exit;
}

$result = $dao->listar();
?>

<h1>Entregadores</h1>

<a href="cadastrar.php">Novo Entregador</a>

<table border="1">
<tr>
  <th>ID</th>
  <th>Nome</th>
  <th>CPF</th>
  <th>CNH</th>
  <th>Ações</th>
</tr>

<?php while($d = mysqli_fetch_assoc($result)){ ?>
<tr>
  <td><?= $d['codigo'] ?></td>
  <td><?= $d['nome'] ?></td>
  <td><?= $d['cpf'] ?></td>
  <td><?= $d['cnh'] ?></td>
  <td>
    <a href="editar.php?id=<?= $d['codigo'] ?>">✏️ Editar</a>
    <a href="?acao=excluir&id=<?= $d['codigo'] ?>">🗑️ Excluir</a>
  </td>
</tr>
<?php } ?>

</table>