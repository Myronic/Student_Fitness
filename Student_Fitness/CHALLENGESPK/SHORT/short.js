  
/*
 border-radius: 5px;
    color: black;
    margin: -2px;
    box-shadow: 0px 5px 20px rgba(0,0,0,0.2),0px -5px 20px rgba(0,0,0,0.05);

*/
function startTimer(a,n)
{
	var sec=document.getElementById(a).innerHTML;
	var seconds=parseInt(sec);
    var i=parseInt(a);
    var n=parseInt(n);
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
                startTimer(++i);
              } 
        }  
    }
    
}