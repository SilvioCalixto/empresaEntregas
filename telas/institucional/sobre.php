<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CargoTech - Quem Somos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
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
                  <a class="nav-link " href="sobre.php">Quem Somos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contato.php">Contato</a>
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
        .carousel-inner img {
        border-radius: 15px;
      }

      #carouselExampleInterval {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0,0,0,0.3);
}

    </style>
  
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
            Por que a<br />
            <span style="color: hsl(218, 81%, 75%)">CargoTech ?</span>
          </h1>
          <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
      
            Escolher a CargoTech é optar por segurança, agilidade e tecnologia em cada entrega.
            <br>
            Somos especializados no transporte de produtos tecnológicos, entendendo a importância e o valor de cada             item. Por isso, trabalhamos com processos organizados, rastreamento inteligente e um sistema eficiente            que garante controle total das entregas.
            <br>
            Nosso diferencial está na combinação entre logística e tecnologia, proporcionando mais confiabilidade,            transparência e rapidez em todas as etapas.
            <br>
            Na CargoTech, sua entrega não é apenas transportada — ela é tratada com prioridade.
          </p>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

          <div class="row">
            <div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel" data-mdb-carousel-init>
              <div class="carousel-inner">
                <div class="carousel-item active" data-mdb-interval="10000">
                  <img src="../../img/1.webp" class="d-block w-100" alt="homem segurando uma caixa de papelão"/>
                </div>
                <div class="carousel-item" data-mdb-interval="2000">
                  <img src="../../img/3.jpg" class="d-block w-100" alt="Homens com caixas de papelão"/>
                </div>
                <div class="carousel-item">
                  <img src="../../img/4.webp" class="d-block w-100" alt="Caixas de papelão"/>
                </div>
                <div class="carousel-item">
                  <img src="../../img/6.jpg" class="d-block w-100" alt="homem com caneta anotando as informações das caixas de papelão"/>
                </div>
              </div>
              <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    
  <br>
  <div class="container pb-5" style="z-index: 10">
  <div class="row text-center mt-4">
    <div class="col-md-4 pb-5">
      <h4 style="color: hsl(218, 81%, 95%)">Segurança</h4>
      <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">Proteção total para produtos tecnológicos de alto valor.</p>
    </div>

    <div class="col-md-4" >
      <h4 style="color: hsl(218, 81%, 95%)">Agilidade</h4>
      <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">Entregas rápidas com rotas otimizadas.</p>
    </div>

    <div class="col-md-4" >
      <h4 style="color: hsl(218, 81%, 95%)">Tecnologia</h4>
      <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">Rastreamento e controle inteligente em tempo real.</p>
    </div>
  
    </div>
    
    <div class="row">
      <div class="col-md" >
        <h2><span style="color: hsl(218, 81%, 75%)">Foco Tecnológico</span></h2>
       
        <p style="color: hsl(218, 81%, 95%)">Focada exclusivamente no transporte de produtos tecnológicos, garantindo um cuidado diferenciado para itens de alto valor como equipamentos eletrônicos em geral.
        <br>
        Nossa operação é pensada para minimizar riscos e garantir que cada produto chegue com segurança e integridade ao destino.</p>
      </div>
      <div class="col-md">
      <h2><span style="color: hsl(218, 81%, 75%)">Eficiência Logística</span></h2>

        <p style="color: hsl(218, 81%, 95%)">Utilizamos processos organizados e rotas otimizadas para garantir entregas rápidas e eficientes. Nosso sistema permite acompanhar cada etapa da entrega, trazendo mais controle e previsibilidade.
        <br>
        Com isso, conseguimos reduzir atrasos e melhorar a experiência do cliente.</p>
      </div>
      <div class="col-md">
      <h2><span style="color: hsl(218, 81%, 75%)">Inovação e Controle</span></h2>

        <p style="color: hsl(218, 81%, 95%)">A tecnologia está no centro da nossa operação. Oferecemos rastreamento inteligente e gerenciamento completo das entregas, proporcionando transparência e confiança em todo o processo.
        <br>
        Na CargoTech, cada entrega é monitorada para garantir qualidade e eficiência.</p>
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

