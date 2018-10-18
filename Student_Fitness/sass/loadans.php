
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
	
	
			$qid=$_POST['qtid'];

					$sql="select * from questions where qid='$qid' ";
					$result=mysqli_query($con,$sql);
					$row1=mysqli_fetch_assoc($result);
					
//					echo '<div class="container-fluid qna" >';
					echo "<h4 id='txt'>";
                        echo $row1['quest'];
                    echo "</h4>";
                    echo "<h5>";
					   echo "Asked by ".$row1['username'];
                    echo "</h5>";
					$i=0;
					$sql1="select * from answers where qid='$qid' ";
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
					echo '<h4 style="margin-top:5%;">Write your answer here :</h4>
							<form action="insa.php" method="POST">
								<div class="text-center">
									<textarea rows="3" name="ans" id="txt" style="font-size:1em;border-radius:10px" placeholder=""></textarea><br>
								</div>
								<div class="text-center">
									<input type="hidden" name="qid" value="'.$qid.'">
								</div>
								<div class="text-left">
									<input type="submit" name="posta" value="POST" class="b btn btn-md" style="background: linear-gradient(135deg,#3F5EFB, #E100FF);color: white;margin-top:5px;margin-bottom:5px">
								</div>
							</form>';
					echo '
                        <div class="text-center">
                        <button  class="b btn btn-md" style="background: linear-gradient(135deg,#3F5EFB, #E100FF);color: white;margin-top:5px;margin-bottom:5px" onclick="shows(\''.$i.'\',\''.$qid.'\')" id="'.$i.'">---That&#39s all---</button></div></div>';
					
				
		?>
    </body>
</html>	