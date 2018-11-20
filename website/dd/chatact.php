<?php
	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	$user=$_SESSION['username'];
		
		$chat=$_POST['chats'];
		
		$sql1="select * from chat where username='$user'";
		$result=mysqli_query($con,$sql1);
		if(mysqli_num_rows($result)==0)
		{
			$sql="insert into chat(username,msg,status) values('$user','$chat',1)";
			mysqli_query($con,$sql);
			
			//header("Location: chat.php");
		}
		else if(mysqli_num_rows($result)==1)
		{
			
			$row=mysqli_fetch_assoc($result);
			if($row['status']==1)
			{
				$msg=$row['msg'];
				$finmsg=$msg.'~'.$chat;
				$sql2="update chat set msg='$finmsg' where username='$user'";
				mysqli_query($con,$sql2);
				//header("Location: chat.php");
			}
			else
			{
				$msg=$row['msg'];
				$finmsg=$msg.'`'.$chat;
				$sql2="update chat set msg='$finmsg',status=1 where username='$user'";
				mysqli_query($con,$sql2);
				//header("Location: chat.php");
			}
		}
		
	
	
	
	$sql="select * from chat where username='$user'";
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
				$output = $output.'<div class="sent" >'.$b.'</div><br><br>';
			}
			if( $i < (sizeof($r1)))
			{
				
				$r2=explode("~",$r1[$i]);
				
				foreach($r2 as $b)
				{
					if($b!="")
					{
						$output= $output."<div class='rec'>".$b."</div><br><br>";
					}
				}
				
			}
			$i=$i+1;
		}
		echo $output;
		
	}
		
?>
	