<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empresa de Entregas</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sobre.php">Quem nós somos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contato.php">contato</a>
                </li>
              </ul>
            </div>
          </div>
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
    </style>
  
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
            Quem<br />
            <span style="color: hsl(218, 81%, 75%)">nós somos ?</span>
          </h1>
          <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Temporibus, expedita iusto veniam atque, magni tempora mollitia
            dolorum consequatur nulla, neque debitis eos reprehenderit quasi
            ab ipsum nisi dolorem modi. Quos?Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti facilis possimus animi ad unde ullam impedit omnis. Praesentium, eum fugit, totam soluta a aliquid, quam velit autem non rerum Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nisi autem mollitia reprehenderit nam ad ex ullam, officia commodi quibusdam error voluptate, atque pariatur consectetur libero adipisci soluta laudantium repudiandae?
          </p>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

          <div class="row">
            <div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel" data-mdb-carousel-init>
              <div class="carousel-inner">
                <div class="carousel-item active" data-mdb-interval="10000">
                  <img src="img/1.webp" class="d-block w-100" alt="homem segurando uma caixa de papelão"/>
                </div>
                <div class="carousel-item" data-mdb-interval="2000">
                  <img src="img/3.jpg" class="d-block w-100" alt="Homens com caixas de papelão"/>
                </div>
                <div class="carousel-item">
                  <img src="img/4.webp" class="d-block w-100" alt="Caixas de papelão"/>
                </div>
                <div class="carousel-item">
                  <img src="img/6.jpg" class="d-block w-100" alt="homem com caneta anotando as informações das caixas de papelão"/>
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
  </section>

  <br>
  <div class="container">
    <div class="row">
      <div class="col-md">
        <h2>Nosso Trabalho</h2>
       
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe mollitia est minus sequi pariatur veritatis, quos, eligendi alias laudantium accusamus qui suscipit ducimus. Rerum velit, illo nisi odit hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, omnis maiores magnam dolor unde animi beatae nisi nam ea quas. Aperiam dolore ad officiis deserunt facilis reiciendis impedit, quidem dolorem.</p>
      </div>
      <div class="col-md">
        <h2>Diferenciais</h2>

        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, accusantium laborum reprehenderit perspiciatis omnis exercitationem distinctio repudiandae corporis dolorem optio deserunt ad commodi expedita corrupti, delectus autem obcaecati accusamus Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic enim unde inventore odio doloremque iure modi commodi! Iste facere porro consequuntur ratione eius nesciunt, eos, sit exercitationem fuga sequi quos.</p>
      </div>
      <div class="col-md">
        <h2>proposito</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, incidunt? Repudiandae molestias harum, minima consectetur cupiditate sint nemo numquam dolores sit officia voluptas? Soluta, quod iure beatae ullam provident vel?Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis molestias esse excepturi id. Tempora, aliquid eligendi nam quod qui molestias, cum similique earum adipisci, minus sit dolore. Numquam, aut accusantium.</p>
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
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
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
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2026 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <!-- Section: Design Block -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>