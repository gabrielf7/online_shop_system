<?php 

  $connectiondb = new mysqli("localhost", "root", "", "web-db_loja-acert-cmp");

  if($connectiondb->connect_error){
    die("Error during connection. Status: Error".$connectiondb->connect_error);
      
  }

?>