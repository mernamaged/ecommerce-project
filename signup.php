
<?php include ('connection.php') ;?>
<?php 
if(!isset($_SESSION)){
    session_start();
}
if(isset($_POST['signup'])){
$username=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password1']);
$con_password=mysqli_real_escape_string($con,$_POST['password2']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$age=mysqli_real_escape_string($con,$_POST['age']);
$city=mysqli_real_escape_string($con,$_POST['city']);

$sql="INSERT INTO users (name,email,password,con_password,address,age,city) values('$username','$email','$password','$con_password','$address','$age','$city')";
mysqli_query($con,$sql);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/x-icon" href="logo.png">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body{
            background: #046271;
            background-image: linear-gradient(-90deg,#046271d3 , #73CADA);
        }
        .container{
            width:25rem;
            height:42rem;
            background-color:white;
            margin-top:5rem;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
            border-radius:10px;
            padding-top:3rem;
            padding-bottom:3rem;
        }
        .inputcontainer{
            display:flex;
            flex-direction:column;
            align-items:left;
            justify-content:center;
        }
        .subbutton{
            background:#046271;
            background-image: linear-gradient(-90deg, #046271d3, #73CADA);
color:white;
border-radius:30px;
margin-top:1.5rem;
        }
        .inputs{
            border-top:none;
            border-left:none;
            border-right:none;
            border-radius:5px;
            width:20rem;
            
            margin-bottom:0.5rem;
        }
        .subbutton:hover{
            opacity:0.8;
        }
        @media screen and (max-width:430px){
            .container{
            width:20rem;
            height:37rem;
            background-color:white;
            margin-top:5rem;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
            border-radius:10px;
            padding-top:3rem;
            padding-bottom:3rem;
        }
        .inputs{
            width:15rem;
        }
        }
        @media screen and (max-width:330px){
            .container{
            width:16rem;
            height:38rem;
            background-color:white;
            margin-top:5rem;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
            border-radius:10px;
            padding-top:3rem;
            padding-bottom:3rem;
        }
        .inputs{
            width:13rem;
        }
        }
        </style>
</head>
<body>
    <div class="container">
    <h1 style="margin-top:0rem;"><strong>Sign Up</strong></h1>
        <form method="post" action="signup.php">
        
        <div class="inputcontainer">
        Name<input name="name" type="text" placeholder="Enter Name"  class="inputs"required>     
        Email<input name="email" type="email" placeholder="Enter Email"   class="inputs" required >
        Password<input name="password1" type="password" placeholder="Password"  class="inputs"required >
        confirm Password<input name="password2" type="password" placeholder="Password"  class="inputs"required > 
        Address<input name="address" type="text" placeholder="Enter Address"  class="inputs">
        Age<input name="age" type="text" placeholder="Enter Age"  class="inputs">
        City <select id="inputState" class="form-control" name="city" required class="inputs">
                <option selected>Cairo</option>
                <option>Alexandria</option>
            </select>
        <button class="btn subbutton" name="signup">Sign Up</button>
        </form>
        
    </div>
    <h5 style="color:grey;margin-top:1rem;">------------OR-----------</h5>
    <a href="signin.php"><h6 style="margin-top:1rem;">Already have an account? sign in</h6></a>
    </div>






</body>
</html>

