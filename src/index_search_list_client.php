<?php 

  include ('connect.php');

  require ('my_heard.php');

?>

<body>
  
  <div class="container my_container_main mt-5">

    <form action="" method="POST">
      <div class="my-button-search col-lg-4 border border-0 rounded-top text-center"> 
        <label class="pt-1" for="">Buscar por CPF</label>

      </div>
      <div class="form-inline mt-3">
  
        <input class="form-control col-lg-4 col-sm-12 mr-lg-2 mr-sm-0" type="text" name="cpf_client" placeholder="Digite o número do CPF..." alt="Informe seu CPF" required>
  
        <button class="col-lg-1 col-sm-12 mt-lg-0 mt-sm-2 btn btn-my6-color text-center" type="submit">Pesquisar</button>
      </div>
    </form>

    <h3 class="col-sm-12 mt-4 mb-4 border-left border-info text-left">Clientes</h3>
    <div class="table-responsive">
      <table class="table table-striped table-scrollable table-dark text-center rounded">
        <thead>
          <tr>
            <th scope="col w-3">id</td>
            <th scope="col w-3">Nome</td>
            <th scope="col w-3">Sobrenome</td>
            <th scope="col w-3">Telefone</td>

            <th scope="col w-3">Celular</td>
            <th scope="col w-3">CPF</td>
            <th scope="col w-3">EMAIL</td>
            <th scope="col w-3">Rua</td>

            <th scope="col w-3">Número</td>
            <th scope="col w-3">Bairro</td>
            <th scope="col w-3">Cidade</td>
            <th scope="col w-3">Estado</td>
            <th scope="col w-3">CEP</td>

          </tr>

        </thead>

        <tbody>
          <?php

            if(isset($_POST["cpf_client"])){
              $cpf_client = $_POST["cpf_client"];

              $sql_type = "SELECT * FROM tbl_client WHERE cpf_client LIKE '%$cpf_client%'";
              $result = mysqli_query($connectiondb, $sql_type);
              
              if ($result->num_rows > 0){
                while ($row = mysqli_fetch_assoc($result)){
                  require ('index_search_client.php');
                }
              }
            }else{
              $sql_type = "SELECT * FROM tbl_client";
              $result = mysqli_query($connectiondb, $sql_type);

              if ($result->num_rows > 0){
                while ($row = mysqli_fetch_assoc($result)){
                  require ('index_search_client.php');
                }
              }
            }

          ?>
        </tbody>

      </table>

    </div>

  </div>

</body>
