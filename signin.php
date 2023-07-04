<?php?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/x-icon" href="logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body{
            background: #046271;
            background-image: linear-gradient(-90deg,#046271d3 , #73CADA);
        }
        .container{
            width:25rem;
            height:28rem;
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
            background: #046271;
            background-image: linear-gradient(-90deg,#046271d3 , #73CADA);
color:white;
border-radius:30px;
margin-top:1.5rem;
        }
        .subbutton:hover{
            opacity:0.8;
        }
        .inputs{
            border-top:none;
            border-left:none;
            border-right:none;
            border-radius:5px;
            width:20rem;
            
            margin-bottom:0.5rem;
        }
        @media screen and (max-width:430px){
            .container{
            width:20rem;
            height:28rem;
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
            height:28rem;
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
    <h1 style="margin-top:0rem;"><strong>Login</strong></h1>
        <form method="post" action="index1.php" >
        
        <div class="inputcontainer">
        Name<input name="name" type="text" placeholder="Enter Name"   class="inputs">
        Email<input name="email" type="email" placeholder="Enter Email"   class="inputs">
        Password<input name="password" type="password" placeholder="Enter Password"  class="inputs">
        <button class="btn subbutton" name="signin">Login</button>
        </form>
    
        
    <div>
    <h5 style="color:grey;margin-top:1rem;">-------------------OR------------------</h5>
    <a href="signup.php"><h6 style="margin-top:1rem;text-align:center;">Don't have an account? sign up</h6></a>
    </div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




</body>
</html>

