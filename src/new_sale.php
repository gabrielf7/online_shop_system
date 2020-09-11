<?php

  require ("connect.php");

?>

<?php

  $id_client = $_POST["id_client"];
  date_default_timezone_set('America/Sao_Paulo');
  $date_sale = date('Y/m/d');

  $sql_type = "SELECT * FROM tbl_client WHERE id_client = '$id_client'";

  $data = mysqli_query($connectiondb, $sql_type);

  $quantity_data = mysqli_num_rows($data);

  if($quantity_data == 0) {
  ?>

    <script>
      alert("ID não cadastrado");
      window.location.href = "index.php";
    </script>

  <?php
  }else{

    $sql_db = "INSERT INTO tbl_sale (id_client, date_sale)VALUES('$id_client', '$date_sale')";
    $data_db = mysqli_query($connectiondb, $sql_db);

    if($data_db == TRUE) {
      $last_sale =
        " SELECT * FROM tbl_sale
          WHERE id_client = '$id_client' 
          AND date_sale = '$date_sale'
        ";

      $row = mysqli_query($connectiondb, $last_sale);

      while($result_row = mysqli_fetch_assoc($row)) {
        $row_s_1 = $result_row["id_sale"];
        $row_s_2 = $result_row["id_client"];
        $row_s_3 = $result_row["date_sale"];
      }
    ?>
      <script>
        window.location.href = "index_items_sale.php?addnew=new_sale_c&id_sale=<?php echo $row_s_1; ?>";
      </script>
    <?php
    }else{
      echo "Ocorreu algum problema. Erro: " . $connectiondb->error;
    }
  }

?>