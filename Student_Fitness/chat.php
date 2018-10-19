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
	height:500px;
	overflow-y:scroll;
  }
  .sent
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
  

  .rec
  {
	background-color:lightgray;
	float:left;
	border:2px solid lightgray;
	margin-left:10px;
	padding: 5px 10px; 
	color: black;
	font-weight:bold;
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

   <div class="container con">
        <div id="content" class="msgs"></div>
        <hr>
        <div align="left">
            <h4>Type here...</h4>
            <form action="chatact.php" method="POST">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-8" align="center">
                        <textarea rows="2" name="chat" id="txt"></textarea>
                    </div>
                   <div class="col-lg-1">
                        <input type="submit" name="submit" value="Send" class="btn btn-primary btn-lg">
                    </div>
                </div>
            </form>
        </div>
    </div>		
		
		
			
</body>

</html>