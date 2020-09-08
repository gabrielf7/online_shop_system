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

    if($quantity_data == 0){
        ?>

            <script>
                alert("ID não cadastrado");
                window.location.href="index.php";
            </script>
    
        <?php
    }else{

        $sql_db = "INSERT INTO tbl_sale (id_client, date_sale)VALUES('$id_client', '$date_sale')";
        $data_db = mysqli_query($connectiondb, $sql_db);
        
        if($data_db == TRUE){
            include_once ('index_items_sale.php');
            ?>

                <!-- <script>
                    window.location.href="index_items_sale.php";
                </script> -->
            <?php

        }else{
            echo "Ocorreu algum problema. Erro: ".$connectiondb->error;
        }
    }

?>
