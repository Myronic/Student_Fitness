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
  
</head>
<body>
	

<?php

	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	
			$newcount=$_POST['newcount'];
            $user=$_SESSION['username'];
			$sql="select * from questions where username='$user' LIMIT $newcount ";

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
		
    </body>
</html>