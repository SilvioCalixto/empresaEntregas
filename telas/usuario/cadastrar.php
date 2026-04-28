<?php
require_once('../../DAO/UsuarioDAO.php');

use Projeto\DAO\UsuarioDAO;

$dao = new UsuarioDAO();

if($_POST){
    $dao->cadastrar(
        $_POST['nome'],
        $_POST['email'],
        $_POST['senha']
    );

    echo "Usuário cadastrado! <a href='login.php'>Fazer login</a>";
}
?>

<h2>Cadastrar Usuário</h2>

<form method="POST">
Nome: <input name="nome"><br><br>
Email: <input type="email" name="email"><br><br>
Senha: <input type="password" name="senha"><br><br>
<button>Cadastrar</button>
</form>