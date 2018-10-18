<!DOCTYPE HTML>

<?php
	
	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	mysqli_select_db($con, 'webfit1');
	
	if($_SESSION['username']!="")
	{
		
		$username=$_SESSION['username'];
	
		$q1 = "select height,weight from users where username = '$username' ";
		$q2 = mysqli_query($con, $q1);
		$q3 = mysqli_fetch_array($q2);

		$h = $q3['height'];
		$w = $q3['weight'];
	
		$bmi = $w / ($h*0.01*$h*0.01) ;
		$bmi = number_format($bmi,2)."<br>";
	
		if(isset($_POST['proceed']))
		{
			if(isset($_POST['optradio']))
			{
				$goal=$_POST['optradio'];
				$q1 = "Update users set goal='$goal' where username = '$username' ";
				$q2 = mysqli_query($con, $q1);
				header("Location: workout1.php");
			}		
		}
	}
		
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
		rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script>
			$(document).ready(function(){
				var a= parseFloat("<?php echo $bmi ?>");
				if(a>=16&&a<=18)
					document.getElementById("div1").innerHTML="Your BMI is " + a + " .You are Underweight and hence we would suggest you to opt for a mass gain plan.But the choice is your's.Select one of the options from the list given below.Based on your choice,we would provide you with the appropriate workout and diet plans and will help you to achieve your Goals!But to do that,first you must select one option and click on the proceed button.So let's get started!" ;
				else if(a>18&&a<=25)
					document.getElementById("div1").innerHTML="Your BMI is " + a + " .Your Body Type is Normal and hence we would suggest you to opt for a lean mass plan.But the choice is your's.Select one of the options from the list given below.Based on your choice,we would provide you with the appropriate workout and diet plans and will help you to achieve your Goals!But to do that,first you must select one option and click on the proceed button.So let's get started!";
				else if(a>25)
					document.getElementById("div1").innerHTML="Your BMI is " + a + " .You are Overweight and hence we would suggest you to opt for a Fat loss plan.But the choice is your's.Select one of the options from the list given below.Based on your choice,we would provide you with the appropriate workout and diet plans and will help you to achieve your Goals!But to do that,first you must select one option and click on the proceed button.So let's get started!";
			});
			var a="<?php echo $bmi ?>";
			document.getElementById("div1").innerHTML="bjhjh";
		</script>
    <style>
		
		#div1
		{
			margin:5% 20%;
			width:60%;
			padding:3%;
			border:2px solid black;
			
			border-radius:5px 10px;
		}
		.head
		{
			margin:5%;
		}
		.wform
		{
			margin:5% 20%;
			width:60%;
			padding:3%;
			border:2px solid black;
			border-radius:5px 10px;
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
        <li class="active"><a href="workout1.php">Workout</a></li>
        <li><a href="mydiet.php">Diet</a></li>
        <li><a href="#">Challenges</a></li>
      </ul>
	  
	  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle user"><?php echo $_SESSION['username'];?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Chat With Trainer</a></li>
                            <li class="divider"></li>
							<li><a href="#">Q&A Forum</a></li>
                            <li class="divider"></li>
							<li><a href="#">View Reports</a></li>
							<li class="divider"></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
    </div>
  </div>
</nav>

<h2 align="center" class="head" >Hello <?php echo $_SESSION['username'];?></h2>
<div id="div1" >
ghfjhdfkjhgliythb,
jghgfhgfhjg
</div>

<div class="container wform">
  <form method="POST">
    <div class="radio">
      <label><input type="radio" name="optradio" value="Mass Gain">Mass Gain</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio" value="Fat Loss">Fat Loss</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio" value="Lean Mass">Lean Mass</label>
    </div>
  <input type="submit" class="btn btn-info" name="proceed" value="Proceed">
	
  </form>
</div>
    
	


</div>

</body>
</html>