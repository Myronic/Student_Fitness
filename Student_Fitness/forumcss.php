
<?php
	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	
		
		/*$sql= "Select * from questions" ;
		$result=mysqli_query($con,$sql);
		$count = mysqli_num_rows($result);
		
		$q3 = mysqli_fetch_array($result);



		$qts[] = $q3['quest'];
		
		$result1 = mysqli_query($con,"SELECT * FROM questions");
    $Data= Array();
	$Data1= Array();
    while ($row = mysqli_fetch_assoc($result1)) 
    {
            $Data[] =  $row['quest'];
			$Data1[] =  $row['qid'];
    }*/
	
		
?>
		

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Courgette|Pacifico|Satisfy|K2D" rel="stylesheet">

  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  
  
  
  <style>

  body{
	  background-color:ghostwhite;
  }
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
  #content
  {
	  height:100%;
	  overflow:auto;
	  border:1px solid black;
	  padding:2%;
  }


.showbtn {
  padding: 15px 15px;
  font-size: 15px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #007bff;
  border: none;
  border-radius: 5px;
  box-shadow: 0 5px lightgray;
}

.showbtn:hover {background-color: #007bff}

.showbtn:active {
  background-color: #007bff;
  box-shadow: 0 2px lightgray;
  transform: translateY(4px);
}
 .con{
            background-color: white;
            border-radius: 20px;
			border: 5px solid gray;
            padding: 20px;
			margin-top:20px;
			width:80vw;
            /* box-shadow: 10px 10px gray; */     
        }

		.conin{
            background-color: deepskyblue;
            border-radius: 10px;
			/* border: 5px solid gray	; */
            padding: 20px;
			margin-top:20px;
			margin-bottom:20px;
			color:white;
			font-family: 'K2D', sans-serif;
			font-size: 25px;
			font-weight: 550;
			<width:70></width:70>vw;


            /* box-shadow: 10px 10px gray; */     
        }

		.conans{
			background-color: white;
            border-radius: 5px;
			/* border: 2px solid gray	; */
            padding: 10px;
			margin-top:10px;
			margin-bottom:10px;
			color:black;
			font-family: 'K2D', sans-serif;
			font-size: 15px;
			font-weight: 100;
			width:65vw;


		}

		.conask{
            background-color: white;
            border-radius: 20px;
			border: 5px solid gray;
            padding: 20px;
			margin-top:20px;
			margin-bottom:20px;
			width:75vw;
            /* box-shadow: 10px 10px gray; */     
        }
  </style>
  
  <script>
			
			
			var count=2;
			var acount=1;
			function shows(name,qid)
			{
				if(name=="but1")
				{
					$(document).ready(function(){
						count=count+2;
						$("#content").load("loadcontent.php",{
							newcount:count
						});		
					});
				}
				else
				{
					$(document).ready(function(){
						
						var a='.'+ name;
						$(a).load("loadans.php",{
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


	<div class="container con">
	<div class="container conask">
					<form action="insert.php" method="POST">
				<label for="fcta"><h3>Ask a Question</h3></label>
    			<textarea class="form-control" id="fcta" rows="3"></textarea> <br>
				<input type="submit" name="submit" value="ASK" class="btn btn-primary btn-lg">
				</form>
				
			</div>
			<div class="container conask">
		
		<?php
			$sql="select * from questions LIMIT 2";
			$result=mysqli_query($con,$sql);
			$i=0;
			if(mysqli_num_rows($result) > 0)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					echo '<div class="'.$i.' conin" >';
					echo $row['quest'];
			
					$qid=$row['qid'];
					
					$sql1="select * from answers where qid='$qid' limit 2";
					$result1=mysqli_query($con,$sql1);
					if(mysqli_num_rows($result1) > 0)
					{
						while($row=mysqli_fetch_assoc($result1))
						{
							echo "<div class='conans'>";
							echo $row['answer'];
							echo "</div>";
						}
					}
					echo '<button  class="btn  btn-sm btn-outline-light" onclick="shows(\''.$i.'\',\''.$qid.'\')" id="'.$i.'">Show More</button></div>';
					$i=$i+1;
				}
			}
			else
			{
				
			}
		?>
		<div class="row text-center">
			<div class="col" style="font-family: 'K2D', sans-serif;font-size: 15px;font-weight: 100;"><button class="btn btn-outline-primary btn-md showbtn" onclick="shows('but1','lm')" >More Answers</button></div>
		</div>
	</div>


		
		
		
			
</body>
</html>