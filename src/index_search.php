<?php 

include 'connect.php';

require 'my_heard.php';

?>

<body>
  
  <div class="container my_container_main mt-5">

    <form action="" method="POST">
      Buscar: <input class="form-control" type="text" name="cpf_client">
      <button type="submit" class="btn btn-my6-color">Enviar</button>
    </form>

    <?php 
      // include_once 'connect.php';

      // $search_cpf_client = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);

      // $search_sql_db = "SELECT cpf_client FROM tbl_client WHERE cpf_client LIKE '%".$search_cpf_client."%'";

      // $search_result = $connectiondb->prepare($search_sql_db);
      //  $search_result->execute();

      //  while ($search_client_row = $search_client_row->fetch(PDO::FETCH_ASSOC)){
      //    $data[] = $search_client_row['cpf_client'];
      //  }

      // echo $data;

    ?>

    <h5 class="col-sm-12 mt-4 mb-4 text-center">Clientes</h5>
    <table class="table table-striped table-scrollable table-dark">
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

            $sql_type = "SELECT * FROM tbl_client WHERE cpf_client LIKE '$cpf_client' ";
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

</body>
