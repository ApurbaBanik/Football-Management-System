<?php
  include_once 'dbh.inc.php';
  $sql="Select * from player INNER JOIN wage ON player.player_id = wage.player_id";
  $data=mysqli_query($conn,$sql);
  $total= mysqli_num_rows($data);
  ?>
    <link rel="stylesheet" href="../view/css/style.css">
  <header>
    Wage Increment Request Table <br>
  </header>
    <div class="tl1"><table>
    <tr>

      <th>Player Id</th>
      <th>Name</th>
      <th>Player Wage</th>
      <th>Existing Contract</th>
      <th>New Requested Wage</th>

      <th>New Contract Date</th>
      <th>Action</th>


    </tr>
    <?php
    while($result=mysqli_fetch_assoc($data)){
      echo "<tr>

      <td>".$result['player_id']."</td>
      <td>".$result['player_name']."</td>
      <td>".$result['player_wages']."</td>
      <td>".$result['player_contract']."</td>

      <td>".$result['new_wage']."</td>

      <td>".$result['new_contract']."</td>
      <td><a href='updatewage.php?player_id=$result[player_id] & new_wage=$result[new_wage]& new_contract=$result[new_contract]'>Update</a></td>


      </tr>";
    }

?>
</table></div>
