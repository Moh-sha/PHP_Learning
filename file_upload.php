<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


 <?php 
          if(isset($_FILES['image']))
          {
                
             $filename=$_FILES['image']['name'];
             $filetamp=$_FILES['image']['tmp_name'];
             move_uploaded_file($filetamp,"images/".$filename);
             echo  "Successfully";




          }


?>



    <form action="" method="post" enctype="multipart/form-data">

       <input type="file" name="image" id="">
      <hr>
       <input type="submit" value="Submit">

    </form>



</body>
</html>