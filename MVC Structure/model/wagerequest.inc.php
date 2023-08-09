<?php
  include_once 'dbh.inc.php';
  $player_id = $_POST['player_id'];
  $player_name = $_POST['player_name'];
  $player_wages = $_POST['new_wage'];
  $player_contract = $_POST['new_contract'];
  $sql = "Insert into wage(player_id,player_name,new_wage,new_contract) values ('$player_id','$player_name',
  '$player_wages','$player_contract');";
  mysqli_query($conn,$sql);
  header("Location: ../controller/wagerequest.php?wagerequest=success");
?>
