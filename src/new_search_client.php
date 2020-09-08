<?php 

  require ("connect.php");

  require ("my_heard.php");

?>
<body>
  
  <div class="container my_container_main mt-5">
    <h3 class="col-sm-12 mt-4 mb-4 text-center">Cliente</h3>
    
    <div class="table-responsive">
      <table class="table text-center">
        <thead class="thead-dark">
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

        <tbody class="text-dark">
          <?php
            
            $client_cpf = $_POST["client_cpf"];
      
            $sql_db = "SELECT * FROM tbl_client WHERE cpf_client LIKE '%$client_cpf%' ";
      
            $data = mysqli_query($connectiondb, $sql_db);
      
            $quantity_data = mysqli_num_rows($data);
      
            if($quantity_data == 0){
              echo "CPF não cadastrado";
            }
            else{
              while($row = mysqli_fetch_assoc($data)){
                echo '<tr>';
                echo '<th scope="row">'. $row['id_client'] .'</th>';
                echo '<td class="p-1">'. $row['name_client'] .'</td>';
                echo '<td class="p-1">'. $row['surname_client'] .'</td>';
                echo '<td class="p-1">'. $row['phone_client'] .'</td>';
                echo '<td class="p-1">'. $row['smartphone_client'] .'</td>';

                echo '<td class="p-1">'. $row['cpf_client'] .'</td>';
                echo '<td class="p-1">'. $row['email_client'] .'</td>';
                echo '<td class="p-1">'. $row['street_client'] .'</td>';
                echo '<td class="p-1">'. $row['number_client'] .'</td>';
                
                echo '<td class="p-1">'. $row['neighborhood_client'] .'</td>';
                echo '<td class="p-1">'. $row['city_client'] .'</td>';
                echo '<td class="p-1">'. $row['state_client'] .'</td>';
                echo '<td class="p-1">'. $row['cep_client'] .'</td>';
                echo '</tr>';
              }
            }
      
          ?>

        </tbody>

      </table>

    </div>

  </div>
</body>
