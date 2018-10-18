

		

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
  .msgs
  {
	width:100%;
	height:500px;
	overflow-y:scroll;
  }
  .sent
  {
	background-color:#94FB7B;
	float:right;
	border-radius:4px;
	color:#111;
  }
  .rec
  {
	background-color:#37D411;
	float:left;
	border-radius:4px;  
	color:#111;
  }
  </style>
<script>

$(document).ready(function(){

	function dis()
	{
		$("#content").load("udisplay.php",{
						
			});
	}
	setInterval(dis,100);
	
var elmnt = document.getElementById("content");
var y = elmnt.scrollHeight;



	
var myVar = setInterval(myTimer, 100);

function myTimer() {
   $("#content").animate({ scrollTop : y*1000 }, 2000);
   stopfun();
}

function stopfun() {
    clearInterval(myVar);
}
	                
});

</script>
  
  
</head>
<body>
	
	<div id="content" class="msgs">
		
	
		
	
	</div>

	
	<div>
	<h4>Type here :</h4>
		<form action="chatact.php" method="POST">
			<textarea rows="2" name="chat" cols="100"></textarea>
			<input type="submit" name="submit" value="Send" class="btn btn-primary">
		</form>
	</div>

		
		
		
			
</body>

</html>