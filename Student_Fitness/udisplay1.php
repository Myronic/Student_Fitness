<?php
	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	$sql="select * from chat where username='PKK'";
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result))
	{
		$row=mysqli_fetch_assoc($result);
		$my=$row['msg'];
		$rec=$row['received'];
		
		$a1=explode("`",$my);
		$r1=explode("`",$rec);
		$i=0;
		foreach($a1 as $a)
		{
			$a2=(explode("~",$a));
			foreach($a2 as $b)
			{
				echo "<div class='rec' >".$b."</div><br><br>";
			}
			if($i<sizeof($r1))
			{
				$r2=(explode("~",$r1[$i]));
				foreach($r2 as $b)
				{
					echo "<div class='sent' >".$b."</div><br><br>";
				}
			}
			$i=$i+1;
		}
	}
		
?>