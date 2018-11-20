<?php
	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	
	if(isset($_POST['submit']))
	{
		$user=$_SESSION['username'];
		$chat=$_POST['chat'];
		
		$sql1="select * from chats where username='$user'";
		$result=mysqli_query($con,$sql1);
		if(mysqli_num_rows($result)==0)
		{
			$sql="insert into chats(username,msg,status) values('$user','$chat',1)";
			mysqli_query($con,$sql);
			
			header("Location: forum.php");
		}
		else if(mysqli_num_rows($result)==1)
		{
			
			$row=mysqli_fetch_assoc($result);
			if($row['status']==1)
			{
				$msg=$row['msg'];
				$finmsg=$msg.'~~'.$chat;
				$sql2="update chats set msg='$finmsg' where username='$user'";
				mysqli_query($con,$sql2);
				header("Location: chat.php");
			}
			else
			{
				$msg=$row['msg'];
				$finmsg=$msg.'~'.$chat;
				$sql2="update chats set msg='$finmsg' where username='$user'";
				mysqli_query($con,$sql2);
				header("Location: chat.php");
			}
		}
		
	}
		
?>
	