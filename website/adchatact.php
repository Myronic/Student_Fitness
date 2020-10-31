<?php
	session_start();
	
	$con=mysqli_connect("127.0.0.1","root","","webfit1");
	
	mysqli_select_db($con, 'webfit1');
	
	if(isset($_POST['submit']))
	{
		
		$chat=$_POST['chat'];
		
		$sql1="select * from chat where username='PKK'";
	<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>if($row['status']==1)
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
	
