<?php 

        session_start();


        unset($_SESSION["username"]);

        if(isset($_SESSION["username"]))
        {

               echo $_SESSION["username"];

        }
          else 

           {
            echo "Sorry try again";
           }
    ?>