<?php
  include_once 'dbh.inc.php';
  $sql="Select * from player";
  $data=mysqli_query($conn,$sql);
  $total= mysqli_num_rows($data);
  ?>
  <link rel="stylesheet" href="../view/css/style.css">
  <header class="pth">
    Player Table <br>
  </header>
  <div class="tl1">
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Nationality</th>
      <th>Age</th>
      <th>Position</th>
      <th>Appearances</th>
      <th>Goals</th>
      <th>Assists</th>
      <th>Rating</th>
    </tr>
    <?php
    while($result=mysqli_fetch_assoc($data)){
      echo "<tr>
      <td>".$result['player_id']."</td>
      <td>".$result['player_name']."</td>
      <td>".$result['player_nationality']."</td>
      <td>".$result['player_age']."</td>
      <td>".$result['player_position']."</td>
      <td>".$result['player_appearances']."</td>
      <td>".$result['player_goals']."</td>
      <td>".$result['player_assists']."</td>
      <td>".$result['player_rating']."</td>
      </tr>";
    }

?>
</table></div>
