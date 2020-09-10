<?php 

  include ("connect.php");

?>

<?php

  session_start();

  if(!isset($_SESSION['itens'])){
    $_SESSION['itens'] = array();
  }

  if(isset($_GET['add']) && $_GET['add'] == "new_trolley"){
    $idProduct = $_GET['id_product'];
    if(!isset($_SESSION['itens'] [$idProduct])){
      $_SESSION['itens'] [$idProduct] = 1;
    }else{
      $_SESSION['itens'] [$idProduct] += 1;
    }
  }

?>

<?php

if(!isset($_GET['addnew']) && $_GET['addnew'] == "new_sale_c"){
  if(isset($_GET['addnew']) && $_GET['addnew'] == "new_s"){
    $v_id_sale = $_GET['id_sale'];  
  }
}else{
  $v_id_sale = $_GET['id_sale'];
}

?>

<?php 

  include ("my_heard.php");

?>

<body>
  
  <div class="container my_container_main mt-5">

    <h3 class="col-sm-12 mt-4 mb-4 text-center">Itens da Venda</h3>

    <?php

      // $last_sale = 
      // " SELECT * FROM tbl_sale
      //   WHERE id_client = '$id_client' 
      //   AND date_sale = '$date_sale'
      // ";

      // $row = mysqli_query($connectiondb, $last_sale);

      // while($result_row = mysqli_fetch_assoc($row)){
      //   $row_s_1 = $result_row["id_sale"];
      //   $row_s_2 = $result_row["id_client"];
      //   $row_s_3 = $result_row["date_sale"];

      // }

    ?>

    <div class="d-flex d-inline">
      <?php 
        echo '<p class="text-left mr-lg-1">ID da Venda:' . $v_id_sale .'</p>';
        // echo '<input type="hidden" name="id_sale" value="'. $v_id_sale .'">';
      ?>
    
    </div>
    <div class="d-flex justify-content-between">
      <?php
        // echo '<p class="text-left">ID do Cliente: ' . $row_s_2 .'</p>';
        // echo '<p class="text-right">Data da venda: ' . $row_s_3 .'</p>';
      
      ?>
    
    </div>
    
    
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h4 class="col-sm-12 mt-4 mb-4 text-center">Adicionar Produtos</h4>
          <div class="table-responsive mb-5 my-table-sale-1">
            <table class="table text-center rounded">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">ID do Produto</td>
                  <th scope="col">Nome do produto</td>
        
                </tr>
        
              </thead>
        
              <tbody class="text-dark">
              <?php
  
                include ('connect_pdo.php');

                $sql_db_p = "SELECT * FROM tbl_product order by id_product ASC";
                $sql_type = $connectiondb_pdo->prepare($sql_db_p);
                $sql_type->execute();
                $fetch = $sql_type->fetchAll();

                foreach($fetch as $data_items){
                  echo '<tr>';
                  echo '<th>' . 
                    '<a class="btn btn-my5-color #paypal" 
                    href="index_items_sale.php?addnew=new_s&id_sale='.$v_id_sale.'&add=new_trolley&id_product='.$data_items['id_product'].'"
                    >
                      Adicionar ao carrinho
                    </a>'
                  . '</th>';
                  echo '<td>' . $data_items['name_product'] . '</td>';
                  echo '</tr>';
                }
  
              ?>
              </tbody>
        
            </table>
  
          </div>

        </div>
        <div class="col-lg-6 col-sm-12" id="paypal">
          <h4 class="col-sm-12 mt-4 mb-4 text-center">Carrinho de Produtos</h4>
          <div class="table-responsive my-table-sale" id="paypal">
            <table class="table text-center rounded">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">ID da Venda</td>
                  <th scope="col">ID do Produto</td>
                  <th scope="col">Quantidade</td>
        
                </tr>
        
              </thead>
        
              <tbody class="text-dark">
              <?php

                if(count($_SESSION['itens']) == 0){
                  echo '<tr>';
                  echo '<td>Carrinho Vazio</td>';
                  echo '<td>Carrinho Vazio</td>';
                  echo '<td>Carrinho Vazio</td>';
                  echo '</tr>';
                }else{
                  include ('connect_pdo.php');

                  $_SESSION['dados'] = array();

                  foreach($_SESSION['itens'] as $idProduct => $quantity){
                    $sql_db_p = "SELECT * FROM tbl_product WHERE id_product=?";
                    $selectdb_items = $connectiondb_pdo->prepare($sql_db_p);
                    $selectdb_items->bindParam(1,$idProduct);
                    $selectdb_items->execute();
                    $data_items = $selectdb_items->fetchAll();

                    echo '<tr>';
                    echo '<th>' . $v_id_sale . '</th>';
                    echo '<td>' . $data_items[0] ["id_product"] . '</td>';
                    echo '<td>' . $quantity . '</td>';
                    echo '</tr>';

                    array_push(
                      $_SESSION['dados'],
                      array(
                        'id_sale' => $v_id_sale,
                        'id_product' => $idProduct,
                        'quantity' => $quantity
                      )
                    );
                    
                  }
                  echo '</tbody>';

                  echo '</table>';

                  echo '</div>';
                  echo '<div class="row justify-content-center">' .
                    '<a class="col-lg-4 col-sm-12 p-3 btn btn-my6-color"
                    href="finish.php"
                    >
                      Finalizar Pedidos
                    </a>' . 
                  '</div>';

                }

              ?>
    
        </div>

      </div>

    </div>

  </div>

