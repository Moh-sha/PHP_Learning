<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$Request</title>
              <h1> REquest </h1>

</head>
<body>
 
 <form action="action.php" method="post">


Name : <input type="text" name="nickname">
Email: <input type="email" name="email">
<input type="submit">

</form>
  

<?php 

  if($_SERVER["REQUEST_METHOD"] =="POST") {

     $name=$_REQUEST['nickname'];
     $email=$_REQUEST['email'];


     if(empty($name))
     {
        echo "Input correct name";
     }

      else 
       echo $name;
       echo "<br>";
       echo $email;
       echo "<br>";




  }
 

 
?>



</body>
</html>