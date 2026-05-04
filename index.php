<?php
session_start();

require_once('DAO/UsuarioDAO.php');

use Projeto\DAO\UsuarioDAO;

$dao = new UsuarioDAO();

if($_POST){

  // valida termos
  if(!isset($_POST['termos'])){
      echo "Você precisa aceitar os termos!";
      exit;
  }

  $usuario = $dao->login(
      $_POST['email'],
      $_POST['senha']
  );

  if($usuario){
      $_SESSION['usuario'] = $usuario['nome'];

      header("Location:telas/institucional/menu.php");
      exit;
  } else {
      echo "Email ou senha inválidos!";
  }
}
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CargoTech</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  </head>
  <body>
      
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body fixed-top">
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
            <a href="index.php"><img src="img/logo.png" alt="" width="200px"></a>
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="index.php">Início</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="telas/institucional/sobre.php">Quem Somos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="telas/institucional\contato.php">Contato</a>
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

  <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Tecnologia em movimento<br />
            <span style="color: hsl(218, 81%, 75%)">Segurança em cada entrega</span>
          </h1>
          <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          A CargoTech é especialista em logística para produtos tecnológicos, oferecendo entregas rápidas, seguras e com rastreamento inteligente em tempo real.
          <br>
          Sabemos que equipamentos tecnológicos exigem cuidado, precisão e confiança. Por isso, desenvolvemos uma operação focada em segurança, agilidade e controle total das entregas.
          <br>
          Com tecnologia aplicada à logística, garantimos que cada produto chegue ao seu destino com qualidade, eficiência e transparência em todas as etapas.
          <br>
          CargoTech — conectando tecnologia e velocidade em cada entrega.
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
                <h4 class="mb-5 text-left"><strong>Tem uma conta?</strong></h4>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    
                    <input type="email" id="form3Example3" class="form-control" name="email"/>
                    <label class="form-label" for="form3Example3">E-mail: </label>
                </div>
  
                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control" name="senha"/>
                  <label class="form-label" for="form3Example4">Senha: </label>
                </div>
  
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-left mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked name="termos"/>
                  <label class="form-check-label" for="form2Example33">
                    Concordo com os <a href="#">termos de uso</a>
                  </label>
                </div>
  
                <!-- Submit button -->

                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block-mb-4" href="cadastrar.php">Login</button>
                <!-- Register buttons -->
                <div class="text-left">
                  <br>
                  <p>Não tem uma conta? <a href="telas/usuario/cadastrar.php">Cadastre-se </a></p>
                </div>
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

              <img src="img/logo.png" alt="" width="250px">
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
      <a class="text-reset fw-bold" href="!#">Heloísa</a>
      &
      <a class="text-reset fw-bold" href="https://github.com/SilvioCalixto" target="_blank">Silvio Calixto</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <!-- Section: Design Block -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
  </body>
</html>

