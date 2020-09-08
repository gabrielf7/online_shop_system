<?php 

  include ("connect.php");

  require ("my_heard.php");

?>
<body>
  
  <div class="container my_container_main mt-5">
    <h3 class="col-sm-12 mt-4 mb-4 text-center">Produto</h3>
    
    <div class="table-responsive">
      <table class="table text-center rounded">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</td>
            <th scope="col">Nome</td>
            <th scope="col">Descrição</td>
            <th scope="col">Cateogria</td>
            <th scope="col">Valor</td>
            <th scope="col">Estoque</td>
  
          </tr>
  
        </thead>
  
        <tbody class="text-dark">
          <?php
  
            $sql_type = 
            " SELECT p.*, c.name_category
              FROM tbl_product as p
              INNER JOIN tbl_category as c
              ON p.id_category = c.id_category
              order by id_product ASC
            ";
  
            $result = $connectiondb->query($sql_type);
  
            if ($result->num_rows > 0){
              while ($row = $result->fetch_assoc()){
                echo '<tr>';
                echo '<th scope="row">'. $row['id_product'] .'</th>';
                echo '<td>'. $row['name_product'] .'</td>';
                echo '<td>'. $row['description_product'] .'</td>';
                echo '<td>'. $row['name_category'] .'</td>';
                echo '<td>'. $row['value_product'] .'</td>';
                echo '<td>'. $row['stock_product'] .'</td>';
                echo '</tr>';
              }
            }
  
          ?>
        </tbody>
  
      </table>

    </div>
    
  </div>

</body>

