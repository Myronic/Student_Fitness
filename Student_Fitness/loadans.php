

<?php

	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	
	
			$qid=$_POST['qtid'];

					$sql="select * from questions where qid='$qid' ";
					$result=mysqli_query($con,$sql);
					$row1=mysqli_fetch_assoc($result);
					
					echo $row1['quest'];
					echo "Asked by ".$row1['username'];
					
					$i=0;
					$sql1="select * from answers where qid='$qid' ";
					$result1=mysqli_query($con,$sql1);
					if(mysqli_num_rows($result1) > 0)
					{
						while($row=mysqli_fetch_assoc($result1))
						{
							echo "<div style='border:1px solid #555;margin-bottom:2%'>";
							echo $row['answer'];
							echo "Answered by ".$row['username'];
							echo "</div>";
						}
					}
					echo '<button onclick="shows(\'#'.$i.'\',\''.$qid.'\')" id="'.$i.'">Show More</button></div>';
					
				
		?>
		