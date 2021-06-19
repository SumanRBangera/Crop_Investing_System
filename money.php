<?php include ('mconfig.php');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Investing Details</title>
	<link rel="stylesheet" type="text/css" href="money.css">
</head>
<body>
	<h1>INVESTMENT DETAILS</h1>
	<div class="container">
		<form action="">
			<lable for="name">Name</lable><br>
			<input type="text" name="name" placeholder="Enter the Name" id="name" required><br>
			<lable for="email">E-mail</lable><br>
			<input type="text" name="uname" placeholder="Enter Your E-mail" id="email" required><br>
			<lable for="phone">Contact Number</lable><br>
			<input type="text" name="phone" placeholder="Enter Contact Number" id="phone" required><br>
			<label for="crops">Choose a Crop to Invest</label><br>
				<select name="crops" id="crops">
				  <option value="corn">Sweet Corn</option>
				  <option value="cucumber">Cucumber</option>
				  <option value="garlic">Garlic</option>
				  <option value="onion">Onion</option>
				  <option value="ginger">Ginger</option>
				  <option value="tea">Tea</option>
				  <option value="watermelon">Watermelon</option>
				  <option value="ragi">Ragi</option>
				  <option value="sugarcane">Sugarcane</option>
				  <option value="lemon">Lemon</option>
				</select>
			<lable for="name">Investment</lable><br>
			<input type="text" name="invest" placeholder="Enter Your Investment on Crop" id="invest" required>
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
          var phone = $('#phone').val();
          var crops = $('#crops').val();
          var invest = $('#invest').val();
          e.preventDefault();

          $.ajax({
            type:'POST',
            url:'mprocess.php',
            data:{name: name,email: email,phone: phone,crops: crops,invest: invest},
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