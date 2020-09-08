<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Acertando Compras</title>

    <!-- LINK -->

    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/brands.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/solid.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/regular.css">

    <!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"> -->
    
    <link rel="stylesheet" href="../node_modules/bootstrap/compile/bootstrap.css">
    <link rel="stylesheet" href="../styles/css/mystyles.css">

    <!-- SCRIPTS -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script>
      $(function(){
        $('#search_client').autocomplete({
          source : 'index_search_list_client.php'
        });

      });
    </script>

    <script class="text/javascript" src="search.js"></script> -->
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-my5-color text-white">
      <div class="container">
        <a class="navbrand" href="index.php">
          <img class="logo" src="./assets/logo-main.png" alt="logo do Acertando Compras">
        </a>

        <a type="button" class="navbar-toggler bg-my6-color btn btn-outline-my7-color text-white" data-toggle="collapse" data-target="#navbarMainSite">
          <i class="fas fa-power-off text-white"></i>
        </a>

        <div class="collapse navbar-collapse mt-3 mt-sm-4" id="navbarMainSite">
          <ul class="navbar-nav ml-auto">
            <div class="container">
              <li class="nav-item">
                <a class="nav-link text-white" href="index.php">
                  Início
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="index_category.php">
                  Categoria
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="index_product.php">
                  Produtos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="index_sale.php">
                  Vendas
                </a>
              </li>

            </div>

          </ul>

          <!-- onsubmit="return searchF(this)" -->
          <form method="POST" class="form-inline" action="">
            <input class="form-control col-lg-9 col-12 mt-lg-0 mt-sm-4" type="text" id="search" name="search" placeholder="Pesquisar produto...">
            <button class="col-lg-2 col-12 ml-lg-2 btn btn-my6-color" type="submit">Ok</button>
          </form>

          <div class="dropdown text-center">
            <button class="col-12 ml-lg-2 btn btn-my3-color dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Usuário
            </button>
            <div class="dropdown-menu col-12" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_new_client">
                Novo Cliente
              </a>
              <a class="dropdown-item" href="index_search_list_client.php">
                Lista de Clientes
              </a>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_search_client">
                Buscar cliente
              </a>
            </div>
          </div>

        </div>

      </div>

    </nav>
    <div class="container my_container_main mt-3">
      <!-- Modal Buscar Cliente -->
      <div class="modal fade" id="modal_search_client" tabindex="-1" aria-labelledby="Search" aria-hidden="true">
        <div class="modal-dialog modal-dm">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Busca por Cliente</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="far fa-times-circle text-white" aria-hidden="true"></i>

              </button>

            </div>
            <div class="modal-body">
              <form action="new_search_client.php" method="POST">
                <div class="form-group">
                    <label for="">Digite o CPF</label>

                    <input class="form-control" type="text" name="client_cpf" placeholder="Digite o número do CPF..." alt="Informe seu CPF" required>
                </div>

                <button type="submit" class="btn btn-my6-color">
                    Confirmar
                </button>

              </form>

            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-my2-color border border-white" data-dismiss="modal">Fechar</button>
        
            </div>

          </div>

        </div>

      </div>

      <!-- Modal Listar Cliente
      <div class="modal show" id="modal_list_client" tabindex="-1" aria-labelledby="List Client" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Lista de Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i class="far fa-times-circle text-white" aria-hidden="true"></i>

                </button>

              </div>
              <div class="modal-body mx-2 mb-1 mt-1">

                <h5 class="col-sm-12 mt-4 mb-4 text-center">Clientes</h5>
                <table class="table table-striped table-dark rounded">
                  <thead>
                    <tr>
                      <th scope="col p-1">id</td>
                      <th scope="col p-1">Nome</td>
                      <th scope="col p-1">Sobrenome</td>
                      <th scope="col p-1">Telefone</td>

                      <th scope="col p-1">Celular</td>
                      <th scope="col p-1">CPF</td>
                      <th scope="col p-1">EMAIL</td>
                      <th scope="col p-1">Rua</td>

                      <th scope="col p-1">Número</td>
                      <th scope="col p-1">Bairro</td>
                      <th scope="col p-1">Cidade</td>
                      <th scope="col p-1">Estado</td>
                      <th scope="col p-1">CEP</td>

                    </tr>

                  </thead>

                  <tbody>
                    <?php

                      // $sql_type = "SELECT * FROM tbl_client";
                      // $result = mysqli_query($connectiondb, $sql_type);

                      // if ($result->num_rows > 0){
                      //   while ($row = mysqli_fetch_assoc($result)){
                      //     echo '<tr>';
                      //     echo '<th scope="row">'. $row['id_client'] .'</th>';
                      //     echo '<td class="p-1">'. $row['name_client'] .'</td>';
                      //     echo '<td class="p-1">'. $row['surname_client'] .'</td>';
                      //     echo '<td class="p-1">'. $row['phone_client'] .'</td>';
                      //     echo '<td class="p-1">'. $row['smartphone_client'] .'</td>';

                      //     echo '<td class="p-1">'. $row['cpf_client'] .'</td>';
                      //     echo '<td class="p-1">'. $row['email_client'] .'</td>';
                      //     echo '<td class="p-1">'. $row['street_client'] .'</td>';
                      //     echo '<td class="p-1">'. $row['number_client'] .'</td>';
                          
                      //     echo '<td class="p-1">'. $row['neighborhood_client'] .'</td>';
                      //     echo '<td class="p-1">'. $row['city_client'] .'</td>';
                      //     echo '<td class="p-1">'. $row['state_client'] .'</td>';
                      //     echo '<td class="p-1">'. $row['cep_client'] .'</td>';
                      //     echo '</tr>';
                      //   }
                      // }
                    ?>
                  </tbody>

                </table>

              </div>
              <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-my2-color border border-white" data-dismiss="modal">Fechar</button>
        
              </div>

            </div>

          </div>

        </div>

      </div> -->

      <!-- Modal Criar Cliente -->
      <div class="modal fade" id="modal_new_client" tabindex="-1" aria-labelledby="New Client" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Novo Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i class="far fa-times-circle text-white" aria-hidden="true"></i>

                </button>

              </div>
              <div class="modal-body">
                <form action="new_client.php" method="POST">
                  <div class="form-group">
                    <label for="">Nome</label>

                    <input class="form-control" type="text" name="name_client" placeholder="Digite o nome de usuário..." alt="Informe seu nome de usuário" required>

                  </div>

                  <div class="form-group">
                    <label for="">Sobrenome</label>

                    <input class="form-control" type="text" name="surname_client" placeholder="Digite a seu Sobrenome..." alt="Informe seu sobrenome" required>

                  </div>

                  <div class="form-group">
                    <label for="">Telefone</label>

                    <input class="form-control" type="text" name="phone_client" placeholder="Digite seu número..." alt="Informe seu número" required>

                  </div>

                  <div class="form-group">
                    <label for="">Celular</label>

                    <input class="form-control" type="text" name="smartphone_client" placeholder="Digite seu número..." alt="Informe seu número" required>

                  </div>

                  <div class="form-group">
                    <label for="">CPF</label>

                    <input class="form-control" type="text" name="cpf_client" placeholder="Digite o CPF..." alt="Informe seu CPF" required>

                  </div>

                  <div class="form-group">
                    <label for="">E-MAIL</label>

                    <input class="form-control" type="text" name="email_client" placeholder="Digite o seu e-mail..." alt="Informe seu e-mail" required>

                  </div>

                  <div class="form-group">
                    <label for="">Rua</label>

                    <input class="form-control" type="text" name="street_client" placeholder="Digite o nome da sua Rua..." alt="Informe o nome da sua Rua">

                  </div>

                  <div class="form-group">
                    <label for="">Número da casa</label>

                    <input class="form-control" type="text" name="number_client" placeholder="Digite o número da casa..." alt="Informe o número da casa" required>

                  </div>

                  <div class="form-group">
                    <label for="">Bairro</label>

                    <input class="form-control" type="text" name="neighborhood_client" placeholder="Digite o nome do bairro..." alt="Informe o nome do Bairro" required>

                  </div>

                  <div class="form-group">
                    <label for="">Cidade</label>

                    <input class="form-control" type="text" name="city_client" placeholder="Digite o nome da sua cidade..." alt="Informe o nome da sua cidade" required>

                  </div>

                  <div class="form-group">
                    <label for="">Estado</label>

                    <input class="form-control" type="text" name="state_client" placeholder="Digite o nome do seu estado..." alt="Informe o nome do seu estado" required>

                  </div>

                  <div class="form-group">
                    <label for="">CEP</label>

                    <input class="form-control" type="text" name="cep_client" placeholder="Digite  o nome do CEP..." alt="Informe  o nome do CEP" required>

                  </div>

                  <button type="submit" class="mb-5 btn btn-my6-color">
                    Confirmar
                  </button>

                </form>

              </div>
              <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-my2-color border border-white" data-dismiss="modal">Fechar</button>
        
              </div>

            </div>

          </div>

        </div>

      </div>
    </div>
  </body>
</html>