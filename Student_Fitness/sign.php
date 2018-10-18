<!DOCTYPE html>

<?php
	
	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');

	if($_SESSION['username']!="")
	{
		header("Location: intro.php");
	}
	if(isset($_POST['register']))
	{
		$name=mysqli_real_escape_string($con,$_POST['name']);
		$email=mysqli_real_escape_string($con,$_POST['email']);
		$username=mysqli_real_escape_string($con,$_POST['username']);
		$pass=mysqli_real_escape_string($con,$_POST['pwd']);
		$height=mysqli_real_escape_string($con,$_POST['height']);
		$weight=mysqli_real_escape_string($con,$_POST['weight']);
		$age=mysqli_real_escape_string($con,$_POST['age']);
		$gender=mysqli_real_escape_string($con,$_POST['gender']);
		

		$pass1=password_hash($pass,PASSWORD_DEFAULT);

		$q1="Select * from users where username=? ";
		$stmt = mysqli_stmt_init($con);
		if(!mysqli_stmt_prepare($stmt,$q1))
		{
			echo"SQL error";
		} 
		else
		{
			mysqli_stmt_bind_param($stmt,"s",$username);
			mysqli_stmt_execute($stmt);
		
			$res1 = mysqli_stmt_get_result($stmt);
			if(mysqli_num_rows($res1)!=0)
			{
				$_SESSION['message']="Username already taken !";
				header("Location: sign.php");
				mysqli_stmt_close($stmt);
			}
			else
			{
				$_SESSION['message']="";
				$sql= "INSERT INTO users(name,email,username,password,height,weight,age,gender) values(?,?,?,?,?,?,?,?)" ;
				$stmt = mysqli_stmt_init($con);
				if(!mysqli_stmt_prepare($stmt,$sql))
				{
					echo"SQL error";
				}
				else
				{
					mysqli_stmt_bind_param($stmt,"ssssiiis",$name,$email,$username,$pass1,$height,$weight,$age,$gender);
					mysqli_stmt_execute($stmt);
					$_SESSION['username']=$username;
					header("Location: intro.php");
					mysqli_stmt_close($stmt);
				}
			}
		}
	}	
?>




			<script>
			setInterval(valid,10);
element.style.borderWidth = "2px"

function valid()

{

var a=document.getElementById("name").value;
    if(a.length>30 )
        {
            document.getElementById("name").style.borderColor="red";
			
			
        }
     else
         {
             document.getElementById("name").style.borderColor="green";
         }
}

	
			</script>
		<script>
			setInterval(valid,10);
element.style.borderWidth = "2px"

function valid()

{

var a=document.getElementById("username").value;
    if(a.length>10)
        {
            document.getElementById("username").style.borderColor="red";
		
			
        }
     else
         {
             document.getElementById("username").style.borderColor="green";
         }



    if( /[^a-zA-Z0-9]*$/.test(a) ) 
    {
       alert('Input is alphanumeric');
       return false;
    }
    return true;   
}

 

  </script>		
			
			
			<script>


    
  
    function CheckPasswordStrength(password) {
        var password_strength = document.getElementById("password_strength");
 
        //TextBox left blank.
        if (password.length == 0) {
            password_strength.innerHTML = "";
            return;
        }
 
        //Regular Expressions.
        var regex = new Array();
        regex.push("[A-Z]"); //Uppercase Alphabet.
        regex.push("[a-z]"); //Lowercase Alphabet.
        regex.push("[0-9]"); //Digit.
        regex.push("[$@$!%*#?&]"); //Special Character.
 
        var passed = 0;
 
        //Validate for each Regular Expression.
        for (var i = 0; i < regex.length; i++) {
            if (new RegExp(regex[i]).test(password)) {
                passed++;
            }
        }
 
        //Validate for length of Password.
        if (passed > 2 && password.length > 8) {
            passed++;
        }
 
        //Display status.
        var color = "";
        var strength = "";
        switch (passed) {
            case 0:
            case 1:
                strength = "Weak";
                color = "red";
                break;
            case 2:
                strength = "Good";
                color = "darkorange";
                break;
            case 3:
            case 4:
                strength = "Strong";
                color = "green";
                break;
            case 7:
                strength = "Very Strong";
                color = "darkgreen";
                break;
        }
        password_strength.innerHTML = strength;
        password_strength.style.color = color;
   } 
      function Check(pwd1) {
  if (document.getElementById('pwd').value ==
    document.getElementById('pwd1').value) {
    document.getElementById('pwdmsg').style.color = 'green';
    document.getElementById('pwdmsg').innerHTML = 'matching';
  } else {
    document.getElementById('pwdmsg').style.color = 'red';
    document.getElementById('pwdmsg').innerHTML = 'not matching';
  }
}   

