<?php
				
				session_start();
				$con=mysqli_connect("127.0.0.1","root","","webfit1");
				mysqli_select_db($con, 'webfit1');
				
				$sql="select * from lchall where username='PKK' && chname='pullups' ";
				$result = mysqli_query($con,$sql);
				
				if(mysqli_num_rows($result)==1)
				{
					while($row=mysqli_fetch_assoc($result))
					{
                        
						$stat=$row['status'];
                        $_SESSION['st']=$stat;
						$time=$row['time'];
					}
				}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

     <link rel="stylesheet" href="long.css">
     <link href="https://fonts.googleapis.com/css?family=Revalia" rel="stylesheet">
	<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
	 <script>
	 var foo;
	 $(document).ready(function()
	 {
		 
		
			var stat=<?php echo $stat;?>;
			stat=parseInt(stat);
			
			//a=parseInt(a);
			var c=0;
			var temp=stat;
			//alert(stat);
			while(temp>0)
			{
				if(temp<=90)
					temp=temp-3;
				else if(temp>90&&temp<=98)
					temp=temp-2;
				else
					temp=temp-1;
				c++;
			}
			for(var i=1;i<=c;i++)
			{
				document.getElementById(i).checked=true;
			}
			
		foo=function(a)
		{
			
			<?php
				
				
				$con=mysqli_connect("127.0.0.1","root","","webfit1");
				mysqli_select_db($con, 'webfit1');
				
				$sql="select * from lchall where username='PKK' && chname='pullups' ";
				$result = mysqli_query($con,$sql);
				
				if(mysqli_num_rows($result)==1)
				{
					while($row=mysqli_fetch_assoc($result))
					{
						$stat=$row['status'];
						$time=$row['time'];
					}
				}
			?>
			var stat=<?php echo $stat;?>;
			stat=parseInt(stat);
			
			a=parseInt(a);
			var time1="<?php echo $time;?>";
			var c=0;
			var temp=stat;
			while(temp>0)
			{
				if(temp<=90)
					temp=temp-3;
				else if(temp>90&&temp<=98)
					temp=temp-2;
				else
					temp=temp-1;
				c++;
			}
			for(var i=1;i<=c;i++)
			{
				document.getElementById(i).checked=true;
			}
			var today=new Date();
			var time2=new Date(time1);
		
			
			var difference = today.getTime() - time2.getTime();

			var dd = Math.floor(difference/1000/60/60/24);
			difference -= dd*1000*60*60*24

			var hd = Math.floor(difference/1000/60/60);
			difference -= hd*1000*60*60

			var md = Math.floor(difference/1000/60);
			difference -= md*1000*60

			var sd = Math.floor(difference/1000);
			
			//alert(sd +"  "+ md +" "+dd);
			
			if(stat<=87)
			{
				if( dd >=2  && (stat == ((a-1)*3) ) )
				{
					stat=stat+3;
					$(document).ready(function()
					{
						$.ajax({
							type : "POST",
							url : "long_validate.php",
							data : {stat : stat,num : a}
						});
					});
				}
				else
				{
					alert("You cannot attempt this challenge");
					document.getElementById(a).checked=false;
				}
			}
			else if(stat>=90 && stat<=96)
			{
				if( dd==2 && a>30 && a<35)
				{
					if( (a==31 && stat==90) || (a==32 && stat==92) || (a==33 && stat==94) || (a==34 && stat==96) )
					{
						stat=stat+2;
						$.ajax({
							type : "POST",
							url : "long_validate.php",
							data : {stat : stat,num : a}, 
						});
					}
					else
					{
						alert("You cannot attempt this challenge");
						document.getElementById(a).checked=false;
					}
				}
				else
				{
					alert("You cannot attempt this challenge");
					document.getElementById(a).checked=false;

				}
			}
			else if(stat>=98 && stat<=99)
			{
				if( dd==2 && (a==35 || a==36) )
				{
					if( (a==35 && stat==98) || (a==36 && stat==99) )
					{
						stat=stat+1;
						$.ajax({
							type : "POST",
							url : "long_validate.php",
							data : {stat : stat,num : a}, 
						});
					}
					else
					{
						alert("You cannot attempt this challenge");
						document.getElementById(a).checked=false;

					}
				}
				else
				{
					alert("You cannot attempt this challenge");
					document.getElementById(a).checked=false;

				}
			}
		}
	 });
	 </script>
	 
</head> 

