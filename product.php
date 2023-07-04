<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/product.css">
    <title>retrive</title>
</head>
<body>
    <nav class="navbar">
        <img src="images/pngwing.com (2).png" alt="Logo" class="nav-img" height="95px">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about us.php">About</a></li>
            <li class="dropdown">
                <a href="#">cities</a>
                <ul class="dropdown-menu">
                <li><a href="aswan.php">ASWAN</a> </li>
                    <li><a href="dahab.php">DAHAB</a></li>
                    <li><a href="giza.php">GIZA</a></li>
                </ul>
            </li>
            <li><a href="about us.php">About us</a></li>
            <li><a href="signup.php">sign up</a></li>
            <li><a href="product.php">our packages</a></li>
        </ul>
    </nav>

    <header>
        <div class="egypt">
            <h1 >Multi-Day Tour</h1>
            <h3 >Enchanting Escape Travel offers the best Egypt tour packages that make your trip to Egypt is unforgettable, our Multi Day Tours are spread all over Egypt and organised by our experienced staff, when joining these escorted tours, there is no need to worry about coordinating different hotels, tours and transfer</h3>
        </div>
    </header>
    <div class="viewall">
        <center>
            <table>
                <?php
                include ('connection.php');
                $query="select * from product";
                $record=mysqli_query($con,$query);
                while($data=mysqli_fetch_array($record))
                {
                ?>
                <tr>
                  <td style="font-size:20px; font-weight:bold; color:#046271; padding:10px;"><img src="images/<?php echo $data['image'];?> "style="width:350px;heigth:350px;"/>
                  <pre> <?php echo $data['productname'];?>
                      <?php echo $data['time'];?>
                      <span style="color:blue;font-weight:bold;"><?php echo $data['price'];?></span>
                </pre>
                <button style="background:#046271; color:white; font-size:20px;">BOOKING NOW</button></td>
                </tr><br>
                <?php
                 }
                ?>
            </table>
        </center>
    </div>

</body>
</html>