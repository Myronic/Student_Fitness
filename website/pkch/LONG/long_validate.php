<?php
	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	///$user=$_SESSION['username'];
		
		$stat=$_POST['stat'];
		$a=$_POST['num'];
		
		$sql=" update lchall set status='$stat',time=now() where username='PKK' ";
		mysqli_query($con,$sql);
		
		
?>