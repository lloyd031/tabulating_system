
$(document).ready(function(){

  $("i.x-login").click(function(){
    $(".login-con").hide();
  });
  $("i.x-join").click(function(){
    $(".login-con2").hide();
  });
  $(".s-sign-up").click(function(){
    $(".main-form-con").css("margin-left","0%");
    $(".login-con").show();
  });
  $(".s-log-in").click(function(){
    $(".main-form-con").css("margin-left","-100%");
    $(".login-con").show();
    
  });
$(".joinevent").click(function(){
    $(".login-con2").show();
  });

  $(".toggle-menu").click(function(){
    $(".navmenu").toggle();
    
  });
 $(".eventpanel").addClass("animate__animated animate__zoomIn");
  $(".rank").addClass("animate__animated animate__slideInUp");
  
  var x=0;
  var mul = i;
  var m;
  console.log(ccount);

  function sub()
  {
    
    if(mul<ccount-1)
    {
      mul++;
   return m=-100*mul+'%';

  }
    }
   function add()
  {
    
      if(mul>0)
      {
      mul--;
      return m=-100*mul+'%';
   
      }
  }
  $(".fa-caret-right").click(function(){
    $(".can-name-panel").css("margin-left",sub());
   
    
  });
    $(".fa-caret-left").click(function(){
    $(".can-name-panel").css("margin-left",add());
   
    
  });


 
});