</body>
<?php

  // $sql_type = 
  // " SELECT * FROM tbl_product
  //   order by id_product ASC
  // ";

  // $conne = new PDO('mysql:host=localhost;dbname=web-db_loja-acert-cmp', "root","");

  // $sql_db_p = "SELECT * FROM tbl_product order by id_product ASC";
  // $sql_type = $conne->prepare($sql_db_p);
  // $sql_type->execute();
  // $fetch = $sql_type->fetchAll();

  // $result = $connectiondb->query($sql_type);

  // foreach($fetch as $id_product_items){
    // echo '<tr>';

    // echo '<th>' . '<a class="" href="basket.php?add=basket&id='.$id_product_items['id_product'].'">
    //    Adicionar ao carrinho
    // </a>' . '<th>';

    // echo '<td>' . $id_product_items['name_product'] . '</td>;
    
    // echo '<td>' . '<input class="form-control bg-my5-color" type="number" min=1 name="quantity_product">' 
    // . '</td>';

    // echo '</tr>';
//   }

?>

<!-- <form action="new_items_sale.php" method="POST">
  <div class="row col-lg-6 justify-content-center col-sm-12">
    <h4 class="col-sm-12 mt-4 mb-4 text-center">Adicionar Produtos</h4>
    <div class="table-responsive my-table-sale-1">
      <table class="table text-center rounded">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID do Produto</td>
            <th scope="col">Nome do produto</td>
            <th scope="col">Quantidade</td>
  
          </tr>
  
        </thead>
  
        <tbody class="text-dark">
        <?php
  
          // $sql_type = 
          // " SELECT * FROM tbl_product
          //   order by id_product ASC
          // ";
  
          // $result = $connectiondb->query($sql_type);
  
          // if ($result->num_rows > 0){
          //   while ($row = $result->fetch_assoc()){
          //     echo '<tr>';
  
          //     echo '
          //       <th scope="row"> 
          //         <div class="form-check form-check-inline">
          //           <input class="form-check-input" type="checkbox" name="id_product"
          //           value="' . $row['id_product'] . '">
          //         </div>
          //       </th>
          //     ';
  
          //     echo '<td>'. $row['name_product'] .'</td>';
          //     echo '
          //       <td>
          //         <input class="form-control form-control-sm bg-my5-color" type="number" min=1 name="quantity_product">
          //       </td>
          //     ';
          //     echo '</tr>';
          //   }
          // }
  
        ?>
        </tbody>
  
      </table>
  
    </div>

  </div>
  <div class="row justify-content-center">
    <button class="col-lg-4 col-sm-12 p-3 my-5 btn btn-my6-color" type="submit">
      Finalizar Compra
    </button>

  </div>
</form> -->