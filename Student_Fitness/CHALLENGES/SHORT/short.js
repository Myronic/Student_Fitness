  

function startTimer(a)
{
    var seconds=2;
    var i=parseInt(a);
    if(i!=8)
    {
        var t=setInterval(countdown,1000);
        function countdown() 
        {
            seconds--;
            document.getElementById(a).innerHTML=seconds;  
//            document.getElementsByClass(`active${i}`).backgroundColor="blue";
            /*
            style="border:2px solid #007bff;  border-radius: 5px;color: black;"
            */
            
            
              if(seconds==0)
              {        
                document.getElementById(`result${i}`).checked=true;
                if(i%2==0){
                     document.getElementById(a).innerHTML="Next";
                }
                  else{
                     document.getElementById(a).innerHTML="TimeUp";                   
                  }
                clearInterval(t);
                startTimer(++i);
              } 
        }  
    }
    
}