

		

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
  .msgs
  {
	width:100%;
	height:500px;
	overflow:scroll;
  }
  </style>
  
  
</head>
<body>
	
	<div id="content" class="msgs">
		<?php
	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	$user=$_SESSION['username'];
	$sql="select * from chats where username='$user'";
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$my=$row['msg'];
			$rec=$row['received'];
			$j=0;
			for($i=0;$i<strlen($my);$i++)
			{
				if($my[$i]=='~')
				{
					if($my[$i+1]=='~')
					{
						echo '<div style="float:right">'.substr($my,$j,$i-$j).'</div><br>';
						$j=$i+2;
					}
					else
					{
						
					}
				}
			}
		}
	}
		
?>
	
		
	
	</div>

	
	<div>
	<h4>Type your question here :</h4>
		<form action="chatact.php" method="POST">
			<textarea rows="2" name="chat" cols="100"></textarea>
			<input type="submit" name="submit" value="Send" class="btn btn-primary">
		</form>
	</div>

		
		
		
			
</body>
</html>