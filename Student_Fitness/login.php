<?php
	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$pass=$_POST['pwd'];
		
		$sql= "Select * from users where username='$username' && password='$pass' " ;
		$result=mysqli_query($con,$sql);
		$count = mysqli_num_rows($result);
		if($count==1)
		{	
			$_SESSION['message']=" ";
			$_SESSION['username']=$username;
			header("Location: workout1.php");
		}
		else
		{
			header("Location: login.php");
			$_SESSION['message']="Username/Password did not match!";
		}
	}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  
  <style>
  .container
  {
	border:1px solid black;
	width:40%;
	padding-left:4%;
	padding-right:4%;
	padding-bottom:2%;
	margin-top:5%;
	border-radius:4px;
  }
  .form-group
  {
	margin-bottom:5%;
	margin-top:5%;
  }
  #message
  {
	  color:red;
	  margin-top:2%;
	  font-size:1.4vw;
  }
  </style>
  
  <script>
	function clearsp()
	{
		$("#message").text("");
	}
  </script>
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
  
  <h2 align="center">Login</h2>
  <form method="POST">
  
	<div class="form-group  row">
    
	  <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" oninput= "clearsp()" placeholder="Enter username" name="username">
   
	</div>
	<div class="form-group row">
	
	  <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd"  oninput= "clearsp()" placeholder="Enter password" name="pwd">
	  <p id="message"><?php echo $_SESSION['message']; ?> </p>
	</div>
	
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    
	<input type="submit" class="btn btn-info btn-block" name="login" value="Login">
	
  </form>
</div>


</body>
</html>
