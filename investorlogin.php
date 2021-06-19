<?php
session_start();
error_reporting(0);
$db_customer = "root";
$db_pass = "";
$db_name = "former";
$message="";
$error=" ";
$success=" ";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_customer, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = " SELECT * FROM ilogin WHERE email= :u AND password= :p";
  $statement =$db->prepare($sql);
  $result = $statement->execute(
              array(
                'u'=>$_POST["email"],
                'p' => $_POST["password"]
              )
            );
  $count= $statement->rowCount();
  if($count>0)
      {
      $_SESSION["u"]=$_POST["email"];
      echo '<script language="javascript">
      alert("Login successful");
      </script>';
      echo "<script>setTimeout(\"location.href = 'CropName.html';\",500);</script>";
      
    }
  /*else

    {
      echo '<script language="javascript">
          alert("Please enter a valid Email and Password");
      </script>';
      echo "<script>setTimeout(\"location.href = 'investorlogin.php';\",500);</script>";
    }*/


?>  


<!DOCTYPE html>
<html>
<head>
  <title>Investor login page</title>
  <link rel="stylesheet" type="text/css" href="money.css">
</head>
<body>
  <h1>INVESTOR LOGIN PAGE</h1>
  <div class="container">
    <form method="post" action=" ">
      <lable for="email">E-mail</lable><br>
      <input type="text" name="email" placeholder="Enter Your E-mail" id="email" required><br>
      <lable for="phone">Password</lable><br>
      <input type="text" name="password" placeholder="Enter the Password" id="password" required><br>
      <input class="btn btn-primary" id="Login" type="submit" name="login_customer" value="login" >
      <hr class="md-3">
    </form>
  </div>
</body>
</html>

