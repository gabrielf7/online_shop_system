<?php 

  require ("connect.php");
  
?>

<?php 

  $id_category = $_POST["id_category"];
  $name_product = $_POST["name_product"];
  $description_product = $_POST["description_product"];
  $value_product = $_POST["value_product"];
  $stock_product = $_POST["stock_product"];

  $sql_type = "SELECT * FROM tbl_product WHERE name_product = '$name_product'";
  $resquery = mysqli_query($connectiondb, $sql_type);
  $quantity_data = mysqli_num_rows($resquery);

  if($quantity_data == 0){
    
    $sql_db = "INSERT INTO tbl_product (id_category, name_product, description_product, value_product, stock_product)
    VALUES('$id_category','$name_product','$description_product', '$value_product', '$stock_product')";
    $data = mysqli_query($connectiondb, $sql_db);
    if($data == TRUE){
    ?>

      <script>
        alert("Concluído com sucesso");
        window.location.href="index_product.php";
      </script>

    <?php
    }
    else{
      echo "Ocorreu algum problema. Erro: ".$connectiondb->error;
    }

  }else{
    ?>

    <script>
      alert("Nome do produto já existe, escolha outro.");
      window.location.href="index.php";
    </script>

    <?php

  }

?>

