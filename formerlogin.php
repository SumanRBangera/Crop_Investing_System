<?php
error_reporting(0);
  $uname=$_POST['uname'];
  $pass=$_POST['pass'];
  $error=" ";
  $success=" ";

  if(isset($_POST['submit'])){
    if($uname=="shrirakshabhat@gmail.com"){
      if($pass=="abcde"){
        $error=" ";
        $success="Welcome Admin!!!";
        header("Location: cori.html");
      }
      else{
        $error="Invalid Password";
        $success=" ";
      }
    }
    else{
      $error="Invalid Username";
      $success="";
    }
  }
?>




<!DOCTYPE html>
<html lan="en" and dir="Itr">
<head>
  <meta charset="utf-8">
  <title>Mediator Login</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <p class="error"><?php echo $error;?></p><p class="success"><?php echo $success; ?></p>
  <form method="post">
    
    <h1>Mediator Log In</h1>

    <input type="email" name="uname" placeholder="Enter Admin E-mail" id="email" required>
    <input type="password" name="pass" placeholder="Enter Password" id="password">
    <input type="submit" name="submit" value="Log In" >


  </form>
</body>
</html>


