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

<script type="text/javascript">
     $(document).ready(function()
     
     {
    

        $("#btn").dblclick(function()
        
        {

         $("#para").hide(3000);

        });
     

         $("#btn1").click(function()
        
        {

         $("#para").show(3000);

        });

         $("#btn2").hover(function()
        
        {

         $("#para").toggle(3000);

        });
 
     });


     </script>

     <style>
      #para
      {
          display:none;
      }
     </style>

</head>
<body>

<button id="btn">Hide</button>

<button id="btn1">Show</button>

<button id="btn2">Toggle</button>


<p id="para">Hello i am paragraph.</p>
     
</body>
</html>