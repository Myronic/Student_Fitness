
<!DOCTYPE html>

<?php
	session_start();
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


    <style>
		.mid
		{
			display:flex;
			align-content:center;
			justify-content:center;
		}
		.work
		{
			margin-top:5%;
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

	




<div class="container-fluid">

	<div class="row work">
	
	

   
    <div class="col-sm-4 mid" >
    	<div class="thumbnail">
			<a href="workout/pushdown.html"><img src="images/work1/chest.jpg" class="image"></a>
			<div class="caption mid">
            <p>PUSHDOWN</p>
          </div>
		</div>  
		  
    </div>
	
	<div class="col-sm-4 mid" >
    	<div class="thumbnail">
			<a href="workout/tricepext.html"><img src="images/work1/back.jpg" class="image"></a>
			<div class="caption mid">
            <p>TRICEP EXTENSIONS</p>
          </div>
		</div>
    </div>
	
	
	<div class="col-sm-4 mid" >
    	<div class="thumbnail">
			<a href="workout/revpushdowns.html"><img src="images/work1/shoulder.jpg" class="image"></a>
			<div class="caption mid">
            <p>REVERSE PUSHDOWNS</p>
          </div>
		</div>
    </div>

	
	
    </div>
	
	
	
	
	

</div>	

	
	</body>
</html>