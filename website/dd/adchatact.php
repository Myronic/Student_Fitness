<?php
	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	
	
		
		$chat=$_POST['chats'];
		
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
					
				}
				else
				{
					$rec=$row['received'];
					$finmsg=$rec.'`'.$chat;
					$sql2="update chat set received='$finmsg' , status=0 where username='PKK'";
					mysqli_query($con,$sql2);
					
				}
			}
			else
			{
				$rec=$row['received'];
				$finmsg=$rec.'~'.$chat;
				$sql2="update chat set received='$finmsg' , status=0 where username='PKK'";
				mysqli_query($con,$sql2);
				
			}
		
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
		$output="";
		foreach($a1 as $a)
		{
			$a2=(explode("~",$a));
			foreach($a2 as $b)
			{
				$output=$output."<div class='rec' >".$b."</div><br><br>";
			}
			if($i<sizeof($r1)-1)
			{
				$r2=(explode("~",$r1[$i]));
				foreach($r2 as $b)
				{
					if($b!="")
					{
						$output=$output."<div class='sent' >".$b."</div><br><br>";
					}
				}
			}
			$i=$i+1;
		}
	}
		
?>
		
?>
	