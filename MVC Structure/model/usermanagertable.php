<?php
  include_once 'dbh.inc.php';
  $sql="Select * from manager";
  $data=mysqli_query($conn,$sql);
  $total= mysqli_num_rows($data);
  ?>
    <link rel="stylesheet" href="../view/css/style.css">
  <header>
    Wage Increment Request Table <br>
  </header>
    <div class="tl1"><table>
    <tr>

      <th>Name</th>
      <th>Nationality</th>
      <th>Age</th>
      <th>Type</th>
      <th>Matches</th>
      <th>Wins</th>
      <th>Draws</th>
      <th>Loses</th>

    </tr>
    <?php
    while($result=mysqli_fetch_assoc($data)){
      echo "<tr>

      <td>".$result['manager_name']."</td>
      <td>".$result['manager_nationality']."</td>
      <td>".$result['manager_age']."</td>
      <td>".$result['manager_type']."</td>
      <td>".$result['manager_matches']."</td>
      <td>".$result['manager_wins']."</td>
      <td>".$result['manager_draws']."</td>
      <td>".$result['manager_loses']."</td>

      </tr>";
    }

?>
</table></div>
