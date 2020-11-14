<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>Vinilman - Admin</title>
        <link rel="icon" type="image/png" href="img/logo.png">


        <script src="https://kit.fontawesome.com/f74eef7211.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    
    <body>
      <nav id="navbar" class="nav navbar-fixed-top navbar-expand-sm navbar-color-bg shadow">
          <a class="navbrand ml-3" href="#">
              <img src="img/logo.png" alt="logo">
          </a>
            
          <button class="btn mb-2 mr-auto ml-3" id="btn-abreSidebar" type="button" onclick="toggleButton()">
              <i class="fas fa-bars"></i>
          </button>

          <button id="sign-out"  class="btn mb-2 ml-auto mr-3">
              <i class="fas fa-sign-out-alt fa-lg"></i>
          </button>
      </nav>

      <div class="wrapper">
        <div id="sidenav" class="sidenav">
          <a class="cool-link mb-2" href="#">
              <i class="fas fa-home"></i>
              <span class="ml-1">Home</span>
          </a>
          <a class="cool-link mb-2" href="#">
              <i class="fas fa-users"></i>
              <span class="ml-1">Usuários</span>
          </a>
          <a class="cool-link mb-2" href="#">
              <i class="fas fa-table"></i>
              <span class="ml-1">Categorias</span>
          </a>
          <a class="cool-link mb-2" href="#">
              <i class="fas fa-record-vinyl"></i>
              <span class="ml-1">Produtos</span>
          </a>
        </div>
    
        <div id="main" class="container-fluid">
            <main>
              <!-- non-space -->
              <h2 class="mt-4 mx-auto">Bem vindo Admin</h2>
              <!-- Cards -->
              <!-- Primeira Row -->
              <div class="row">
                <div class="col-sm-6">
                  <div class="card cartao">
                    <div class="card-body">
                      <h5 class="card-title"><i class="fas fa-compact-disc card-icon"></i>Produtos</h5>
                      <p class="card-text">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae in faucibus.</p>
                      <a href="#" class="btn btn-dark">Ir para Produtos</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card cartao">
                    <div class="card-body">
                      <h5 class="card-title"><i class="fas fa-table card-icon"></i>Categorias</h5>
                      <p class="card-text">Aenean tempus malesuada mi interdum volutpat. Ut maximus libero lorem, sit amet rutrum.</p>
                      <a href="#" class="btn btn-dark">Ir para Categorias</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ---Segunda Row de cards--- -->
              <div class="row">
                <div class="col-sm-6">
                  <div class="card cartao">
                    <div class="card-body">
                      <h5 class="card-title"><i class="fas fa-users card-icon"></i>Usuários</h5>
                      <p class="card-text">Donec aliquam, magna vehicula aliquam porta.</p>
                      <a href="#" class="btn btn-dark">Ir para Usuários</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Fim cards -->
            </main>
        </div>
        <!-- Fim container fluid -->
      </div>
      
       

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/script.js"></script>
    </body>
</html>