<body>
<div class="container con">
  <h3 align="center" style="color: yellow">THE 50 PULLUPS CHALLENGE</h3>
        <hr>
    <div class="container con" style="box-shadow: none">
        <div class="row justify-content-around">
            <h4 align="center">WEEK 1</h4>
        </div><hr>
        <div class="container con">
                <div class="row justify-content-around text-center">
                        <div class="col-2 box"><h4>Day</h4></div>
                        <div class="col-5  box"><h4>reps / set</h4></div>
                        <div class="col-2 box">
                            <div class="row text-center">
                                <div class="col"><h4>done</h4></div>
                            </div>
                        </div>
                    </div>
                        <hr>
                    <div class="row justify-content-around text-center act">
                        <div class="col-2 box">day-1</div>
                        <div class="col-5 text-center">
                            <div class="row justify-content-between">
                                    <div class="col-2 box">2</div>-
                                    <div class="col-2 box">3</div>-
                                    <div class="col-2 box">2</div>-
                                    <div class="col-2 box">2</div>-
                                    <div class="col-2 box">3</div>
                            </div>
                        </div>
                        <div class="col-2 box">
                            <div class="row text-center">
                                <div class="col"><input type="checkbox" id="1" onclick="foo(1)"></div>
                            </div>
                        </div>
                    </div> <br>
                    <div class="row justify-content-around text-center">
                            <div class="col-2 box">day-2</div>
                            <div class="col-5 text-center">
                                <div class="row justify-content-between">
                                        <div class="col-2 box">3</div>-
                                        <div class="col-2 box">4</div>-
                                        <div class="col-2 box">2</div>-
                                        <div class="col-2 box">2</div>-
                                        <div class="col-2 box">4</div>
                                </div>
                            </div>
                            <div class="col-2 box">
                                <div class="row text-center">
                                    <div class="col"><input type="checkbox" id="2" onclick="foo(2)"></div>
                                </div>
                            </div>
                        </div> <br>
                        <div class="row justify-content-around text-center">
                                <div class="col-2 box">day-3</div>
                                <div class="col-5 text-center">
                                    <div class="row justify-content-between">
                                            <div class="col-2 box">3</div>-
                                            <div class="col-2 box">4</div>-
                                            <div class="col-2 box">3</div>-
                                            <div class="col-2 box">3</div>-
                                            <div class="col-2 box">5</div>
                                    </div>
                                </div>
                                <div class="col-2 box">
                                    <div class="row text-center">
                                        <div class="col"><input type="checkbox" id="3" onclick="foo(3)"></div>
                                    </div>
                                </div>
                            </div> <br>
                
        </div>
    </div>
        <hr>
    <div class="container con" style="box-shadow: none">
        <div class="row justify-content-around">
            <h4 align="center">WEEK 2</h4>
        </div><hr>
        <div class="container con">
        <div class="row justify-content-around text-center">
                <div class="col-2 box"><h4>Day</h4></div>
                <div class="col-5  box"><h4>reps / set</h4></div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><h4>done</h4></div>
                   </div>
                </div>
            </div>
                <hr>
            <div class="row justify-content-around text-center">
                <div class="col-2 box">day-1</div>
                <div class="col-5 text-center">
                   <div class="row justify-content-between">
                           <div class="col-2 box">3</div>-
                           <div class="col-2 box">5</div>-
                           <div class="col-2 box">3</div>-
                           <div class="col-2 box">3</div>-
                           <div class="col-2 box">5</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox" id="4" onclick="foo(4)"></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">5</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">5</div>-
                               <div class="col-2 box">5</div>-
                               <div class="col-2 box">6</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox" id="5" onclick="foo(5)"></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">6</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">6</div>-
                                   <div class="col-2 box">6</div>-
                                   <div class="col-2 box">8</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox" id="6" onclick="foo(6)"></div>
                           </div>
                       </div>
                   </div> <br> 
        </div>
    </div>
        <hr>
    <div class="container con" style="box-shadow: none">
        <div class="row justify-content-around">
            <h4 align="center">WEEK 3</h4>
        </div><hr>
        <div class="container con">
        <div class="row justify-content-around text-center">
                <div class="col-2 box"><h4>Day</h4></div>
                <div class="col-5  box"><h4>reps / set</h4></div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><h4>done</h4></div>
                   </div>
                </div>
            </div>
                <hr>
            <div class="row justify-content-around text-center">
                <div class="col-2 box">day-1</div>
                <div class="col-5 text-center">
                   <div class="row justify-content-between">
                           <div class="col-2 box">6</div>-
                           <div class="col-2 box">8</div>-
                           <div class="col-2 box">6</div>-
                           <div class="col-2 box">6</div>-
                           <div class="col-2 box">8</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox" id="7" onclick="foo(7)"></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">10</div>-
                               <div class="col-2 box">6</div>-
                               <div class="col-2 box">6</div>-
                               <div class="col-2 box">9</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox" id="8" onclick="foo(8)"></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">8</div>-
                                   <div class="col-2 box">11</div>-
                                   <div class="col-2 box">8</div>-
                                   <div class="col-2 box">8</div>-
                                   <div class="col-2 box">10</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col">< input type="checkbox" id="9" onclick="foo(9)"></div>
                           </div>
                       </div>
                   </div> <br> 
        </div>
    </div>
        <hr>
    <div class="container con" style="box-shadow: none">
        <div class="row justify-content-around">
            <h4 align="center">WEEK 4</h4>
        </div><hr>
        <div class="container con">
        <div class="row justify-content-around text-center">
                <div class="col-2 box"><h4>Day</h4></div>
                <div class="col-5  box"><h4>reps / set</h4></div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><h4>done</h4></div>
                   </div>
                </div>
            </div>
                <hr>
            <div class="row justify-content-around text-center">
                <div class="col-2 box">day-1</div>
                <div class="col-5 text-center">
                   <div class="row justify-content-between">
                           <div class="col-2 box">8</div>-
                           <div class="col-2 box">11</div>-
                           <div class="col-2 box">8</div>-
                           <div class="col-2 box">8</div>-
                           <div class="col-2 box">10</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox" id="9" onclick="foo(9)"></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">9</div>-
                               <div class="col-2 box">13</div>-
                               <div class="col-2 box">9</div>-
                               <div class="col-2 box">9</div>-
                               <div class="col-2 box">12</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col">< input type="checkbox" id="10" onclick="foo(10)"></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">11</div>-
                                   <div class="col-2 box">15</div>-
                                   <div class="col-2 box">11</div>-
                                   <div class="col-2 box">11</div>-
                                   <div class="col-2 box">13</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox"  id="11" onclick="foo(11)"></div>
                           </div>
                       </div>
                   </div> <br> 
        </div>
    </div>
        <hr>
    <div class="container con" style="box-shadow: none">
        <div class="row justify-content-around">
            <h4 align="center">WEEK 5</h4>
        </div><hr>
        <div class="container con">
        <div class="row justify-content-around text-center">
                <div class="col-2 box"><h4>Day</h4></div>
                <div class="col-5  box"><h4>reps / set</h4></div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><h4>done</h4></div>
                   </div>
                </div>
            </div>
                <hr>
            <div class="row justify-content-around text-center">
                <div class="col-2 box">day-1</div>
                <div class="col-5 text-center">
                   <div class="row justify-content-between">
                           <div class="col-2 box">12</div>-
                           <div class="col-2 box">16</div>-
                           <div class="col-2 box">12</div>-
                           <div class="col-2 box">12</div>-
                           <div class="col-2 box">15</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox"  id="12" onclick="foo(12)"></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">14</div>-
                               <div class="col-2 box">19</div>-
                               <div class="col-2 box">14</div>-
                               <div class="col-2 box">14</div>-
                               <div class="col-2 box">19</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox" id="13" onclick="foo(13)"></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">16</div>-
                                   <div class="col-2 box">21</div>-
                                   <div class="col-2 box">16</div>-
                                   <div class="col-2 box">16</div>-
                                   <div class="col-2 box">20</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox" id="14" onclick="foo(14)"></div>
                           </div>
                       </div>
                   </div> <br> 
        </div>
    </div>
        <hr>
    <div class="container con" style="box-shadow: none">
        <div class="row justify-content-around">
            <h4 align="center">WEEK 6</h4>
        </div><hr>
        <div class="container con">
        <div class="row justify-content-around text-center">
                <div class="col-2 box"><h4>Day</h4></div>
                <div class="col-5  box"><h4>reps / set</h4></div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><h4>done</h4></div>
                   </div>
                </div>
            </div>
                <hr>
            <div class="row justify-content-around text-center">
                <div class="col-2 box">day-1</div>
                <div class="col-5 text-center">
                   <div class="row justify-content-between">
                           <div class="col-2 box">16</div>-
                           <div class="col-2 box">18</div>-
                           <div class="col-2 box">15</div>-
                           <div class="col-2 box">15</div>-
                           <div class="col-2 box">17</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox" id="15" onclick="foo(15)"></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">17</div>-
                               <div class="col-2 box">16</div>-
                               <div class="col-2 box">15</div>-
                               <div class="col-2 box">16</div>-
                               <div class="col-2 box">18</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox" id="16" onclick="foo(16)"></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">18</div>-
                                   <div class="col-2 box">23</div>-
                                   <div class="col-2 box">18</div>-
                                   <div class="col-2 box">18</div>-
                                   <div class="col-2 box">22</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox" id="17" onclick="foo(17)"></div>
                           </div>
                       </div>
                   </div> <br> 
        </div>
    </div>
        <hr>
    <div class="container con" style="box-shadow: none">
        <div class="row justify-content-around">
            <h4 align="center">WEEK 7</h4>
        </div><hr>
        <div class="container con">
        <div class="row justify-content-around text-center">
                <div class="col-2 box"><h4>Day</h4></div>
                <div class="col-5  box"><h4>reps / set</h4></div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><h4>done</h4></div>
                   </div>
                </div>
            </div>
                <hr>
            <div class="row justify-content-around text-center">
                <div class="col-2 box">day-1</div>
                <div class="col-5 text-center">
                   <div class="row justify-content-between">
                           <div class="col-2 box">18</div>-
                           <div class="col-2 box">23</div>-
                           <div class="col-2 box">18</div>-
                           <div class="col-2 box">18</div>-
                           <div class="col-2 box">22</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox" id="18" onclick="foo(18)"></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">20</div>-
                               <div class="col-2 box">25</div>-
                               <div class="col-2 box">19</div>-
                               <div class="col-2 box">19</div>-
                               <div class="col-2 box">23</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox" id="19" onclick="foo(19)"></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">23</div>-
                                   <div class="col-2 box">26</div>-
                                   <div class="col-2 box">23</div>-
                                   <div class="col-2 box">23</div>-
                                   <div class="col-2 box">25</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox" id="20" onclick="foo(20)"></div>
                           </div>
                       </div>
                   </div> <br> 
        </div>
    </div> 
        <hr>
    <div class="container con" style="box-shadow: none">
        <div class="row justify-content-around">
            <h4 align="center">WEEK 8</h4>
        </div><hr>
        <div class="container con">
        <div class="row justify-content-around text-center">
                <div class="col-2 box"><h4>Day</h4></div>
                <div class="col-5  box"><h4>reps / set</h4></div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><h4>done</h4></div>
                   </div>
                </div>
            </div>
                <hr>
            <div class="row justify-content-around text-center">
                <div class="col-2 box">day-1</div>
                <div class="col-5 text-center">
                   <div class="row justify-content-between">
                           <div class="col-2 box">23</div>-
                           <div class="col-2 box">26</div>-
                           <div class="col-2 box">23</div>-
                           <div class="col-2 box">23</div>-
                           <div class="col-2 box">25</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox" id="21" onclick="foo(21)"></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">25</div>-
                               <div class="col-2 box">26</div>-
                               <div class="col-2 box">25</div>-
                               <div class="col-2 box">25</div>-
                               <div class="col-2 box">27</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox" id="22" onclick="foo(22)"></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">25</div>-
                                   <div class="col-2 box">26</div>-
                                   <div class="col-2 box">27</div>-
                                   <div class="col-2 box">25</div>-
                                   <div class="col-2 box">27</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox" id="23" onclick="foo(23)"></div>
                           </div>
                       </div>
                   </div> <br> 
        </div>
    </div>
        <hr>    
    <div class="container con" style="box-shadow: none">
        <div class="row justify-content-around">
            <h4 align="center">WEEK 9</h4>
        </div><hr>
        <div class="container con">
        <div class="row justify-content-around text-center">
                <div class="col-2 box"><h4>Day</h4></div>
                <div class="col-5  box"><h4>reps / set</h4></div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><h4>done</h4></div>
                   </div>
                </div>
            </div>
                <hr>
            <div class="row justify-content-around text-center">
                <div class="col-2 box">day-1</div>
                <div class="col-5 text-center">
                   <div class="row justify-content-between">
                           <div class="col-2 box">25</div>-
                           <div class="col-2 box">26</div>-
                           <div class="col-2 box">27</div>-
                           <div class="col-2 box">25</div>-
                           <div class="col-2 box">27</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox" id="24" onclick="foo(24)"></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">25</div>-
                               <div class="col-2 box">26</div>-
                               <div class="col-2 box">26</div>-
                               <div class="col-2 box">26</div>-
                               <div class="col-2 box">27</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox" id="25" onclick="foo(25)"></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">26</div>-
                                   <div class="col-2 box">26</div>-
                                   <div class="col-2 box">24</div>-
                                   <div class="col-2 box">26</div>-
                                   <div class="col-2 box">28</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox" id="26" onclick="foo(26)"></div>
                           </div>
                       </div>
                   </div> <br> 
        </div>
    </div>  
        <hr>     
    <div class="container con" style="box-shadow: none">
        <div class="row justify-content-around">
            <h4 align="center">WEEK 10</h4>
        </div><hr>
        <div class="container con">
        <div class="row justify-content-around text-center">
                <div class="col-2 box"><h4>Day</h4></div>
                <div class="col-5  box"><h4>reps / set</h4></div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><h4>done</h4></div>
                   </div>
                </div>
            </div>
                <hr>
            <div class="row justify-content-around text-center">
                <div class="col-2 box">day-1</div>
                <div class="col-5 text-center">
                   <div class="row justify-content-between">
                           <div class="col-2 box">26</div>-
                           <div class="col-2 box">28</div>-
                           <div class="col-2 box">24</div>-
                           <div class="col-2 box">28</div>-
                           <div class="col-2 box">28</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox" id="27" onclick="foo(27)"></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">27</div>-
                               <div class="col-2 box">26</div>-
                               <div class="col-2 box">26</div>-
                               <div class="col-2 box">27</div>-
                               <div class="col-2 box">28</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox" id="28" onclick="foo(28)"></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">27</div>-
                                   <div class="col-2 box">27</div>-
                                   <div class="col-2 box">25</div>-
                                   <div class="col-2 box">27</div>-
                                   <div class="col-2 box">28</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox" id="29" onclick="foo(29)"></div>
                           </div>
                       </div>
                   </div> <br> 
        </div>
    </div>
        <hr>    
    <div class="container con" style="box-shadow: none">
        <div class="row justify-content-around">
            <h4 align="center">WEEK 11</h4>
        </div><hr>
        <div class="container con">
        <div class="row justify-content-around text-center">
                <div class="col-2 box"><h4>Day</h4></div>
                <div class="col-5  box"><h4>reps / set</h4></div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><h4>done</h4></div>
                   </div>
                </div>
            </div>
                <hr>
            <div class="row justify-content-around text-center">
                <div class="col-2 box">day-1</div>
                <div class="col-5 text-center">
                   <div class="row justify-content-between">
                           <div class="col-2 box">26</div>-
                           <div class="col-2 box">26</div>-
                           <div class="col-2 box">28</div>-
                           <div class="col-2 box">28</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox" id="30" onclick="foo(30)"></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">30</div>-
                               <div class="col-2 box">28</div>-
                               <div class="col-2 box">30</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox" id="31" onclick="foo(31)"></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">35</div>-
                                   <div class="col-2 box">28</div>-
                                   <div class="col-2 box">30</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox" id="32" onclick="foo(32)"></div>
                           </div>
                       </div>
                   </div> <br> 
        </div>
    </div>   
        <hr>     
    <div class="container con" style="box-shadow: none">
        <div class="row justify-content-around">
            <h4 align="center">WEEK 12</h4>
        </div><hr>
        <div class="container con">
        <div class="row justify-content-around text-center">
                <div class="col-2 box"><h4>Day</h4></div>
                <div class="col-5  box"><h4>reps / set</h4></div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><h4>done</h4></div>
                   </div>
                </div>
            </div>
                <hr>
            <div class="row justify-content-around text-center">
                <div class="col-2 box">day-1</div>
                <div class="col-5 text-center">
                   <div class="row justify-content-between">
                           <div class="col-2 box">40</div>-
                           <div class="col-2 box">30</div>-
                           <div class="col-2 box">30</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox" id="33" onclick="foo(33)"></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">45</div>-
                               <div class="col-2 box">40</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox" id="34" onclick="foo(34)"></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">50</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox" id="35" onclick="foo(35)"></div>
                           </div>
                       </div>
                   </div> <br> 
        </div>
    </div>   
    <br>    <br>    
    <div class="container ">
        <div class="row text-center  justify-content-center">
            <div class="col-5 act">
                   <h4 style="font-size:1.6em ">Your progress:</h4>
            </div>
            <div class="col-5 align-self-center">
                <meter value="<?php echo $_SESSION['st'];?>" min="0" max="96" class="bar"></meter>
            </div>
        </div>
    </div>
</div>


</body>



<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</html>