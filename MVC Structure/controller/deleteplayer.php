<?php
  include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="../view/css/style.css">
  <body>
    <div class="formcontent">
    <form  action="../model/deleteplayer.inc.php" method="post">
      Delete Player data :<input type="text" name="id" placeholder="Player id">
      <div  class="c1"><button type ="submit" name="submit">Submit</button></div>
    </form></div>
  </body>
</html>
