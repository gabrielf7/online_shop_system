<?php 

  require ("connect.php");

?>

<?php

  $name_category = $_POST["name_category"];
  $description_category = $_POST["description_category"];

  
  $sql_type = "SELECT * FROM tbl_category WHERE name_category = '$name_category'";
  $resquery = mysqli_query($connectiondb, $sql_type);
  $quantity_data = mysqli_num_rows($resquery);
  
  
  if($quantity_data == 0){
    $sql_db = "INSERT INTO tbl_category (name_category, description_category)
    VALUES('$name_category','$description_category')";
    $data = mysqli_query($connectiondb, $sql_db);
    
    if($data == TRUE){
    ?>

      <script>
        alert("Concluído com sucesso");
        window.location.href="index_category.php";
      </script>

    <?php
    }else{
      echo "Ocorreu algum problema. Erro: ".$connectiondb->error;
    }
  }else{
  ?>

    <script>
      alert("Categoria já existe, escolha outra.");
      window.location.href="index.php";
    </script>

  <?php
  }

?>
