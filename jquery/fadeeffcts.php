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
    

        $("#slide").click(function()
        
        {

         $("#slide1 img").fadeToggle(3000);

        });
     

 
     });


     </script>

     <style>

         body{
             margin: 0px;
             padding: 0px;

         }
      #slide
      {
          width: 100%;
          height: 100px;
          background-color: black;
          color: white;
          margin-top: -2%;
      }

      #slide1 img


      {
width: 100%;
height: 450px;
display: none;


      }
     </style>

</head>
<body>
<div id="slide"><h3 align="center">Click for slide</h3></div>
     



<div id="slide1"><img src="images/amitji.jpg"></div>
     
</body>
</html>