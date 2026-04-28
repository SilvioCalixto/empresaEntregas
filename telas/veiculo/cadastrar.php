<?php
require_once('../../DAO/VeiculoDAO.php');

use Projeto\DAO\VeiculoDAO;

$dao = new VeiculoDAO();

if($_POST){
    $dao->inserir(
        $_POST['tipo'],
        $_POST['modelo'],
        $_POST['ano'],
        $_POST['cor'],
        $_POST['placa']
    );

    echo "Veículo cadastrado!";
}
?>

<h1>Cadastrar Veículo</h1>

<form method="POST">

Tipo:
<input type="text" name="tipo"><br><br>

Modelo:
<input type="text" name="modelo"><br><br>

Ano:
<input type="date" name="ano"><br><br>

Cor:
<input type="color" name="cor"><br><br>

Placa:
<input type="text" name="placa"><br><br>

<button>Salvar</button>

</form>