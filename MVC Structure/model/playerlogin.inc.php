<?php
  session_start();
  require_once('dbh.inc.php');
  $name=$_POST['name'];
  $pass=$_POST['password'];
  $sql = "SELECT  player_name, player_wages, player_contract,player_password FROM player WHERE player_name = '$name'";
  $result = $conn->query($sql);
        if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            if($row['player_password'] == $pass){

              $_SESSION['player_name'] = $row['player_name'];
              $_SESSION['player_wages'] = $row['player_wages'];
              $_SESSION['player_contract'] = $row['player_contract'];
              $_SESSION['login'] = true;

              header("Location: playerhome.php");
              header("Location: usermanagertable.php");
            }

          else{
          echo "Incorrect Password";
          }
        }
      }
  $conn->close();

?>
