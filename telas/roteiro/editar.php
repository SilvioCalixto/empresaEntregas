<?php
require_once('../../DAO/RoteiroDAO.php');
require_once('../../DAO/conexao.php');

use Projeto\DAO\RoteiroEntregaDAO;
use Projeto\DAO\Conexao;

$dao = new RoteiroEntregaDAO();
$conn = (new Conexao())->conectar();

$id = $_GET['id'];

// 🔥 ATUALIZAR
if($_POST){
    $dao->atualizar(
        $id,
        $_POST['regiao'],
        $_POST['dia'],
        $_POST['entregador'],
        $_POST['veiculo']
    );

    header("Location: listar.php");
    exit;
}

// 🔹 BUSCAR DADOS DO ROTEIRO
$roteiro = $dao->buscarPorId($id);

// 🔹 BUSCAR ENTREGADORES
$entregadores = mysqli_query($conn, "SELECT * FROM entregador");

// 🔹 BUSCAR VEÍCULOS
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
  

<h1>Editar Roteiro</h1>

<form method="POST">

Região:
<input type="text" name="regiao" value="<?= $roteiro['regiaoEntrega'] ?? '' ?>"><br><br>

Dia:
<input type="text" name="dia" value="<?= $roteiro['diaEntrega'] ?? '' ?>"><br><br>

Entregador:
<select name="entregador">
<?php while($e = mysqli_fetch_assoc($entregadores)){ ?>
<option value="<?= $e['codigo'] ?>"
<?= ($e['codigo'] == ($roteiro['codigoEntregador'] ?? 0)) ? 'selected' : '' ?>>
<?= $e['nome'] ?>
</option>
<?php } ?>
</select><br><br>

Veículo:
<select name="veiculo">
<?php while($v = mysqli_fetch_assoc($veiculos)){ ?>
<option value="<?= $v['codigo'] ?>"
<?= ($v['codigo'] == ($roteiro['codigoVeiculo'] ?? 0)) ? 'selected' : '' ?>>
<?= $v['modelo'] ?>
</option>
<?php } ?>
</select><br><br>

<button>Salvar</button>

</form>
</body>
</html>