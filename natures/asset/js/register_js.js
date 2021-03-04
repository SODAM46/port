window.addEventListener('DOMContentLoaded',function(){

 
function calcHeight(){
    
   
    var the_height=
    document.getElementById('the_iframe').contentWindow.
    document.body.scrollHeight;
   
    
    document.getElementById('the_iframe').height=
    the_height;
   

    document.getElementById('the_iframe').style.overflow = "hidden";
   }

   calcHeight();
    
}) ;
