<?php include ('lconfig.php');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="money.css">
</head>
<body>
  <h1>INVESTOR REGISTRATION</h1>
  <div class="container">
    <form action="">
      <lable for="name">Name</lable><br>
      <input type="text" name="name" placeholder="Enter the Name" id="name" required><br>
      <lable for="email">E-mail</lable><br>
      <input type="text" name="uname" placeholder="Enter Your E-mail" id="email" required><br>
      <lable for="phone">Password</lable><br>
      <input type="text" name="password" placeholder="Enter Password" id="password" required><br>
      <input type="submit" id="register" name="create" value="Submit">
    </form>
  </div>
  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script type="text/javascript">
    $(function(){
      $('#register').click(function(e){
        var valid = this.form.checkValidity();

        

        if(valid){

          var name = $('#name').val();
          var email = $('#email').val();
          var password = $('#password').val();
          e.preventDefault();

          $.ajax({
            type:'POST',
            url:'lprocess.php',
            data:{name: name,email: email,password: password},
            success: function(data){
              Swal.fire({
                'title':'Successful',
                'text':data,
                'type':'success'
              }).then (function(){
                window.location="CropName.html"
              });

            },
            error: function(data){
              Swal.fire({
                'title':'Errors',
                'text':'There are errors while saving the data',
                'type':'error'
              })

            }



          });

        }else{  
          
        }

        

      });
      
    });
  </script>
</body>
</html>