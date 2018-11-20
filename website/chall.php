<!DOCTYPE html>

<?php
	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	if(isset($_POST['start']))
	{
		$dur=$_POST['radio'];
		$diff=$_POST['radio2'];
		 if($dur==5 && $diff=="easy")
			header("Location: pkch/SHORT/short-5e.html");
		else if($dur==5 && $diff=="medium")
			header("Location:pkch/SHORT/short-5m.html");
		else if($dur==5 && $diff=="hard")
			header("Location: pkch/SHORT/short-5d.html");
        else if($dur==10 && $diff=="easy")
			header("Location: pkch/SHORT/short-10e.html");
		else if($dur==10 && $diff=="medium")
			header("Location:pkch/SHORT/short-10m.html");
		else if($dur==10 && $diff=="hard")
			header("Location: pkch/SHORT/short-10d.html");
        else if($dur==15 && $diff=="easy")
			header("Location: pkch/SHORT/short-15e.html");
		else if($dur==15 && $diff=="medium")
			header("Location:pkch/SHORT/short-15m.html");
		else if($dur==15 && $diff=="hard")
			header("Location:pkch/SHORT/short-15d.html");
        
		
	}
?>
<html lang="en">

  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
<style>
.longchallenges
{
margin-top:50px;
border:2px solid grey;


}
.quickchallenge
{
text-align:center;
font-size:30px;
font-weight:bolder;
}
.btn-success
{
height:50px;
padding-top:10px;
font-size:20px;
font-weight:bolder;

}
.btn-danger
{
height:50px;
padding-top:10px;
font-size:20px;
font-weight:bolder;
font-style:arial black;

}




.seperator
{
height:30px;

}






h4
{
font-weight:bolder;

}
.customdiv
{
border:2px solid grey;
background:rgb(220,220,200);
margin:10px;
height:80px;
border-radius:10px;
text-align:center;



}
.customdiv2
{
border:2px solid grey;
background:rgb(220,220,200);
margin:10px;
height:80px;
border-radius:10px;
text-align:center;
padding-top:15px;



}
.customdiv3
{


margin:10px;
height:50px;
border-radius:10px;
text-align:center;
padding-top:15px;



}

.customdiv4
{


margin:10px;

border-radius:10px;
text-align:center;
padding-top:15px;



}










.container
{
padding:10px;
background:rgb(51,51,51);
border-radius:10px;

}

/* The radiocontainer */
.radiocontainer {
    display: inline;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	
	
	
}

/* Hide the browser's default radio button */
.radiocontainer input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.radiocontainer:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.radiocontainer input:checked ~ .checkmark {
    background-color: rgb(51,51,51);
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.radiocontainer input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.radiocontainer .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
/*long challenge*/
* {box-sizing: border-box;}

.imagecontainer {
  position: relative;
  width: 100%;
  max-width: 300px;
}

.image {
  
  width: 100%;
  height: auto;
}
.image:hover
{

opacity:0.6;
}

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.imagecontainer:hover .overlay {
  opacity: 1;
}





</style>







<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div class="navbar-brand">Student Fitness</div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="workout1.php">Home</a></li>
        <li class="active"><a href="#">Challenges</a></li>
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
<div class="row">
<div class="col-lg-4 col-lg-offset-4">
<div class="customdiv2"><span class="quickchallenge">QUICK-CHALLENGES</span></div>
</div>
</div>

<form method="POST" action="##">
<div class="row">
<div class="col-lg-4">
<div class="customdiv">
<h4>DURATION(in mins)</h4>
<label class="radiocontainer">5
  <input type="radio" checked="checked" name="radio" value="5">
  <span class="checkmark"></span>
</label>
<label class="radiocontainer">10
  <input type="radio" name="radio" value="10">
  <span class="checkmark"></span>
</label>
<label class="radiocontainer">15
  <input type="radio" name="radio" value="15">
  <span class="checkmark"></span>
</label>

</div>
</div>
<div class="col-lg-4">
<div class="customdiv">
<h4>DIFFICULTY</h4>
<label class="radiocontainer">Easy
  <input type="radio" checked="checked" name="radio2" value="easy">
  <span class="checkmark"></span>
</label>
<label class="radiocontainer">Medium
  <input type="radio" name="radio2" value="medium">
  <span class="checkmark"></span>
</label>
<label class="radiocontainer">Hard
  <input type="radio" name="radio2" value="hard">
  <span class="checkmark"></span>
</label>
</label>
</div>
</div>
<div class="col-lg-4">
<div class="customdiv3">
<!--<div class="btn-success btn-lg"><span class="indentation"><span class="indentation"><span class="glyphicon glyphicon-check"></span>START</span></div>-->
<input type="submit" class="btn btn-info btn-block" name="start" value="Start">
</div>
</div>
</div>
</form>
</div>






<div class="seperator"></div>






<div class="container">
<div class="row">
<div class="col-lg-4 col-lg-offset-4">
<div class="customdiv2"><span class="quickchallenge">LONG-CHALLENGES</span></div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-4 col-xs-4">
<div class="customdiv4">
<div class="imagecontainer">
    <a href="pkch/LONG/long-50pullups.php"><img src="challenge1.jpg" alt="Avatar" class="image img-responsive img-thumbnail"></a>
  <div class="overlay">For those who are new to workout</div>
    
   
</div>
</div></div>
<div class="col-lg-4 col-md-4  col-xs-4">
<div class="customdiv4">
<div class="imagecontainer">
    <a href="pkch/LONG/long-50pullups.php"><img src="challenge2.jpg" alt="Avatar" class="image img-responsive img-thumbnail"></a>
  <div class="overlay">Your skills will be tested</div>
</div>
</div></div>
<div class="col-lg-4 col-md-4 col-xs-4">
<div class="customdiv4"><div class="imagecontainer">
    <a href="pkch/LONG/long-50pullups.php"><img src="challenge3.jpg" alt="Avatar" class="image img-responsive img-thumbnail"></a>
  <div class="overlay">You will be strained</div>
</div></div></div>
<div class="row">
<div class="col-lg-4 col-md-4 col-xs-4">
<div class="customdiv4">
<div class="imagecontainer">
  <a href="pkch/LONG/long-50pullups.php"><img src="challenge6.jpg" alt="Avatar" class="image img-responsive img-thumbnail">
  <div class="overlay">Here comes the pain !</div>
</div>
</div></div>
<div class="col-lg-4 col-md-4 col-xs-4">
<div class="customdiv4">


</div></div></div>
</div>
</body>
</html>