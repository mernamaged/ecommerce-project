<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include ('connection.php');
$code=$_GET['id'];
$query ="delete from product WHERE id='$code'";
$del = mysqli_query($con,$query);

if($del)
         {
            mysqli_close($con);
            header("location:admin.php");

         }
         else{
            mysqli_error();
         }?>
</body>
</html>