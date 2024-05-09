<?php
 
        function connection(){


        $host = "localhost"; 
        $username = "root";
       $pasword = "";
        $dbname = "bd_clinica";
       
     
        $conexion = mysqli_connect($host, $username,$pasword, $dbname) ;
        return $conexion;
  }
?>