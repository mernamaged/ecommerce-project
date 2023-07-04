<?php include ('connection.php') ;?>
<?php include ('loginform.php') ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>egypt travel guide</title>
    <link rel="stylesheet" href="css/home.css">
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
            <li><a href="signin.php">sign in</a></li>
            <li><a href="signup.php">sign up</a></li>
            <li><a href="product.php">our packages</a></li>
        </ul>
    </nav>
    <section style="font-size:40px; color:#03b9d5; font-weight:bold;text-align:center; font-family:Franklin Gothic Medium;font-style: italic;
">
    <?php
    if(isset($_SESSION['success'])){
        echo $_SESSION['success'];
    }
    echo" ";
    if(isset($_SESSION['x'])){
        echo $_SESSION['x'];
    }?>
</section>

    <header>
        <div class="egypt">
            <h1 >Egypt</h1>
            <h3 >Home of The Great Pyramid and the Sphinx; the Valley of Kings, old Nubia and the winding Nile, delve into Egypt’s ancient past and buzzing modern future alike with help from a local guide from Enchanting Escapes Travel.</h3>
        </div>
    </header>

    <div class="parnet">

        <div class="child">
            <img id="aswan"src="images/ab_asw_img_1.webp" style="width:100%">
            <div class="container">
                <h1> <a href="aswan.html">ASWAN</a></h1>
                Once the frontline between the ancient Nubians and Egyptian kings, today Aswan is known for its colossal dam and Lake Nasser. To explore the city’s ruins and sites to the fullest, be sure to have a look with Enchanting Escapes Travel.
            </div>
        </div>

        <div class="child">
                <img id="giza"src="images/Great-Sphinx-of-Giza-pyramid-background-Khafre.webp" style="width:100%">
            <div class="container">
                <h1> <a href="giza.html">GIZA</a></h1>
            Discover the bucket-list sights of the Great Pyramid, the Giza Necropolis, ancient tombs and the Sphinx with the help of a Enchanting Escapes Travel to Giza, Egypt.
            </div>
        </div>

        <div class="child">
                    <img id="Dahab"src="images/1200px-Blue_Hole_2005.jpeg" style="width:100%">
            <div class="container">
                    <h1> <a href="dahab.html">DAHAB</a></h1>
                    Dahab is the world’s scuba king; a place of sparkling shore waters and colorful coral reefs lined with the pretty beaches of the Aqaba Gulf. Get a Enchanting Escapes Travel to find the best dive spots.
            </div>
        </div>

    </div>

    <div id="contact">
        <h1>Get a <i>Help</i></h1>
    <form >
        <div class="fn-div">
            <input class="fn" type="text" placeholder="Full Name">
        </div>
        <div class="fn-div">
            <input class="fn" type="email" placeholder="Email">
        </div>
        <div class="fn-div">
            <input class="fn" type="number" placeholder="Phone Number">
        </div>
        <div class="fn-div">
            <textarea class="fn" cols="30" rows="10" placeholder="Your Message"></textarea>
        </div>
        <div class="btn-div">
            <button class="btn">
                <span> Send</span>
            </button>
        </div>
    </form>

        <footer>
            <center><strong> copy &copy; Enchanting Escapes Travel</strong></center>
        </footer>
    </body>
</html>
