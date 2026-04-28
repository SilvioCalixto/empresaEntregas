<?php
require_once('../../DAO/EntregadorDAO.php');

use Projeto\DAO\EntregadorDAO;

$dao = new EntregadorDAO();

if($_POST){
    $dao->inserir(
        $_POST['nome'],
        $_POST['cpf'],
        $_POST['cnh']
    );

    echo "Cadastrado com sucesso!";
}
?>

<h1>Cadastrar Entregador</h1>

<form method="POST">

Nome:
<input type="text" name="nome"><br><br>

CPF:
<input type="text" name="cpf"><br><br>

CNH:
<input type="text" name="cnh"><br><br>

<button>Salvar</button>

</form>