<?php
	
	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	mysqli_select_db($con, 'webfit1');
	
	$username=$_SESSION['username'];
	
	$q1 = "select names from chall where id='1' ";
	$q2 = mysqli_query($con, $q1);
	$q3 = mysqli_fetch_array($q2);

	$h = $q3['names'];
	$pieces = explode("/", $h);
	echo $pieces[0]; // piece1	
	echo $pieces[1]; // piece2
	echo $pieces[2]; // piece1	
	echo $pieces[3];


?>