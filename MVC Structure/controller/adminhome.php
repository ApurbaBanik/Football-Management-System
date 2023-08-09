<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Homepage</title>
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
           <li><a href="playerlogin.php">Login As a Player</a></li>
           <li><a href="signup.php">Create a Fan Account</a></li>
           <li><a href="../model/userhome.php">Login As Guest </a></li>
           <li><a href="../model/top5goal.php">TOP 5 GOAL SCORERS</a></li>
           <li><a href="../model/top5assist.php">TOP 5 ASSIST PROVIDERS</a></li>
           <li><a href="../model/top5rating.php">TOP PERFORMERS</a></li>


       </ul>
       </div>
       <div class="clear"></div>
       </div>

  <div class="tablecontent">
    <a href="../model/displayplayer.php">Player Table</a><br>
    <a href="playerinput.php">Insert Player</a><br>
    <a href="deleteplayer.php">Delete Player Data</a>
    <a href="playerupdate.php">Update Player Data</a><br>
    <a href="../model/userwagetable.php">Wage Increment Request Table</a>
    <br><br></div>
  <div class="tablecontent">  <a href="../model/displaystaff.php">Staff Table</a><br>
    <a href="staffinput.php">Insert Staff</a><br>
    <a href="deletestaff.php">Delete Staff Data</a>
    <a href="staffupdate.php">Update Staff Data</a>
    <br><br></div>
  <div class="tablecontent">  <a href="../model/displaymanager.php">Manager Table</a><br>
    <a href="managerinput.php">Insert Manager</a><br>
    <a href="managerupdate.php">Update Manager Data</a>
    <a href="../model/displayuser.php">User Table</a><br></div>
  </body>
</html>
