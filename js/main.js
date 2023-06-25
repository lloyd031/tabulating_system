
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
  
});

