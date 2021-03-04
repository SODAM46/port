window.addEventListener('DOMContentLoaded',function(){
    todayIs();
 
 function todayIs() {
     var today = new Date();
     var dd = today.getDate();
     var mm = today.getMonth()+1; 
     var yyyy = today.getFullYear();

     if(dd<10){
         dd = '0'+dd
     }
     if(mm<10){
         mm = '0'+mm
     }

     today = '건 [실시간:' + yyyy + '년' + mm + '월' + dd + '일]';
     document.getElementById("date").innerHTML = today;

 } 

}) 