</script>
			
	
    			
			
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
	border:1px solid gray;
	width:35%;
	padding-left:2%;
	padding-right:2%;
	padding-bottom:2%;
	margin-top:5%;
	border-radius:10px;
	box-shadow: 3px 3px 3px lightgray,-3px 0px 3px lightgray;
  }
  #message
  {
	  color:red;
	  margin-top:2%;
	  font-size:1.4vw;
  }
  </style>
</head>
<body onload='document.form1.text1.focus()'>

 
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
  <form name="myForm"method="POST" onsubmit="return validateForm();">
  
    <div class="form-group row">
	  <div class="col-xs-12">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
	</div>
    
    <div class="form-group row">
		<div class="col-xs-12">
			
		<label for="email">E-mail:</label>
      <input type='email' class="form-control" id="email" placeholder="Enter email" name='email' />
		
		</div>
		</div>
	


	
	<div class="form-group  row">
	  <div class="col-xs-12">
	  <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" oninput= "clearsp()" placeholder="Enter username" name="username" onkeyup="valid(this.value)" >
	  <p id="message"><?php echo $_SESSION['message']; ?> </p>
	  </div>
	</div>
	<div class="form-group row">
		<div class="col-xs-12">
	  <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" onkeyup="CheckPasswordStrength(this.value)" >
		<span id="password_strength"></span>
     <br>
		</div>

   
    
    <div class="col-xs-12">
    <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="pwd1" placeholder="Confirm password" name="pwd1" onkeyup="Check(this.value)" >
    <span id="pwdmsg"></span>
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
      <input type="text" class="form-control" id="age" placeholder="Enter age" name="age" onfocus="displayMesage()" onchange="return validateAge(this)" required" ><span style="color:red; font-size:10px; margin-left:5px;" id="msg"></span>
	  </div>
	</div>
	
	<div class="form-group row">
      <div class="col-xs-6">
	  <label for="height">Height(cm):</label>
      <input type="number" class="form-control" id="height" placeholder="Enter height" name="height" onfocus="displayMessage()" onchange="return validateHeight(this)" required"><span style="color:red; font-size:10px; margin-left:5px;" id="ms"></span>
		</div>
	
	  <div class="col-xs-6">
	  <label for="weight">Weight(kg):</label>
      <input type="number" class="form-control" id="weight" placeholder="Enter weight" name="weight" onfocus="displayMessag()" onchange="return validateWeight(this)" required" ><span style="color:red; font-size:10px; margin-left:5px;" id="m"></span>
      </div>
	</div>
	
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>

	<input type="submit" class="btn btn-info btn-block" name="register" value="Submit" >
		
	</form>
</div>



</body>
</html>




<script>
function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
</script>


<script>
function displayMesage() {
    document.getElementById("msg").innerHTML = "<strong>Note:</strong>Age must be between 18 and 25";
}
 
function validateAge(age) {
    var input = age.value;
    if(input>=13&&input<=100||Nan) {
        return true;
    }
    else {
        alert("Age must be between 18 and 25 | You have entered "+input);
        return false;
    }
}
</script>



<script>
function displayMessage() {
    document.getElementById("ms").innerHTML = "<strong>Note:</strong>Enter height between 60 and 350 cm";
}
 
function validateHeight(height) {
    var input = height.value;
    if(input>=60&&input<=280||Nan) {
        return true;
    }
    else {
        alert("Invalid format | You have entered "+input);
        return false;
    }
}
</script>



<script>
function displayMessag() {
    document.getElementById("m").innerHTML = "<strong>Note:</strong>Enter valid weight i.e between 25 and 250";
}
 
function validateWeight(weight) {
    var input = weight.value;
    if(input>=25&&input<=250||Nan) {
        return true;
    }
    else {
        alert("Invalid format | You have entered "+input);
        return false;
    }
}
</script>








		