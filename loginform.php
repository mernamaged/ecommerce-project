<?php include ('connection.php') ;?>
<?php 
if(!isset($_SESSION)){
    session_start();
}
if(isset($_POST['signin'])){
$username=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);

$t="SELECT * FROM users WHERE name='$username'AND email='$email' AND password='$password'";
$r=mysqli_query($con,$t);

if(mysqli_num_rows($r)==1){
$_SESSION['x']=$username;
$_SESSION['success']="welcome dear";
header('location:home.php');
}
else{
    header('location:index1.php');
}
}