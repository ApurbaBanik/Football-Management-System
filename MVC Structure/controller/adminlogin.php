<?php
session_start();
require_once('dbh.inc.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="../view/css/style.css">
  <body>
  <div class="formcontent">  <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <input type="text" name="name" placeholder="Username"><br/><br/>
      <input type="password" name="password" placeholder="Password">
      <div  class="c1"><button type ="submit" name="submit">Submit</button></div>
    </form> </div>
  </body>
</html>
<?php
$name = $pass = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
$name=$_POST['name'];
$pass=$_POST['password'];
$sql = "SELECT admin_password FROM admin WHERE admin_name = '$name'";
$result = $conn->query($sql);
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          if($row['admin_password'] == $pass){
            $_SESSION['login'] = true;

            header("Location: adminhome.php");}

        else{
        echo "Incorrect Password";
        }
      }
    }
  }
$conn->close();

?>
</body>
</html>
