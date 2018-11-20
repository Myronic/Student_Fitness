

<?php
	session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Diet Plan</title>
	 <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
		rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
		
		<link rel="stylesheet" href="css/mydiet.css">
		
		<script src="js/mydiet.js"></script>
		
</head>
<body>

<!--
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
        <li><a href="chall.php">Challenges</a></li>
      </ul>
	  
	  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle user"><?php echo $_SESSION['username'];?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="chat.php">Chat With Trainer</a></li>
                            <li class="divider"></li>
							<li><a href="forum.php">Q&A Forum</a></li>
                            <li class="divider"></li>
							<li><a href="#">View Reports</a></li>
							<li class="divider"></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
    </div>
  </div>
</nav>
-->

	

 <div class=" con ">
          <div class="row justify-content-center" style="background-color: gray ; border-radius:10px">
           <label class="radio-inline">
      <input type="radio" name="optradio" checked>Option 1
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Option 2
    </label>
        </div>
      <div class="row justify-content-around">
      <div class="col-md-2 rowHeader"><em>Meals/time</em></div>
      <div class="col-md-6 rowHeader"><em>meal items</em></div>
      <div class="col-md-3 rowHeader">
          <div class="row justify-content-around">
              <div class="col-md-12 "><em>macro breakdown</em></div>
          </div>
      </div> 
   </div>
   <hr>
   
   <div class="row rmargin justify-content-around">
      <div class="col-md-2 rowHeight"><em>Meal number 1 </em><br>Preworkout<br>[7:00 AM]</div>
      <div class="col-md-6 rowHeight" ><em id="m1">veg meal number 1 - preworkout</em></div>
      <div class="col-md-3 rowHeight">
          <div class="row justify-content-around">
              <div class="col-md-4 pcf"><em>protein</em></div>
              <div class="col-md-4 pcf"><em>carbs</em></div>
              <div class="col-md-4 pcf"><em>fats</em></div>
          </div>
          <hr>
          <div class="row justify-content-around">
              <div class="col-md-4 pcf">20</div>
              <div class="col-md-4 pcf">40</div>
              <div class="col-md-4 pcf">10</div>
          </div>
      </div> 
   </div>

    <div class="row justify-content-around rmargin">
      <div class="col-md-2 rowHeight"><em>Meal number 2 </em><br>Postworkout<br>[9:00 AM]</div>
      <div class="col-md-6 rowHeight"><em id="m2">veg meal number 2 - postworkout</em></div>
      <div class="col-md-3 rowHeight">
          <div class="row justify-content-around">
              <div class="col-md-4 pcf"><em>protein</em></div>
              <div class="col-md-4 pcf"><em>carbs</em></div>
              <div class="col-md-4 pcf"><em>fats</em></div>
          </div>
          <hr>
          <div class="row justify-content-around">
              <div class="col-md-4 pcf">30</div>
              <div class="col-md-4 pcf">60</div>
              <div class="col-md-4 pcf">10</div>
          </div>
      </div> 
   </div>
  

    <div class="row justify-content-around rmargin">
      <div class="col-md-2 rowHeight"><em>Meal number 3 </em><br>lunch<br>[12:30 PM]</div>
      <div class="col-md-6 rowHeight"><em id="m3">veg meal number 3 - lunch </em></div>
      <div class="col-md-3 rowHeight">
          <div class="row justify-content-around">
              <div class="col-md-4 pcf"><em>protein</em></div>
              <div class="col-md-4 pcf"><em>carbs</em></div>
              <div class="col-md-4 pcf"><em>fats</em></div>
          </div>
          <hr>
          <div class="row justify-content-around">
              <div class="col-md-4 pcf">30</div>
              <div class="col-md-4 pcf">60</div>
              <div class="col-md-4 pcf">20</div>
          </div>
      </div> 
   </div>


    <div class="row justify-content-around rmargin">
      <div class="col-md-2 rowHeight"><em>Meal number 4 </em><br>snacks<br>[4:30/5:30 PM]</div>
      <div class="col-md-6 rowHeight"><em id="m4">veg meal number 4 - snacks</em></div>
      <div class="col-md-3 rowHeight">
          <div class="row justify-content-around">
              <div class="col-md-4 pcf"><em>protein</em></div>
              <div class="col-md-4 pcf"><em>carbs</em></div>
              <div class="col-md-4 pcf"><em>fats</em></div>
          </div>
          <hr>
          <div class="row justify-content-around">
              <div class="col-md-4 pcf">20</div>
              <div class="col-md-4 pcf">40</div>
              <div class="col-md-4 pcf">10</div>
          </div>
      </div> 
   </div>
 
    
    <div class="row justify-content-around rmargin">
      <div class="col-md-2 rowHeight"><em>Meal number 5 </em><br>dinner<br>[9:00 PM]</div>
      <div class="col-md-6 rowHeight"><em id="m5">veg meal number 5 - dinner</em></div>
      <div class="col-md-3 rowHeight">
          <div class="row justify-content-around">
              <div class="col-md-4 pcf"><em>protein</em></div>
              <div class="col-md-4 pcf"><em>carbs</em></div>
              <div class="col-md-4 pcf"><em>fats</em></div>
          </div>
          <hr>
          <div class="row justify-content-around">
              <div class="col-md-4 pcf">20</div>
              <div class="col-md-4 pcf">40</div>
              <div class="col-md-4 pcf">10</div>
          </div>
      </div> 
   </div>
   <hr>

  <div class="row justify-content-around ">
      <div class="col-md-2 rowHeader"><em>All meals</em></div>
      <div class="col-md-6 rowHeader"><em>total macros of the day  =  </em></div>
      <div class="col-md-3 rowHeader">
          <div class="row justify-content-around">
             <div class="col-md-4 "><em>120</em></div>
              <div class="col-md-4 "><em>240</em></div>
              <div class="col-md-4 "><em>60</em></div>
          </div>
      </div> 
   </div>
</div>






</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</html>