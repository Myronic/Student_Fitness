

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <link rel="stylesheet" href="long.css">
     <link href="https://fonts.googleapis.com/css?family=Revalia" rel="stylesheet">
    
  
	 <script>
	 	
	 
	  function validcheck(cid)
	  {
		  <?php
          session_start();
          $con=mysqli_connect("127.0.0.1","root","","webfit1");
          mysqli_select_db($con, 'webfit1');
		  $user=$_SESSION['username'];
          
          $sql="select * from lchall where username='$user' && chname='50pushup'";
		  $result=mysqli_query($con,$sql);
		  
		  $rc=mysqli_num_rows($result);
		  if($rc > 0)
		  {
			$row=mysqli_fetch_assoc($result);
			$times=$row['time'];
			$per=$row['status'];
		  }
		  
		  
        ?>
		var rowc = "<?php echo $rc; ?>";
		alert(rowc);
		if()
		var rowc = "<?php echo $rc; ?>";
		alert(rowc);
		var rowc = "<?php echo $; ?>";
		alert(rowc);
		
		
	  }
     </script>

</head> 

<body>
<div class="container con">
  <h3 align="center" style="color: yellow">THE 100 PUSHUPS CHALLENGE</h3>
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
                    <div class="row justify-content-between text-center act">
                        <div class="col-2 box text-left">day-1</div>
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
                            <div class="row text-right">
                                <div class="col"><input type="checkbox"  id='1' onclick="validcheck(1)" ></div>
                            </div>
                        </div>
                    </div> <br>
                    <div class="row justify-content-around text-center">
                            <div class="col-2 box">day-2</div>
                            <div class="col-5 text-center">
                                <div class="row justify-content-between">
                                        <div class="col-2 box">4</div>-
                                        <div class="col-2 box">5</div>-
                                        <div class="col-2 box">4</div>-
                                        <div class="col-2 box">4</div>-
                                        <div class="col-2 box">5</div>
                                </div>
                            </div>
                            <div class="col-2 box">
                                <div class="row text-center">
                                    <div class="col"><input type="checkbox"  id='2' onclick="validcheck(2)"></div>
                                </div>
                            </div>
                        </div> <br>
                        <div class="row justify-content-around text-center">
                                <div class="col-2 box">day-3</div>
                                <div class="col-5 text-center">
                                    <div class="row justify-content-between">
                                            <div class="col-2 box">5</div>-
                                            <div class="col-2 box">6</div>-
                                            <div class="col-2 box">4</div>-
                                            <div class="col-2 box">4</div>-
                                            <div class="col-2 box">7</div>
                                    </div>
                                </div>
                                <div class="col-2 box">
                                    <div class="row text-center">
                                        <div class="col"><input   id='3' type="checkbox"></div>
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
                           <div class="col-2 box">5</div>-
                           <div class="col-2 box">6</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">5</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox"   id='4' ></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">8</div>-
                               <div class="col-2 box">10</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">10</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox"   id='5' ></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">10</div>-
                                   <div class="col-2 box">12</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">13</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox"   id='6' ></div>
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
                           <div class="col-2 box">5</div>-
                           <div class="col-2 box">6</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">5</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox"   id='7' ></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">8</div>-
                               <div class="col-2 box">10</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">10</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox"  id='8' ></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">10</div>-
                                   <div class="col-2 box">12</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">13</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox"  id='9' ></div>
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
                           <div class="col-2 box">5</div>-
                           <div class="col-2 box">6</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">5</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox"  id='10' ></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">8</div>-
                               <div class="col-2 box">10</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">10</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox"  id='11' ></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">10</div>-
                                   <div class="col-2 box">12</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">13</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox"  id='12' ></div>
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
                           <div class="col-2 box">5</div>-
                           <div class="col-2 box">6</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">5</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox"  id='13' ></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">8</div>-
                               <div class="col-2 box">10</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">10</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox"   id='14' ></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">10</div>-
                                   <div class="col-2 box">12</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">13</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox"  id='15' ></div>
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
                           <div class="col-2 box">5</div>-
                           <div class="col-2 box">6</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">5</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox"></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">8</div>-
                               <div class="col-2 box">10</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">10</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox"></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">10</div>-
                                   <div class="col-2 box">12</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">13</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox"></div>
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
                           <div class="col-2 box">5</div>-
                           <div class="col-2 box">6</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">5</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox"></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">8</div>-
                               <div class="col-2 box">10</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">10</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox"></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">10</div>-
                                   <div class="col-2 box">12</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">13</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox"></div>
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
                           <div class="col-2 box">5</div>-
                           <div class="col-2 box">6</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">5</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox"></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">8</div>-
                               <div class="col-2 box">10</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">10</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox"></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">10</div>-
                                   <div class="col-2 box">12</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">13</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox"></div>
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
                           <div class="col-2 box">5</div>-
                           <div class="col-2 box">6</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">5</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox"></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">8</div>-
                               <div class="col-2 box">10</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">10</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox"></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">10</div>-
                                   <div class="col-2 box">12</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">13</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox"></div>
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
                           <div class="col-2 box">5</div>-
                           <div class="col-2 box">6</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">5</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox"></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">8</div>-
                               <div class="col-2 box">10</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">10</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox"></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">10</div>-
                                   <div class="col-2 box">12</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">13</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox"></div>
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
                           <div class="col-2 box">5</div>-
                           <div class="col-2 box">6</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">5</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox"></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">8</div>-
                               <div class="col-2 box">10</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">10</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox"></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">10</div>-
                                   <div class="col-2 box">12</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">13</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox"></div>
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
                           <div class="col-2 box">5</div>-
                           <div class="col-2 box">6</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">4</div>-
                           <div class="col-2 box">5</div>
                   </div>
                </div>
                <div class="col-2 box">
                   <div class="row text-center">
                       <div class="col"><input type="checkbox"></div>
                   </div>
                </div>
            </div> <br>
            <div class="row justify-content-around text-center">
                   <div class="col-2 box">day-2</div>
                   <div class="col-5 text-center">
                       <div class="row justify-content-between">
                               <div class="col-2 box">8</div>-
                               <div class="col-2 box">10</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">7</div>-
                               <div class="col-2 box">10</div>
                       </div>
                   </div>
                   <div class="col-2 box">
                       <div class="row text-center">
                           <div class="col"><input type="checkbox"></div>
                       </div>
                   </div>
                </div> <br>
                <div class="row justify-content-around text-center">
                       <div class="col-2 box">day-3</div>
                       <div class="col-5 text-center">
                           <div class="row justify-content-between">
                                   <div class="col-2 box">10</div>-
                                   <div class="col-2 box">12</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">9</div>-
                                   <div class="col-2 box">13</div>
                           </div>
                       </div>
                       <div class="col-2 box">
                           <div class="row text-center">
                               <div class="col"><input type="checkbox"></div>
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
                <meter value="25" min="0" max="96" class="bar"></meter>
            </div>
        </div>
    </div>
</div>


</body>


<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
--> 
</html>