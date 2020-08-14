<?php

include'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hello world</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>



<header class="mini-header">
	<div class="container">
		<div class="row">
			<div class="left col-12">
				<p>Email Address:Technicaltips42@gmail.com | Cell # : 0306-4246490</p>
			</div >
			<img class="img" src="images/banner.gif">
		</div>

		<div class="row">
			<div class="st col-4">
				<?PHP
				$query="SELECT * FROM users";
				$run=mysqli_query($con,$query);
				while ($row=mysqli_fetch_array($run)) {
					$id=$row['id'];
					$Name=$row['Name'];
					$Email=$row['Email'];
					$Password=$row['Password'];
				echo "<li><a href='index.php?id=id'>$Name</a></li>";
				echo "<li><a href='Style.css.php?id=Email'>$Email</a></li>";
				echo "<li><a href='connection.php?id=Password'>$Password</a></li>";
				
				}


				?>		
				<li><a href=""></a></li>		




			</div>
			<div class="st col-8">
				<ul class="menu">
					<li><a href="#">Home</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">Graphics Designs</a></li>
					<li><a href="#">Images</a></li>
					<li><a href="#">About us</a></li>
				</ul>
			</div>




<div class="sst col-4">
				
			</div>


<div class="sst col-8">

<div class="box">
<?PHP

$Query="SELECT * FROM users order by rand()limite 0.6";
$run=mysqli_query($con,$query);
while ($row=mysqli_fetch_array($run)) {

	$Email=$row['Email'];
	$Name=$row['Name'];

 
}





?>			
</div>
</div>

</div>

</div>

</div>



<div class="card" style="width: 18rem;">
  <img src="..." class="website/images/banner.gif" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>





	</div>

</header>

</body>
</html>