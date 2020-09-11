<?php 

  echo '<tr>';
  echo '<th scope="row">'. $row['id_client'] .'</th>';
  echo '<td class="w-3">'. $row['name_client'] .'</td>';
  echo '<td class="w-3">'. $row['surname_client'] .'</td>';
  echo '<td class="w-3">'. $row['phone_client'] .'</td>';
  echo '<td class="w-3">'. $row['smartphone_client'] .'</td>';

  echo '<td class="w-3">'. $row['cpf_client'] .'</td>';
  echo '<td class="w-3">'. $row['email_client'] .'</td>';
  echo '<td class="w-3">'. $row['street_client'] .'</td>';
  echo '<td class="w-3">'. $row['number_client'] .'</td>';

  echo '<td class="w-3">'. $row['neighborhood_client'] .'</td>';
  echo '<td class="w-3">'. $row['city_client'] .'</td>';
  echo '<td class="w-3">'. $row['state_client'] .'</td>';
  echo '<td class="w-3">'. $row['cep_client'] .'</td>';
  echo '</tr>';

?>