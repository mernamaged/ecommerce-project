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
    include ('connection.php'); 

    $code=$_GET['id'];
    $sql ="select *  from product where id='$code'";
    $qry1 = mysqli_query($con,$sql);
    $data = mysqli_fetch_array($qry1);

    if(isset($_POST['update']))
    {
        $productname= $_POST['x'];
        $time= $_POST['timeof'];
        $price= $_POST['priceof'];
        $sql1="update product set productname='$productname', time='$time' , price='$price' where id='$code'";
        $edit= mysqli_query($con,$sql1);
         if($edit)
         {
            mysqli_close($con);
            header("location:admin.php");

         }
         else{
            mysqli_error();
         }
    }
    ?>
    <h3>Update Data</h3>
    <form method="POST">
        <input type="text" name="x" value="<?php echo $data['productname']?>" placeholder="Enter product Name" required>
        <input type="text" name="timeof" value="<?php echo $data['time']?>" placeholder="time" required>
        <input type="text" name="priceof" value="<?php echo $data['price']?>" placeholder="Enter price value" required>
        <input type="submit" name="update" value="edit">
</form>
</body>
</html>