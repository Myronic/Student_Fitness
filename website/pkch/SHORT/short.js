  



  
function startTimer(a,n)
{
	  var sec=document.getElementById(a).innerHTML;
	  var seconds=parseInt(sec);
    var i=parseInt(a);
    var n=parseInt(n);
    var str=n-1;
    var s=str.toString();
    seconds=2;
    if(i!=n)
    {
    	
        var t=setInterval(countdown,1000);
        function countdown() 
        {
            seconds--;
            var b="full"+a;
    		    var element = document.getElementById(b);
   			    element.classList.add("mystyle");
            document.getElementById(a).innerHTML=seconds;  

 			           
            
              if(seconds==0)
              {        
              	var element = document.getElementById(b);
   				      element.classList.remove("mystyle");

                document.getElementById(`result${i}`).checked=true;
                if(i%2==0)
                {
                     document.getElementById(a).innerHTML="Next";
                }
                else
                {
                     document.getElementById(a).innerHTML="TimeUp";                   
                }
                clearInterval(t);
                if(i!=n-1)
                  startTimer(++i,n);
                else
                {
                 
                  add();
                
                    
                    function add() 
                    {
  //Create an input type dynamically.   
                      var element = document.createElement("input");
  //Assign different attributes to the element. 
                      element.type = "submit";
                      element.value = "Submit"; // Really? You want the default value to be the type string?
                      element.name = "sub"; // And the name too?
                      element.class="btn-success";
                      element.style="width:40%;height:80%;margin-bottom:5%;font-family:Georgia;border-radius:5px;background-image: linear-gradient(135deg,#3F5EFB, #E100FF);";
                      element.onclick = function() 
                      { // Note this is a function
                        
                          document.getElementById("leaveani").style.display="block";
                          /*$(document).ready(function()
						  {
							   $.ajax({
								type : "POST",
								url : "sc_5m.php",
								
								//success : function(response) {
        
								//$("#content").html(response);
								//$(".post_submitting").fadeOut(1000);
								//}
						        }); 
						  });*/
                      };

                      var foo = document.getElementById("mainc");
  //Append the element in page (in span).  
                      foo.appendChild(element);
                    }
                } 
              } 
        }
    }
}
      
    
    