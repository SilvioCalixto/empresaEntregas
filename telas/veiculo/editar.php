<?php
require_once('../../DAO/VeiculoDAO.php');

use Projeto\DAO\VeiculoDAO;

$dao = new VeiculoDAO();

$id = $_GET['id'];

if($_POST){
    $dao->atualizar(
        $id,
        $_POST['tipo'],
        $_POST['modelo'],
        $_POST['ano'],
        $_POST['cor'],
        $_POST['placa']
    );

    header("Location: listar.php");
    exit;
}

$veiculo = $dao->buscarPorId($id);
?>

<h1>Editar Veículo</h1>

<form method="POST">

Tipo:
<input type="text" name="tipo" value="<?= $veiculo['tipo'] ?? '' ?>"><br><br>

Modelo:
<input type="text" name="modelo" value="<?= $veiculo['modelo'] ?? '' ?>"><br><br>

Ano:
<input type="date" name="ano" value="<?= $veiculo['ano'] ?? '' ?>"><br><br>

Cor:
<input type="color" name="cor" value="<?= $veiculo['cor'] ?? '' ?>"><br><br>

Placa:
<input type="text" name="placa" value="<?= $veiculo['placa'] ?? '' ?>"><br><br>

<button>Salvar</button>

</form>