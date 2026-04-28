<?php
require_once('../../DAO/conexao.php');
require_once('../../DAO/ClienteDAO.php');

use Projeto\DAO\Conexao;
use Projeto\DAO\ClienteDAO;

$conexao = new Conexao();
$conn = $conexao->conectar();

$clienteDAO = new ClienteDAO();

if($_POST){

    // 🔹 1. inserir endereço
    $sqlEndereco = "
        INSERT INTO endereco (logradouro, numero, bairro, estado, cep)
        VALUES (
            '{$_POST['logradouro']}',
            '{$_POST['numero']}',
            '{$_POST['bairro']}',
            '{$_POST['estado']}',
            '{$_POST['cep']}'
        )
    ";

    mysqli_query($conn, $sqlEndereco);

    // 🔹 2. pegar ID do endereço
    $codigoEndereco = mysqli_insert_id($conn);

    // 🔹 3. inserir cliente com FK
    $clienteDAO->inserir(
        $_POST['nome'],
        $_POST['cnpj'],
        $_POST['telefone'],
        $codigoEndereco
    );

    echo "Cadastro realizado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="POST">

<h2>Dados do Cliente</h2>

Nome:
<input type="text" name="nome"><br><br>

CNPJ:
<input type="text" name="cnpj"><br><br>

Telefone:
<input type="text" name="telefone"><br><br>

<hr>

<h2>Endereço</h2>

Logradouro:
<input type="text" name="logradouro"><br><br>

Número:
<input type="number" name="numero"><br><br>

Bairro:
<input type="text" name="bairro"><br><br>

Estado:
<input type="text" name="estado"><br><br>

CEP:
<input type="text" name="cep"><br><br>

<button type="submit">Cadastrar</button>

</form>
</body>
</html>