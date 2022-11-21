<?php 

       session_start();

       $_SESSION["username"]="Shafin";

       if(isset($_SESSION["username"]))
       {
                
             echo "Successfully done this ";
             echo $_SESSION["username"];




       }


 ?>
