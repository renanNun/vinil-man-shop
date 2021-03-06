<?php require('app/views/partials/head.admin.php') ?>

<div id="main" class="container-fluid">
  <main>
    <h1 class="mt-4 mx-auto non-space">Listagem de Usúarios</h1>

    <button class="mt-4 mb-4 btn btn-warning btn-lg non-space" data-toggle="modal" data-target="#new">Adicionar Novo Usúario</button>

    <?php
    if (isset($_SESSION['sucessos']))
      foreach ($_SESSION['sucessos'] as $sucesso) : ?>
      <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Sucesso!</strong> <?= $sucesso ?>
      </div>
    <?php endforeach ?>

    <?php
    if (isset($_SESSION['erros']))
      foreach ($_SESSION['erros'] as $erro) : ?>
      <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Erro!</strong> <?= $erro ?>
      </div>
    <?php endforeach ?>

    <?php
    unset($_SESSION['sucessos']);
    unset($_SESSION['erros']);
    ?>


    <div class="card mb-4 w-auto">
      <div class="card-header">
        <div class="row mb-1">
          <div class="col-sm-12">
            <h4 class="ml-2 non-space">Usúarios</h4>
          </div>
        </div>
        <div id="second-line" class="row">
          <div class="col-sm-10">
            <div class="mr-auto barra-pesquisa">
              <form action="/admin/usuarios" method="GET" class="form-group form-navbar">
                <div class="input-group">
                  <input type="text" name="Pesquisa" class="form-control" placeholder="Pesquisar">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="card-body non-space">
            <div class="table-responsive">
              <table class="table table-bordered w-100" id="dataTable" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                  </tr>
                </tfoot>
                <tbody>

                  <?php
                  $usuariosQNT = 0;
                  foreach ($users as $user) :
                    if ($usuariosQNT < $pagina * 9 &&   $usuariosQNT >= ($pagina - 1) * 9) :
                  ?>

                      <tr>
                        <td>
                          <p><?= $user->name ?></p>
                        </td>
                        <td>
                          <p class="email-php non-space"><?= $user->email ?></p>
                        </td>
                        <td>
                          <button type="button" class="btn" data-toggle="modal" data-target="#view-user-<?= $user->id ?>"><i class="fas fa-eye"></i></button>
                          <button type="button" class="btn" data-toggle="modal" data-target="#edit-<?= $user->id ?>"><i class="fas fa-edit"></i></button>
                          <button type="button" class="btn" data-toggle="modal" data-target="#edit-password-<?= $user->id ?>"><i class="fas fa-user-lock"></i></button>
                          <button type="button" class="btn" data-toggle="modal" data-target="#delete-<?= $user->id ?>"><i class="fas fa-trash"></i></button>
                        </td>
                      </tr>
                    <?php endif;
                    $usuariosQNT++; ?>


                    <!--MODAL PARA DELETAR-->
                    <div class="modal" id="delete-<?= $user->id ?>" tabindex="-1" role="dialog">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Confirmação para deletar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Você confirma que deseja deletar o usuário: <?= $user->name ?>?</p>
                            <p>Esta ação é irrevessível</p>
                          </div>
                          <div class="modal-footer">
                            <form action="/admin/usuario/delete" method="POST">
                              <input type="hidden" name="id" value="<?= $user->id ?>">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                              <button type="submit" class="btn btn-danger">Confirmar</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--Edit-->
                    <div class="modal" id="edit-<?= $user->id ?>" tabindex="-1" role="dialog">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Editar <?= $user->name ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="/admin/usuario/edit" method="POST" class="form-group">
                              <input type="hidden" name="id" value="<?= $user->id; ?>">
                              <label>Nome</label>
                              <input type="text" name="name" class="form-control" value="<?= $user->name ?>"><br>
                              <label>Email</label><br>
                              <input type="text" name="email" class="form-control" value="<?= $user->email ?>"><br>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-success">Editar</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--Mudar a senha-->
                    <div class="modal" id="edit-password-<?= $user->id ?>" tabindex="-1" role="dialog">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Editar senha de <?= $user->name ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="/admin/usuario/change-password" method="POST" class="form-group">
                              <input type="hidden" name="id" value="<?= $user->id; ?>">
                              <label>Antiga Senha</label>
                              <input type="password" name="oldPassword" class="form-control"><br>
                              <label>Nova Senha</label><br>
                              <input type="password" name="newPassword" class="form-control"><br>
                              <label>Confirme a nova senha</label><br>
                              <input type="password" name="newPasswordCheck" class="form-control"><br>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-success">Editar</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--Modal de visualizar usuário-->
                    <div class="modal" id="view-user-<?= $user->id ?>" tabindex="-1" role="dialog">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Vizualizar Usuário</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="form-group">
                              <label>
                                <p class="nome-php"><?= $user->name ?></p>
                              </label><br>
                              <label>
                                <p class="email-php"><?= $user->email ?></p>
                              </label><br>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>

                  <?php endforeach; ?>
                </tbody>
              </table>


              <?php

              function unset_uri_var($variable, $uri)
              {
                $parseUri = parse_url($uri);
                $arrayUri = array();
                parse_str($parseUri['query'], $arrayUri);
                unset($arrayUri[$variable]);
                $newUri = http_build_query($arrayUri);
                $newUri = $parseUri['path'] . '?' . $newUri;
                return $newUri;
              }

              //Anterior e posterior
              $anterior = $pagina - 1;
              $posterior = $pagina + 1;
              ?>

              <nav class="nav justify-content-end">
                <?php if ($anterior != 0) : ?>

                  <?php if (isset($_GET) && !empty($_GET) && ((isset($_GET['Pesquisa']) && !empty($_GET['Pesquisa'])) || (isset($_GET['Categoria']) && !empty($_GET['Categoria'])))) :
                    $url = unset_uri_var('pagina', basename($_SERVER['REQUEST_URI']));
                  ?>
                    <li class="page-item"><a class="page-link produtos-paginas" href="<?= $url ?>&pagina=<?= $anterior ?>" tabindex="-1"><i class="fas fa-arrow-left"></i> Anterior</a></li>
                  <?php else : ?>
                    <li class="page-item"><a class="page-link produtos-paginas" href="/admin/produto?pagina=<?= $anterior ?>" tabindex="-1"><i class="fas fa-arrow-left"></i> Anterior</a></li>
                  <?php endif; ?>

                <?php endif ?>

                <?php

                if ($pagina > 4) {
                  $i = $pagina - 5;
                } else if ($pagina > 2) {
                  $i = $pagina - 3;
                } else {
                  $i = $pagina - 1;
                }

                if ($totalDeLinks - $i > 8) {
                  $total = $i + 8;
                } else {
                  $total = $totalDeLinks;
                  $i = $total;
                  for ($k = 0; $k < 8; $k++) {
                    if ($i > 0) {
                      $i--;
                    }
                  }
                }

                for ($i = $i; $i < $total; $i++) { ?>

                  <?php if (isset($_GET) && !empty($_GET) && ((isset($_GET['Pesquisa']) && !empty($_GET['Pesquisa'])) || (isset($_GET['Categoria']) && !empty($_GET['Categoria'])))) :
                    $url = unset_uri_var('pagina', basename($_SERVER['REQUEST_URI']));
                  ?>
                    <li class="page-item <?php if (($i + 1) == $pagina) : ?> produtos-paginas-clicado <?php endif ?>"><a class="page-link produtos-paginas <?php if (($i + 1) == $pagina) : ?> produtos-paginas-clicado <?php endif ?>" href="<?= $url ?>&pagina=<?= $i + 1 ?>"><?= $i + 1 ?></a></li>
                  <?php else : ?>
                    <li class="page-item <?php if (($i + 1) == $pagina) : ?> produtos-paginas-clicado <?php endif ?>"><a class="page-link produtos-paginas <?php if (($i + 1) == $pagina) : ?> produtos-paginas-clicado <?php endif ?>" href="/admin/produto?pagina=<?= $i + 1 ?>"><?= $i + 1 ?></a></li>
                  <?php endif; ?>

                <?php } ?>

                <?php if ($posterior <= $totalDeLinks) : ?>


                  <?php if (isset($_GET) && !empty($_GET) && ((isset($_GET['Pesquisa']) && !empty($_GET['Pesquisa'])) || (isset($_GET['Categoria']) && !empty($_GET['Categoria'])))) :
                    $url = unset_uri_var('pagina', basename($_SERVER['REQUEST_URI']));
                  ?>
                    <li class="page-item"><a class="page-link" href="<?= $url ?>&pagina=<?= $posterior ?>" tabindex="-1">Próxima <i class="fas fa-arrow-right"></i></a></li>
                  <?php else : ?>
                    <li class="page-item"><a class="page-link" href="/admin/produto?pagina=<?= $posterior ?>" tabindex="-1">Próxima <i class="fas fa-arrow-right"></i></a></li>
                  <?php endif; ?>

                <?php endif ?>

                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

<!--MODAIS DO BOOTSTRAP-->

<!--criar novo-->
<div class="modal" id="new" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Criando novo usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form" class="form-group" action="/admin/usuario/create" method="POST">
          <label>Nome</label>
          <input type="text" name="name" class="form-control" placeholder="Nome do Usuário"><br>
          <label>Email</label><br>
          <input type="email" name="email" class="form-control" placeholder="exempo@exemplo.com"><br>
          <label>Password</label><br>
          <input type="password" name="password" class="form-control" placeholder="*****"><br>
          <label>Confirme sua senha</label>
          <input type="password" name="password-controller" class="form-control" placeholder="*****">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-success" data-target="form">Criar novo Usuário</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php require('app/views/partials/footer.admin.php') ?>