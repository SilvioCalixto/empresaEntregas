<?php
session_start();
echo "Bem-vindo, " . $_SESSION['usuario'];
if(!isset($_SESSION['usuario'])){
    header("Location: ../../index.php");
    exit;
}

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bem-Vindo - CargoTech</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <style>
      body {
  background-color: hsl(218, 41%, 15%);
  background-image: radial-gradient(
    650px circle at 0% 0%,
    hsl(218, 41%, 35%) 15%,
    hsl(218, 41%, 30%) 35%,
    hsl(218, 41%, 20%) 75%,
    hsl(218, 41%, 19%) 80%,
    transparent 100%
  ),
    radial-gradient(
      1250px circle at 100% 100%,
      hsl(218, 41%, 45%) 15%,
      hsl(218, 41%, 30%) 35%,
      hsl(218, 41%, 20%) 75%,
      hsl(218, 41%, 19%) 80%,
      transparent 100%
    );
}
#card-custom {
  width: 350px;
  height: 500px;
  background: hsla(0, 0%, 100%, 0.15);
  backdrop-filter: blur(30px);
}

#shape-1 {
  height: 220px;
  width: 220px;
  bottom: -100px;
  left: -90px;
  background: radial-gradient(#44006b, #ad1fff);
  z-index: -10;
}
#shape-2 {
  border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
  top: -100px;
  right: 10px;
  width: 300px;
  height: 300px;
  background: radial-gradient(#44006b, #ad1fff);
  z-index: -10;
}
#chip {
  width: 50px;
}

.fade {
  animation-duration: 1s;
  animation-fill-mode: both;
  padding: auto;
  animation-name: fade-in;
}

.fade-delay-small {
  animation-delay: 0.15s;
}

.fade-delay-medium {
  animation-delay: 0.3s;
}
.fade-delay-big {
  animation-delay: 0.4s;
}
@keyframes slidein {
  0% {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

footer{
  background-color: aliceblue;
}

.cartao {
  padding: 100px 0;
}
    </style>
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
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="menu.php"> Menu</a>
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

      <div class="container vh-100 cartao">
  <div class="row gx-lg-5 h-100 d-flex align-content-center text-white">
    <div class="col-md-6 mb-4 mb-md-0 d-flex align-items-center">
      <div class="animation-delay fade">
        <h1 class="mb-4 opacity-90" style="color: hsl(218, 81%, 95%)">
          Oferta Exclusiva!
        </h1>

        <h5 class="mb-4 opacity-80" style="color: hsl(218, 81%, 90%)">
        Mais que entregas — uma experiência completa em tecnologia, crédito e vantagens.
        </h5>

        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          O Cartão CargoTech foi criado para oferecer mais controle, vantagens exclusivas e uma experiência completa aos nossos clientes.
          <br>
          Com ele, você acompanha suas entregas em tempo real, tem acesso prioritário aos serviços e uma gestão mais eficiente de todas as suas encomendas.
          <br>
          Além disso, o cartão funciona como uma solução de crédito, permitindo compras em grandes varejistas do setor tecnológico, com condições especiais e maior praticidade.
          <br>
          Clientes CargoTech também contam com benefícios exclusivos, como descontos em cinemas, teatros e parceiros selecionados.
          <br>
          Mais tecnologia, mais vantagens e mais controle em cada entrega.
        </p>

        <a
           class="btn btn-white btn-rounded btn-lg me-3 opacity-80"
           href="#"
           role="button"
           data-ripple-color="hsl(218, 41%, 45%)"
           >Peça Agora</a
          >
        <a
           class="btn btn-outline-white btn-rounded btn-lg opacity-80"
           href="#"
           role="button"
           >Saiba Mais</a
          >
      </div>
    </div>

    <div class="col-md-5 offset-md-1 mb-4 mb-md-0 position-relative">
      <div
           id="shape-1"
           class="
                  position-absolute
                  rounded-circle
                  shadow-5-strong
                  fade fade-delay-small
                  "
           ></div>
      <div
           id="shape-2"
           class="position-absolute shadow-5-strong fade fade-delay-medium"
           ></div>
      <div
           id="card-custom"
           class="card shadow-6 rounded-6 fade fade-delay-big card-custom"
           >
        <div class="card-body p-5 opacity-90 ls-widest">
          <h2>
            <strong>Membro</strong> <span class="fw-light">CargoTech</span>
          </h2>
        </div>
        <div
             class="card-footer px-5 border-0 opacity-90 ls-widest fw-light"
             >
          <img
               id="chip"
               class="mb-5"
               src="https://ascensus-youtube-projects.mdbgo.io/img/chip.png"
               alt="chip"
               />
          <h5 class="mb-5">4981 5678 9012 3456</h5>
          <p class="mb-2">John Dorian</p>
          <p class="mb-5">12/30</p>
        </div>
      </div>
    </div>
  </div>
</div>

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>

  <script>
  VanillaTilt.init(document.querySelectorAll(".card-custom"), {
    max: 25,
    speed: 400
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
  
  </body>
</html>