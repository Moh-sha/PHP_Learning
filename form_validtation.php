<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="welcome.php" method="post">
      
       Name   : <input type="text" name="name" placeholder="write your name" require>
       <?php
        if (isset($_SESSION['emptyName']))
        {
            echo "<br>Empty name.";
            unset($_SESSION['emptyName']);
        }
       ?>
       
       <br>
      
       Email  : <input type="email" name="email" placeholder="write your name" require>
       
          <br>
            Phone  : <input type="number" name="number" placeholder="write your name" require>
     
       <br> 
       <input type="submit" value="Register">
  
 </form>
 

</body>
</html>