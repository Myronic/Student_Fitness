
<?php
	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	
?>
		

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="forum.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  
  

  
  <script>
			
			
			var count=2;
			var acount=1;
			function shows(name,qid)
			{
				if(name=="but1")
				{
					$(document).ready(function(){
						count=count+2;
						$("#content").load("loadcontent1.php",{
							newcount:count
						});		
					});
				}
				else
				{
					$(document).ready(function(){
						
						var a='.'+ name;
						$(a).load("loadans1.php",{
							qtid:qid
						});
					});
					/*$(document).ready(function(){
						var q=parseInt(qid);
						var n='.' + name;
						
						acount=acount+1;
						$("n").load("loadans.php",{
							newcount1:acount,
							qid:q
							
						});		
					});*/
				}
				
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
        <li class="active"><a href="workout1.php">Workout</a></li>
        <li><a href="mydiet.php">Diet</a></li>
        <li><a href="#">Challenges</a></li>
        <li><a href="myforum.php">My Questions</a></li>

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
							<li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
    </div>
  </div>
</nav>

	
<div class="container">
    	
	<div style="margin-top:10%">
        <h1 align="center"><u><b>My Questions</b></u> </h1>

			
		
	</div>
	
	<br><br>
	<div class="container">
	    <div id="content">	
		<?php
            $user=$_SESSION['username'];
			$sql="select * from questions where username='$user' LIMIT 2";
			$result=mysqli_query($con,$sql);
			$i=0;
			if(mysqli_num_rows($result) > 0)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					echo '<div class="'.$i.' container-fluid qna" >';
					echo "<h4 id='txt'>";
                        echo $row['quest'];
                    echo "</h4>";
                    
			
					$qid=$row['qid'];
					
					$sql1="select * from answers where qid='$qid' limit 2";
					$result1=mysqli_query($con,$sql1);
					if(mysqli_num_rows($result1) > 0)
					{
						while($row=mysqli_fetch_assoc($result1))
						{ 
							echo "<div class='container qna ans' style='margin-left:5px; margin-right:5px'>";
                                echo $row['answer'];
                                echo "<h5>";
							    echo "Answered by ".$row['username'];
                                echo "</h5>";
							echo "</div>";
						}
					}
					echo '
                    <button  
                    class="b btn btn-md" 
                    style="background: linear-gradient(135deg,#3F5EFB, #E100FF);color: white;margin-top:5px;margin-bottom:5px" onclick="shows(\''.$i.'\',\''.$qid.'\')" id="'.$i.'">View All Answers</button></div>';
					$i=$i+1;
				}
			}
			else
			{
				
			}
		?>
	
	</div>    
    <div class="text-center">
	    <button id="but1" onclick="shows('but1','lm')" class="b btn btn-md" style="background: linear-gradient(135deg,#3F5EFB, #E100FF);color: white;">Show more</button>
    </div>
    </div>
</div>

		
		
		
			
</body>
</html>