<?php
include_once 'dbh.inc.php';
$player_id=$_GET['player_id'];
$new_wage=$_GET['new_wage'];
$new_contract=$_GET['new_contract'];
$sql = "Update player set player_wages='$new_wage',player_contract='$new_contract' where player_id=$player_id;";
mysqli_query($conn,$sql);
header("Location: userwagetable.php?wageupdate=success");
 ?>
