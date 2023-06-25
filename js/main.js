
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
  var mul=0;
  var m;
  var left=$(".can-name-panel").css("margin-left");

  function sub()
  {

    mul++;
    console.log(left);
   return m=-100*mul+'%';

  }
   function add()
  {
    if(m<left)
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


  $(".eventpanel").addClass("animate__animated animate__zoomIn");
  $(".rank").addClass("animate__animated animate__slideInUp");
  
});

