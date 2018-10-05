<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <script src="js/jquery.3.2.11.js"></script>

   

<script>
$(document).ready(function(){
  $("#btn").click(function(){
    $("#box").animate({width: "400px"},{duration: 5000,easing: "linear",
      step: function(x) 
      {
        $("#demo").text(Math.round(x * 100 / 400)  + "%");  
      }
    });
  });
});
</script>

       
</head>
<body>
    

<button id="btn">Start Progress Bar</button>

<div style="border:1px solid green;margin:10px;width:400px;">
  <div id="box" style="background:#98bf21;height:50px;width:1px;border:1px solid green;"></div>
</div>

<p id="demo"></p>
</body>
</html>