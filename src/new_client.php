<?php 

  require ("connect.php");

?>
    
<?php

  $name_client = $_POST["name_client"];
  $surname_client = $_POST["surname_client"];
  $phone_client = $_POST["phone_client"];
  $smartphone_client = $_POST["smartphone_client"];

  $cpf_client = $_POST["cpf_client"];
  $email_client = $_POST["email_client"];
  $street_client = $_POST["street_client"];
  $number_client = $_POST["number_client"];

  $neighborhood_client = $_POST["neighborhood_client"];
  $city_client = $_POST["city_client"];
  $state_client = $_POST["state_client"];
  $cep_client = $_POST["cep_client"];

  $sql_db = "INSERT INTO tbl_client (name_client, surname_client, phone_client, smartphone_client, 
  cpf_client, email_client, street_client, number_client, neighborhood_client, city_client,
  state_client, cep_client)
  VALUES(
    '$name_client','$surname_client', '$phone_client', '$smartphone_client', 
    '$cpf_client','$email_client', '$street_client', '$number_client', 
    '$neighborhood_client','$city_client', '$state_client', '$cep_client'
  )";

  $data = mysqli_query($connectiondb, $sql_db);

  if($data == TRUE){
  ?>

    <script>
      alert("Concluído com sucesso");
      window.location.href="index.php";
    </script>

  <?php
  }
  else{
    echo "Ocorreu algum problema. Erro: ".$connectiondb->error;
  }

?>

