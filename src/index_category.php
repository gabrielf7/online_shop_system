<?php 

  include ("connect.php");

  require ("my_heard.php");

?>
<body>

  <div class="container my_container_main mt-5">
    <h3 class="col-sm-12 mt-4 mb-4 text-center">Categoria</h3>

    <div class="table-responsive">
      <table class="table text-center rounded">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</td>
            <th scope="col">Nome</td>
            <th scope="col">Descrição</td>
  
          </tr>
  
        </thead>
  
        <tbody class="text-dark">
          <?php
  
            $sql_type = "SELECT * FROM tbl_category";
            $resquery = $connectiondb->query($sql_type);
            if ($resquery->num_rows > 0){
              while ( $row = $resquery->fetch_assoc()){
                echo '<tr>';
                echo '<th scope="row">'. $row['id_category'] .'</th>';
                echo '<td>'. $row['name_category'] .'</td>';
                echo '<td>'. $row['description_category'] .'</td>';
                echo '</tr>';
              }
            }
  
          ?>
        </tbody>
  
      </table>

    </div>

  </div>

</body>
