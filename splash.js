var logo=document.getElementById("fadein");
   var loading=0;
   var id=setInterval(frame,64);
    function frame(){
     if(loading==30){
      clearInterval(id);
      window.open("Login activity.php","_self")}
      else{
       loading=loading+1;}};