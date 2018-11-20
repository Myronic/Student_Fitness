<?php
	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	
	if(isset($_POST['submit']))
	{
		$user=$_SESSION['username'];
		$qstn=$_POST['qtn'];
		echo $qstn;
		$sql= "insert into questions(username,quest) values('$user','$qstn')" ;
		$result=mysqli_query($con,$sql);
		header("Location: forum.php");
	}
		
?>
	