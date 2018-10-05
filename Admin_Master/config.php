<?php
class connection

{


    public function conn()

    {

        session_start();

        $con=new mysqli("localhost","root","","db_blogger");

        return $con;
        
    }


}