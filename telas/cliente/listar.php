
<?php
require_once('../../DAO/ClienteDAO.php');
use Projeto\DAO\ClienteDAO;

$clienteDAO = new ClienteDAO();

// EXCLUIR
if(isset($_GET['acao']) && $_GET['acao'] == 'excluir'){
    $id = $_GET['id'];
    $clienteDAO->excluir($id);
    exit;
}

// 🔥 LISTAR COM ENDEREÇO
$result = $clienteDAO->listarComEndereco();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Clientes</h1>

<a href="cadastrar.php">Novo Cliente</a>

<table border="1">
<tr>
  <th>ID</th>
  <th>Nome</th>
  <th>Telefone</th>
  <th>Endereço</th>
  <th>Ações</th>
</tr>

<?php while($dados = mysqli_fetch_assoc($result)){ ?>
<tr>
  <td><?= $dados['codigo'] ?></td>
  <td><?= $dados['nome'] ?></td>
  <td><?= $dados['telefone'] ?></td>

  <td>
    <?= $dados['logradouro'] ?>, <?= $dados['numero'] ?> - <?= $dados['bairro'] ?>
  </td>

  <td>
    <a href="editar.php?id=<?= $dados['codigo'] ?>">✏️ Editar</a>
    <a href="?acao=excluir&id=<?= $dados['codigo'] ?>">🗑️ Excluir</a>
  </td>
</tr>
<?php } ?>

</table>
<!DOCTYPE html>


</body>
</html>