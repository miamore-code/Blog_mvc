<?php
include("config.php");

$obj=new connection();
$c=$obj->conn();



//define master model

class Mastermodel

{

       //create a mmeber function of master admin login...


       public function masterlog($c,$tab,$em,$pass)


       {

      $sel="select * from $tab where email='$em' and password='$pass'";

         $ex=$c->query($sel);

         $fet=$ex->fetch_array();

         $no=$ex->num_rows;

         if($no > 0)


         {
         $_SESSION["master_aid"]=$fet["master_aid"];


         $_SESSION["em"]=$fet["email"];


         echo "<h2 align='center' style='color:green'>master admin login succefully</h2>";
        header('refresh:3,dashboard.php');
         }

         else

         {
            echo "<h2 align='center' style='color:red'>Email and password are Incorect</h2>";
            header('refresh:3,index.php');
         }





       }



       //edit master profile...

       public function editmasterprof($c,$tab,$aid)

       {
       
       $sel="select * from $tab where master_aid='$aid'";
        $ex=$c->query($sel);
        $fet=$ex->fetch_array();

        $arr[]=$fet;

        return $arr;
       }




       
       //update master profile...

       public function updmasterprof($c,$tab,$path,$em,$maid)

       {

       $upd="update $tab set photo='$path',email='$em' where master_aid='$maid'";
      $ex=$c->query($upd);
        
       }

       // logout master admin

       public function masterlogout()
       {

        unset($_SESSION["master_aid"]);
        unset($_SESSION["em"]);
        
        session_destroy();

        echo "<script>
        
        window.location='index.php';
        </script>";



       }

       //insert all data..

       public function insalldata($c,$tab,$data)

       {

          $k=array_keys($data);
          $kk=implode(",",$k);

          $v=array_values($data);
          $vv=implode("','",$v);

          $ins="insert into $tab($kk) values('$vv')";
          $ex=$c->query($ins);




       }
}



?>