
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <style>
  .loader {
  /* the colors */
  --c1: #4d3736;
  --c2: #feaaa8;
  --c3: #dd3544;
  --c4: #9fd8f6;
  /**/
  
  width: 50px; /* control the size */
  aspect-ratio: 8/5;
  --_g: no-repeat radial-gradient(#000 68%,#0000 71%);
  -webkit-mask: var(--_g),var(--_g),var(--_g);
  -webkit-mask-size: 25% 40%;
  background: 
    conic-gradient(var(--c1) 50%,var(--c2) 0) no-repeat,
    conic-gradient(var(--c3) 50%,var(--c4) 0) no-repeat;
  background-size: 200% 50%;
  animation: 
    back 4s infinite steps(1),
    load 2s infinite;
}

@keyframes load {
  0%    {-webkit-mask-position: 0% 0%  ,50% 0%  ,100% 0%  }
  16.67%{-webkit-mask-position: 0% 100%,50% 0%  ,100% 0%  }
  33.33%{-webkit-mask-position: 0% 100%,50% 100%,100% 0%  }
  50%   {-webkit-mask-position: 0% 100%,50% 100%,100% 100%}
  66.67%{-webkit-mask-position: 0% 0%  ,50% 100%,100% 100%}
  83.33%{-webkit-mask-position: 0% 0%  ,50% 0%  ,100% 100%}
  100%  {-webkit-mask-position: 0% 0%  ,50% 0%  ,100% 0%  }
}
@keyframes back {
  0%,
  100%{background-position: 0%   0%,0%   100%}
  25% {background-position: 100% 0%,0%   100%}
  50% {background-position: 100% 0%,100% 100%}
  75% {background-position: 0%   0%,100% 100%}
}



body {
  margin:0;
  min-height:100vh;
  display:grid;
  place-content:center;
}
  </style>
</head>
<body>
<h3 style="position: absolute; top:40%; left: 50%; transform: translate(-50%, -50%); font-family: arial; color:#404040">success! please wait to log in...</h3>
<div class="loader"></div>
<?php 
header( "refresh:3; url=view-event.php?ev-id=".$_GET['ev-id']."" );
  die();
?>
</body>
</html>