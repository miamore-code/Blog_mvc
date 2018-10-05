<?php
error_reporting(0);
include("model/Mastermodel.php");

$obj=new Mastermodel();

//login logic....


if(isset($_POST["log"]))

{

   $em=$_POST["em"];


    
   $pass=$_POST["pass"];
   

   $obj->masterlog($c,'master_admin',$em,$pass);

}

//edit master profile

$aid=$_SESSION["master_aid"]; 
$ed=$obj->editmasterprof($c,'master_admin',$aid);


//update admin profile...

if(isset($_REQUEST["upd"]))

{

    $maid=$_SESSION["master_aid"];

    $tmp=$_FILES["img"]["tmp_name"];
    $path="upload/".$_FILES["img"]["name"];
    move_uploaded_file($tmp,$path);

    $em=$_REQUEST["em"];

  
  $obj->updmasterprof($c,'master_admin',$path,$em,$maid);


}


    // logout master admin

    if(isset($_REQUEST["lg"]))
    {
       

        $obj->masterlogout();


    }


    //insert a blogs....

    if(isset($_POST["addblog"]))
    {

date_default_timezone_set("Asia/calcutta");
    $tmp1=$_FILES["img"]["tmp_name"];
    $path1="blogs_image/".$_FILES["img"]["name"];
    move_uploaded_file($tmp1,$path1);

    $title=$_POST["title"];

    $desc=$_POST["desc"];
    $cdate=date("d/m/y");
    $ctime=date("H:i:s a");

    $data=array("bphoto"=>$path1,"title"=>$title,"description"=>$desc,"cdate"=>$cdate,"ctime"=>$ctime);

    $obj->insalldata($c,'addblog',$data);

    if($obj)

    {
     
     echo "<script>
     alert('Blog Added succefully please check')

     window.location='manageblog.php';
     
     </script>";

    }

    else

    {

         echo "<script>
     alert('Sorry Blog will Not Added succefully Try Again!')

     window.location='addbloggs.php';
     
     </script>";

    }
     



    }




?>