<?php
require_once('../../DAO/EncomendaDAO.php');
require_once('../../DAO/conexao.php');

use Projeto\DAO\EncomendaDAO;
use Projeto\DAO\Conexao;

$dao = new EncomendaDAO();
$conn = (new Conexao())->conectar();

$id = $_GET['id'];

if($_POST){
    $dao->atualizar(
        $id,
        $_POST['descricao'],
        $_POST['peso'],
        $_POST['valor'],
        $_POST['horario'],
        $_POST['situacao'],
        $_POST['cliente'],
        $_POST['roteiro']
    );

    header("Location: listar.php");
    exit;
}

$encomenda = $dao->buscarPorId($id);

$clientes = mysqli_query($conn, "SELECT * FROM cliente");
$roteiros = mysqli_query($conn, "SELECT * FROM roteiroEntrega");
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CargoTech - Cadastrar Cliente</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    </head>
  <body>
  <style>
      .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
        background-image: radial-gradient(650px circle at 0% 0%,
            hsl(218, 41%, 35%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
          radial-gradient(1250px circle at 100% 100%,
            hsl(218, 41%, 45%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%);
      }
  
      #radius-shape-1 {
        height: 220px;
        width: 220px;
        top: -60px;
        left: -130px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }
  
      #radius-shape-2 {
        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
        bottom: -60px;
        right: -110px;
        width: 300px;
        height: 300px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }
  
      .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9) !important;
        backdrop-filter: saturate(200%) blur(25px);
      }

      table tbody tr:hover {
        transform: scale(1.01);
        transition: 0.2s;
      }
    </style>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body fixed-top" >
          <div class="container-fluid">
            <button
              data-mdb-collapse-init
              class="navbar-toggler"
              type="button"
              data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse " id="navbarExample01">
            <a href="../../index.php"><img src="../../img/logo.png" alt="" width="200px"></a>
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="../../index.php">Início</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="../institucional/sobre.php">Quem Somos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../institucional/contato.php">Contato</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../institucional/menu.php"> Menu</a>
                </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../cliente/listar.php">Cliente</a>
                </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../encomenda/listar.php">Encomenda</a>
                </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../entregador/listar.php">Entregador</a>
                </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../veiculo/listar.php">Veículo</a>
                </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../roteiro/listar.php">Roteiro</a>
                </li>
              </ul>
            </div>
          </div>
          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>
  
                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>
  
                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>
  
                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
        </nav>
        <!-- Navbar -->
      </header>

<section class="background-radial-gradient overflow-hidden">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Cadastro de Encomendas<br />
            <span style="color: hsl(218, 81%, 75%)">rápido e simples</span>
          </h1>
          <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
            Registre novas encomendas de forma simples e organizada.<br><br>
          
            Preencha as informações necessárias para garantir o controle
            completo da entrega, desde o envio até a finalização.<br><br>
        
            Com poucos dados, você já pode acompanhar o status
            e manter sua operação sempre atualizada.
          </p>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
  
          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <form method="POST">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                <h4 class="mb-5 text-left"><strong>Editar Encomenda</strong></h4>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="form3Example4" class="form-control" name="descricao" value="<?= $encomenda['descricao'] ?? '' ?>"/>
                  <label class="form-label" for="form3Example4">Descrição: </label>
                </div>
  
                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="number" id="form3Example4" class="form-control" step="0.01" name="peso" value="<?= $encomenda['peso'] ?? '' ?>"/>
                  <label class="form-label" for="form3Example4">Peso: </label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="number" id="form3Example4" class="form-control" step="0.01" name="valor" value="<?= $encomenda['valorDeclarado'] ?? '' ?>"/>
                  <label class="form-label" for="form3Example4">Valor: </label>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="time" id="form3Example4" class="form-control" step="0.01" name="horario" value="<?= $encomenda['horarioPrevisto'] ?? '' ?>"/>
                  <label class="form-label" for="form3Example4">Horário: </label>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="form3Example4" class="form-control" step="0.01" name="situacao" value="<?= $encomenda['situacao'] ?? '' ?>"/>
                  <label class="form-label" for="form3Example4">Situação: </label>
                </div>
                <!-- CLIENTE -->
<div class="form-outline mb-4">
  <select class="form-select" name="cliente" required>
    
    <option disabled>Selecione um cliente</option>

    <?php while($c = mysqli_fetch_assoc($clientes)){ ?>
      <option value="<?= $c['codigo'] ?>"
        <?= ($c['codigo'] == ($encomenda['codigoCliente'] ?? 0)) ? 'selected' : '' ?>>
        
        <?= $c['nome'] ?>
      
      </option>
    <?php } ?>

  </select>
</div>

<!-- ROTEIRO -->
<div class="form-outline mb-4">
  <select class="form-select" name="roteiro" required>
    
    <option disabled>Selecione um roteiro</option>

    <?php while($r = mysqli_fetch_assoc($roteiros)){ ?>
      <option value="<?= $r['codigo'] ?>"
        <?= ($r['codigo'] == ($encomenda['codigoRoteiroEntrega'] ?? 0)) ? 'selected' : '' ?>>
        
        <?= $r['regiaoEntrega'] ?> - <?= $r['diaEntrega'] ?>
      
      </option>
    <?php } ?>

  </select>
</div>
                
                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block-mb-4">Salvar</button>
                <!-- Register buttons -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-body-tertiary text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center border-bottom">
    
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->

              <img src="../../img/logo.png" alt="" width="250px">
              <br><br>
            <p class="text-center">
            Mais do que entregas, movimentamos tecnologia com confiança, eficiência e inovação.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
            Serviços
            </h6>
            <p>
              <a href="#!" class="text-reset">Entrega Expressa</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Transporte Seguro</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Rastreamentos</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Logística Tecnológica</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
            Links úteis
            </h6>
            <p>
              <a href="#!" class="text-reset">Termos de uso</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Política de privacidade</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Dúvidas frequentes</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Suporte</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contato</h6>
            <p><i class="fas fa-home me-3"></i> Santo André - SP, Brasil</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              contato@cargotech.com.br
            </p>
            <p><i class="fas fa-phone me-3"></i> (11) 99999-9999</p>
            <p><i class="fa-solid fa-comment me-3"></i> (11) 96107-7861</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2026 Copyright: Desenvolvido por
      <a class="text-reset fw-bold" href="https://github.com/SilvioCalixto" target="_blank">Silvio Calixto</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <!-- Section: Design Block -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
  
  </body>
</html>

