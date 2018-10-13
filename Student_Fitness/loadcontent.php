	

<?php

	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	
			$newcount=$_POST['newcount'];
			$sql="select * from questions LIMIT $newcount";
			$result=mysqli_query($con,$sql);
			$i=0;
			if(mysqli_num_rows($result) > 0)
			{
			
				while($row=mysqli_fetch_assoc($result))
				{
					echo '<div class="'.$i.'" style="border:1px solid #555;margin-bottom:2%">';
					echo $row['quest'];
					echo "Asked by ".$row['username'];
			
					$qid=$row['qid'];
					
					$sql1="select * from answers where qid='$qid' limit 2";
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
					echo '<button onclick="shows(\''.$i.'\',\''.$qid.'\')" id="'.$i.'">Show More</button></div>';
					$i=$i+1;
				}
			}
			else
			{
				
			}
		?>
		
