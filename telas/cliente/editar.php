<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
require_once('../../DAO/ClienteDAO.php');
require_once('../../DAO/conexao.php');

use Projeto\DAO\Conexao;
use Projeto\DAO\ClienteDAO;

$clienteDAO = new ClienteDAO();
$conexao = new Conexao();
$conn = $conexao->conectar();

$id = $_GET['id'];

// 🔵 ATUALIZAR
if($_POST){
    $clienteDAO->atualizar(
        $id,
        $_POST['nome'],
        $_POST['telefone']
    );

    header("Location: listar.php");
    exit;
}

// 🟢 BUSCAR CLIENTE
$cliente = $clienteDAO->buscarPorId($id);

// 🔥 BUSCAR ENDEREÇOS (para o select)
$sqlEndereco = "SELECT * FROM endereco";
$resultEndereco = mysqli_query($conn, $sqlEndereco);
?>

<h1>Editar Cliente</h1>

<form method="POST">

Nome:
<input type="text" name="nome" value="<?= $cliente['nome'] ?>"><br><br>

Telefone:
<input type="text" name="telefone" value="<?= $cliente['telefone'] ?>"><br><br>

Endereço:
<select name="codigoEndereco">

<?php while($end = mysqli_fetch_assoc($resultEndereco)){ ?>

<option value="<?= $end['codigo'] ?>"
    <?= ($end['codigo'] == $cliente['codigoEndereco']) ? 'selected' : '' ?>>

    <?= $end['logradouro'] ?>, <?= $end['numero'] ?> - <?= $end['bairro'] ?>

</option>

<?php } ?>

</select>

<br><br>

<button>Salvar</button>

</form>

    
</body>
</html>
