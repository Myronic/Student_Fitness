<?php
	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	//$user=$_SESSION['username'];
		
		//$chat=$_POST['chats'];
		
		//$sql1="select * from chat where username='$user'";
		//$result=mysqli_query($con,$sql1);
		
			$sql="insert into schall(name,username) values('Ninja','PKK')";
			mysqli_query($con,$sql);
			
			//header("Location: chat.php");
		
?>