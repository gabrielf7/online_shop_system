<?php 

  require ("connect.php");
  
?>

<?php 

  $id_sale = $_POST["id_sale"];
  $id_product = $_POST["id_product"];
  $quantity_product = $_POST["quantity_product"];

  isset($_REQUEST['id_product']) ? (int) $_REQUEST['id_product'] : null;

  $sql_db = "INSERT INTO tbl_items_sale (id_sale, id_product, quantity_product)
  VALUES('$id_sale','$id_product','$quantity_product')";

  $data = mysqli_query($connectiondb, $sql_db);

  if($data == TRUE){
    echo "Deu certo";
  ?>

    <!-- <script>
      alert("Concluído com sucesso");
      window.location.href="index.php";
    </script> -->

  <?php
  }
  else{
    echo "Ocorreu algum problema. Erro: ".$connectiondb->error;
  }

?>

