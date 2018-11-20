<?php
	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	
	if(isset($_POST['submit']))
	{
		
		$chat=$_POST['chat'];
		
		$sql1="select * from chat where username='PKK'";
		$result=mysqli_query($con,$sql1);
		
		
			
			$row=mysqli_fetch_assoc($result);
			if($row['status']==1)
			{
				if($row['received']=="")
				{
					$finmsg=$chat;
					$sql2="update chat set received='$finmsg' , status=0 where username='PKK'";
					mysqli_query($con,$sql2);
					header("Location: adchat.php");
				}
				else
				{
					$rec=$row['received'];
					$finmsg=$rec.'`'.$chat;
					$sql2="update chat set received='$finmsg' , status=0 where username='PKK'";
					mysqli_query($con,$sql2);
					header("Location: adchat.php");
				}
			}
			else
			{
				$rec=$row['received'];
				$finmsg=$rec.'~'.$chat;
				$sql2="update chat set received='$finmsg' , status=0 where username='PKK'";
				mysqli_query($con,$sql2);
				header("Location: adchat.php");
			}
		
		
	}
		
?>
	