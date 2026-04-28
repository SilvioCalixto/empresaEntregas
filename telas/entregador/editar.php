<?php
require_once('../../DAO/EntregadorDAO.php');

use Projeto\DAO\EntregadorDAO;

$dao = new EntregadorDAO();

$id = $_GET['id'];

if($_POST){
    $dao->atualizar(
        $id,
        $_POST['nome'],
        $_POST['cpf'],
        $_POST['cnh']
    );

    header("Location: listar.php");
    exit;
}

$entregador = $dao->buscarPorId($id);
?>

<h1>Editar Entregador</h1>

<form method="POST">

Nome:
<input type="text" name="nome" value="<?= $entregador['nome'] ?? '' ?>"><br><br>

CPF:
<input type="text" name="cpf" value="<?= $entregador['cpf'] ?? '' ?>"><br><br>

CNH:
<input type="text" name="cnh" value="<?= $entregador['cnh'] ?? '' ?>"><br><br>

<button>Salvar</button>

</form>