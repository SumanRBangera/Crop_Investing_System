<!DOCTYPE html>
<html>
<head>
	<title>Investments</title>
</head>
<body>

		<div class="navbar">
			<a href="CropName.html"><b>Home</b></a>
			<a href="Completedetail.html"><b>Crop Details</b></a>
			<div class="navbarryt">
				<a href="firstpage.html"><b>Logout</b></a>
			</div>
		</div>

	<h1>Crop Investment Details</h1>

<?php
$con = mysqli_connect("localhost","root",'',"former");
// Check connection
if (mysqli_connect_errno())
{
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

if (!$result = mysqli_query($con,"SELECT * FROM money"))
{
    die("Error: " . mysqli_error($con));
}
?>
<table width="100%" border="1" cellpadding="17" cellspacing="8">
<tr class="head">	
	 		<th> Name </th>
	 		<th> E-Mail </th>
	 		<th> Contact Number </th>
	 		<th> Crop Name </th>
	 		<th> Investment </th>
	 	</tr>
<?php
while($row = mysqli_fetch_array($result))
{
?>
<tr>
					<td style="text-align:center"><?php echo $row["name"]; ?></td>
					<td style="text-align:center"><?php echo $row["email"]; ?></td>
	 				<td style="text-align:center"><?php echo $row["phone"];?></td>
	 				<td style="text-align:center"><?php echo $row["crops"];?></td>
	 				<td style="text-align:center"><?php echo $row["invest"];?></td>
</tr>
<?php
}
mysqli_close($con);
?>
</table>
</body>
</html>

<style>
		
	body{
	background-image: url('https://images.unsplash.com/photo-1529511582893-2d7e684dd128?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8ZmllbGR8ZW58MHx8MHw%3D&auto=format&fit=crop&w=500&q=60');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	font-size: 20px;
	padding-top: 20px;
	}

	.head{
		color: lightcoral;
		font-size: 23px;
		background-color: black;
	}

	h1{
		text-align: center;
		color: Black;
	}

	.navbar{
	overflow: hidden;
	background-color: whitesmoke;
}

.navbar a{
	float: left;
	font-size: 17px;
	text-align: center;
	padding: 14px 17px;
	text-decoration: none;
}

.navbarryt{
	float:right;
}

</style>