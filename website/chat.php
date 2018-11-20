

		

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  
  <style>
  body{
    /*background-image: linear-gradient(100deg,#3F5EFB, #E100FF);*/
    font-family: monospace;
    background-color: white;
}


.con{
    background-color:  rgba(255,255,255,0.25);
    background-position: center cover;
    height: auto;
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    margin-top: 10px;
    max-width: 100%;
    font-size: 20px;
    

} 

  .msgs
  {
	width:100%;
	height:400px;
	overflow-y:scroll;
	background-image: url(back.png);
      border-radius: 30px;
  }
  .rec
  {
	background-color:blue;
	float:right;
	border:2px solid blue;
	margin-right:10px;
	padding: 5px 10px; 
	color: white;
	/*font-weight:bold;*/
	border-top-right-radius:0px;
	border-top-left-radius:15px;
	border-bottom-right-radius:15px;
	border-bottom-left-radius:15px; 
 }
  

  .sent
  {
	background-color:lightgray;
	float:left;
	border:2px solid lightgray;
	margin-left:10px;
	padding: 5px 10px; 
	color: black;
	/*font-weight:bold;*/
	border-top-right-radius:15px;
	border-top-left-radius:0px;
	border-bottom-right-radius:15px;
	border-bottom-left-radius:15px;

  }

  textarea {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    width: 100%;
    box-shadow: 0px 5px 5px rgba(0,0,0,.2),0px -5px 5px rgba(0,0,0,.2);
    border-radius: 10px;
}
#txt{
        color: dimgray;
    font-size: 1.5em;
}
  textarea {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    width: 100%;
    box-shadow: 0px 5px 5px rgba(0,0,0,.2),0px -5px 5px rgba(0,0,0,.2);
    border-radius: 10px;
}
#txt{
        color: dimgray;
    font-size: 1.5em;
    border-radius: 20px;
    border: 0.5px solid skyblue;
   
}
#sendbtn
      {
position: relative;
          left:-8px;
          top:-3px;      }
 #sendbtn
      {
          border-radius: 100%;
          height:70px;
          width:70px;
           
          
        
      }
img
      {
          position: relative;
          left:-8px;
          top:-3px;
      }

#sendbtn:hover
      {
          box-shadow: 5px 5px 5px grey;
      }
      
      
#labelnav
      {
          height:70px;
          background-color: dodgerblue;
          border: 2px solid dodgerblue;
          position: absolute;
          width: 98%;
          top:5px;
          color: white;
          font-size: 15px;
          border-radius: 20px;
          margin-left:20px;

      }
#avatar
      {
          border-radius: 100%;
          height:50px;
          width: 50px;
          margin-left: 50px;
          position: relative;
          top:5px;
      }
    #txtandsend
      {
          background: dodgerblue;
          color:white;
          
      }
	  body
	  {
		  overflow-x:hidden;
	  }
  </style>



  <script>
  $(document).ready(function(){

	function dis()
	{
		$.ajax({
			
			url: "udisplay1.php",
			dataType:"html",
			success:function(data)
			{
				$('#content').html(data);
			}
		});
	}
	setInterval(dis,100);

	$('#sendbtn').click(function(){
	
		
		$.ajax({
			method: "POST",
			url: "chatact.php",
			
			dataType:"html",
			data: { chats : $('#txt').val()},
			success:function(data)
			{
				$('#content').html(data);
			}
		});
				e.preventDefault();

		
	});
	var elmnt = document.getElementById("content");
var y = elmnt.scrollHeight;
	
var myVar = setInterval(myTimer, 100);

function myTimer() {
$('#content').animate({scrollTop:y*1000}, 200);
   stopfun();
}

function stopfun() {
    clearInterval(myVar);
}

});
</script>
</head>
<body>
	
	<!--<div id="content" class="msgs">
		
	
		
	
	</div>

	
	<div align="center">
	<h4>Type your question here :</h4>
		<form action="adchatact.php" method="POST">
			<textarea rows="3" name="chat" cols="100"></textarea>
			<input type="submit" name="submit" value="Send" class="btn btn-primary">
		</form>
	</div> -->

		<div class="container con">
			<div id="content" class="msgs"></div>
<hr>
			<div align="center">
			<h4>Type your question here :</h4>
				<form method="POST">
					<div class="row text-center justify-content-center">
						<div class="col-lg-8" align="center">
							<textarea rows="2" name="chat" id="txt"></textarea>
						</div>
					<div class="col-lg-1">
					
				 <button  id="sendbtn" name="submit"><img src="sendbtn.png" width="70" height="70" ></button>
					</div>
				</form>
			</div>
		</div>
		</div>
		
			
</body>
</html>