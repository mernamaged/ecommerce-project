<?php include('connection.php');?>

<?php if (!isset($_session)){
session_start();}

if (isset($_POST['submitbtn'])){
$product_name=mysqli_real_escape_string($con,$_POST['productname']);
$price=mysqli_real_escape_string($con,$_POST['price']);
$image=mysqli_real_escape_string($con,$_POST['image']);
$time=mysqli_real_escape_string($con,$_POST['time']);

$SQL="INSERT INTO product (productname,price,image,time) values ('$product_name','$price','$image','$time')";
    mysqli_query($con,$SQL);
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: system-ui;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
  border-radius:50px;
  margin:100px;
  text-align:center;
  font-size:30px;
}

/* Full-width input fields */
input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus{
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
#submit {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

#submit:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}
</style>
</head>
<body>

<form method="post" >
  <div class="container">

    <label for="productname"><b>product name</b></label>
    <input type="text" placeholder="product name" name="productname" id="productname" required>

    <label for="price"><b>price</b></label>
    <input type="text" placeholder="Enter price" name="price" id="price" required>

    <label for="image"><b>image</b></label>
    <input type="text" placeholder="image" name="image" id="image" required>

    <label for="time"><b>time</b></label>
    <input type="text" placeholder="time" name="time" id="time" required>

    <button type="submit" id="submit" name="submitbtn">submit</button>
  </div>

</form>

</body>
</html>