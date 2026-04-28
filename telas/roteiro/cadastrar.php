<?php
require_once('../../DAO/RoteiroDAO.php');
require_once('../../DAO/conexao.php');

use Projeto\DAO\RoteiroEntregaDAO;
use Projeto\DAO\Conexao;

$dao = new RoteiroEntregaDAO();
$conn = (new Conexao())->conectar();

if($_POST){
    $dao->inserir(
        $_POST['regiao'],
        $_POST['dia'],
        $_POST['entregador'],
        $_POST['veiculo']
    );

    echo "Roteiro cadastrado!";
}

// buscar entregadores
$entregadores = mysqli_query($conn, "SELECT * FROM entregador");

// buscar veículos
$veiculos = mysqli_query($conn, "SELECT * FROM veiculo");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  


<h1>Cadastrar Roteiro</h1>

<form method="POST">

Região:
<input type="text" name="regiao"><br><br>

Dia:
<input type="text" name="dia"><br><br>

Entregador:
<select name="entregador">
<?php while($e = mysqli_fetch_assoc($entregadores)){ ?>
<option value="<?= $e['codigo'] ?>"><?= $e['nome'] ?></option>
<?php } ?>
</select><br><br>

Veículo:
<select name="veiculo">
<?php while($v = mysqli_fetch_assoc($veiculos)){ ?>
<option value="<?= $v['codigo'] ?>"><?= $v['modelo'] ?></option>
<?php } ?>
</select><br><br>

<button>Salvar</button>

</form>
</body>
</html>