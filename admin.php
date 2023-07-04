<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>trip details</h1>
    <div class="viewall" >
        <center>
            <table border="2" width="300" height="350">
                <tr>
                    <td>id</td>
                    <TD>PRODUCT_NAME</TD>
                    <td>PRICE</td>
                    <td>IMAGE</td>
                    <td>TIME</td>
                </tr>
<?php include ('connection.php');
$query="select * from product";
$record = mysqli_query($con,$query);
while($data = mysqli_fetch_array($record))
{
?>
    <tr>
        <td><?php echo $data['id'];?></td>
        <td><?php echo $data['productname'];?></td>
        <td><?php echo $data['price'];?></td>
        <td><img width="200px" src="images/<?php echo $data['image'];?>"></td>
        <td><?php echo $data['time'];?></td>

        <td><a href="edit.php?id=<?php echo $data['id']; ?>">edit</a></td>
        <td><a href="delete.php?id=<?php echo $data['id'];?>">delete</a></td>
    </tr>
<?php
}
?>
            </table>
        </center>
    </div>
</body>
</html>