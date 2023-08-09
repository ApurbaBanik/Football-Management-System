<!DOCTYPE html>
<?php
    session_start();
    if(!($_SESSION['login'] == true && $_SESSION['player_name'] != '')){
        header("Location: ../index.php");
    }
    require_once('dbh.inc.php');
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Player Homepage</title>
  </head>
    <link rel="stylesheet" href="../view/css/style.css">
  <body>
    <div class="nav-bar">
      <div class="logo">
       <a href="index.html">
      <img src="../view/images/fcb_logo.png" >
       </a>
       </div>
       <h2>BARCELONA.FC</h2>
       <div class="menu">
       <ul>
           <li><a href="../model/top5goal.php">TOP 5 GOAL SCORERS</a></li>
           <li><a href="../model/top5assist.php">TOP 5 ASSIST PROVIDERS</a></li>
           <li><a href="../model/top5rating.php">TOP PERFORMERS</a></li>


       </ul>
       </div>
       <div class="clear"></div>
       </div>

     <div class="container" style=" width: 800px;">
         <p style="color: white">  Name: <?php echo $_SESSION['player_name']."   <br>  Wage: ".$_SESSION['player_wages']."<br>Contract:".$_SESSION['player_contract']?></p>

     </div>
     <div class="tablecontent" style=" margin-left: 34%; width: 30%;text-align: center;">
      <a href="../model/userplayertable.php">Player Table</a><br>
      <a href="../model/usermanagertable.php">Manager Table</a><br>
      <a href="../controller/wagerequest.php">Wage Increment Request </a><br>
    </div>


  </body>
</html>
