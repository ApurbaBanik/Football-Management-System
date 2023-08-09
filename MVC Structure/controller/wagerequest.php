<?php
include_once 'dbh.inc.php'
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wage Increment Request</title>
  </head>
  <link rel="stylesheet" href="../view/css/style.css">
  <body>
    <div class="formcontent">
    <form action="../model/wagerequest.inc.php" method="post">
      Player ID:<input type ="text" name="player_id" placeholder="ID"><br>
      Player Name:<input type ="text" name="player_name" placeholder="Name"><br>
      Requested New Wages:<input type ="number" name="new_wage" placeholder="Wages($$)"><br>
      Requested New Contract:<input type ="date" name="new_contract" placeholder="Contract"><br>

      <div  class="c1"><button type ="submit" name="submit">Insert Data</button></div>
    </form></div>
  </body>
</html>
