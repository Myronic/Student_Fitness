<!DOCTYPE html>

<?php
	
	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	if(isset($_POST['register']))
	{
		$username=$_POST['name'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$pass=$_POST['pwd'];
		$height=$_POST['height'];
		$weight=$_POST['weight'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		
		$q1="Select * from users where username='$username' ";
		$res1 = mysqli_query($con,$q1);
		if(mysqli_num_rows($res1)!=0)
		{
				$_SESSION['message']="Username already taken !";
				header("Location: sign.php");
		}
		else
		{
			$_SESSION['message']="";
			$sql= "INSERT INTO users(name,email,username,password,height,weight,age,gender) values('$name','$email','$username','$pass','$height','$weight','$age','$gender')" ;
			mysqli_query($con,$sql);
			$_SESSION['username']=$username;
			header("Location: intro.php");
		}
	}	
?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script>
	function clearsp()
	{
		$("#message").text("");
	}
  </script>
  
  <style>
  .container
  {
	border:1px solid black;
	width:35%;
	padding-left:2%;
	padding-right:2%;
	padding-bottom:2%;
	margin-top:5%;
	border-radius:4px;
  }
  #message
  {
	  color:red;
	  margin-top:2%;
	  font-size:1.4vw;
  }
  </style>
</head>
<body>

 
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="sflogo.png" width="auto" height="40px" style=" position: relative; top: -10px" class="d-inline-block align-top">
      </a>
      <div class="navbar-brand">Student Fitness</div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">Challenges</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="sign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>




<div class="container">
  
  <h2 align="center">Sign Up</h2>
  <form method="POST">
  
    <div class="form-group row">
	  <div class="col-xs-12">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
	</div>
    <div class="form-group row">
		<div class="col-xs-12">
		<label for="email">E-mail:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter E-mail" name="email">
		</div>
	</div>
	<div class="form-group  row">
	  <div class="col-xs-12">
	  <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" oninput= "clearsp()" placeholder="Enter username" name="username">
	  <p id="message"><?php echo $_SESSION['message']; ?> </p>
	  </div>
	</div>
	<div class="form-group row">
		<div class="col-xs-12">
	  <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
		</div>
	</div>
	
	<div class="form-group row">
    
	<div class="col-xs-6">
	  <label for="sel1">Gender:</label>
      <select name="gender" class="form-control" id="sel1">
        <option value="Male" >Male</option>
        <option value="Female">Female</option>
      </select>
	</div>
	 
    <div class="col-xs-6">
	  <label for="age ">Age:</label>
      <input type="number" class="form-control" id="age" placeholder="Enter age" name="age">
	  </div>
	</div>
	
	<div class="form-group row">
      <div class="col-xs-6">
	  <label for="height">Height(cm):</label>
      <input type="number" class="form-control" id="height" placeholder="Enter height" name="height">
		</div>
	
	  <div class="col-xs-6">
	  <label for="weight">Weight(kg):</label>
      <input type="number" class="form-control" id="weight" placeholder="Enter weight" name="weight">
      </div>
	</div>
	
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>

	<input type="submit" class="btn btn-info btn-block" name="register" value="Submit">
		
	</form>
</div>



</body>
</html>
