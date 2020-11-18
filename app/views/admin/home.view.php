<?php require('app/views/partials/head-adm.php') ?>

      <div class="wrapper">
        <div id="sidenav" class="sidenav">
          <a class="cool-link mb-2" href="/admin/home">
              <i class="fas fa-home"></i>
              <span class="ml-1">Home</span>
          </a>
          <a class="cool-link mb-2" href="/admin/users">
              <i class="fas fa-users"></i>
              <span class="ml-1">Usuários</span>
          </a>
          <a class="cool-link mb-2" href="/admin/category">
              <i class="fas fa-table"></i>
              <span class="ml-1">Categorias</span>
          </a>
          <a class="cool-link mb-2" href="/admin/product">
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
      
<?php require('app/views/partials/footer-adm.php') ?>
