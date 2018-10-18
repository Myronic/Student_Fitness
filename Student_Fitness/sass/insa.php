<?php

	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	
	if(isset($_POST['posta']))
	{
		$user=$_SESSION['username'];
		$ans=$_POST['ans'];
		$qid=$_POST['qid'];
		echo $ans;
		echo $qid;
		$sql= "insert into answers(username,qid,answer) values('$user','$qid','$ans')" ;
		$result=mysqli_query($con,$sql);
		header("Location: forum.php");	
	}
?>