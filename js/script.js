$(document).ready(function(){
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