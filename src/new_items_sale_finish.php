<?php 
  session_start();

  foreach($_SESSION['dados'] as $data_items) {
    require ('connect_pdo.php');
    $insert = "INSERT INTO tbl_items_sale() VALUES(NULL,?,?,?)";
    $result_insert = $connectiondb_pdo->prepare($insert);
    $result_insert->bindParam(1,$data_items['id_sale']);
    $result_insert->bindParam(2,$data_items['id_product']);
    $result_insert->bindParam(3,$data_items['quantity']);
    $result_insert->execute();
  
  }
  unset($_SESSION['itens']);
  echo "STATUS: 200 OK";

?>