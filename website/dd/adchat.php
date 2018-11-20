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
	margin-top:5%;
	width:100%;
	height:400px;
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
  
  var myVar;

	function myTimer() {
		//alert("hmmmmmm");
		$("#content").animate({ scrollTop : 4800000 }, 200);	
	}
	
	myVar = setInterval(myTimer, 2000);

	function stop()
	{		
		//alert("heyy");
		clearInterval(myVar);
	}
	
	function start()
	{		
		clearInterval(myVar);
		myVar = setInterval(myTimer, 2000);
	}
  
  
  $(document).ready(function(){
$("#content").animate({ scrollTop : 4800000 }, 20);	
	function dis()
	{
		$("#content").load("udisplay1.php");

	}
	setInterval(dis,100);
	
	
	
	
	$('#formsend').submit(function(e){

		e.preventDefault();
		
                $.ajax({
                    type : "POST",
                    url : "adchatact.php",
                    data : {chats : $('#txt').val()}, 
       
                    success : function(response) {
        
                        $("#content").html(response);
                        //$(".post_submitting").fadeOut(1000);
                    }
                });
			    $("#content").animate({ scrollTop : 480000 }, 20);	
				$('#txt').val("");
                e.preventDefault();
			
	});
	
	                
});


</script>
</head>



    <body>		
	
		
	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="sflogo.png" width="auto" height="40px" style=" position: relative; top: -10px" class="d-inline-block align-top">
      </a>
      <div class="navbar-brand">Student Fitness</div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="workout1.php">Workout</a></li>
        <li><a href="mydiet.php">Diet</a></li>
        <li><a href="#">Challenges</a></li>
      </ul>
	  
	  <ul class="nav navbar-nav navbar-right">
                   <li><a href="../logout.php">Logout</a></li>
                </ul>
    </div>
  </div>
</nav>
	
    <div id="content" class="msgs" onclick="stop()">	
	</div>

   <div class="container con" id="forme" onclick="start()">
        
        
        <div align="left">
            <h4>Type here...</h4>
            <form name="formsend" id="formsend">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-8" align="center">
                        <textarea rows="2" name="chat" id="txt"></textarea>
                    </div>
                   <div class="col-lg-1">
                        <input type="submit" name="submit" id="send" value="Send" class="btn btn-primary btn-lg">
                    </div>
                </div>
            </form>
        </div>
    </div>		
		
	
</body>
</html>