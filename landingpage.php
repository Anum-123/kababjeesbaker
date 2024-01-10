<?php
session_start();

// Redirect to login page if the user is not authenticated
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit();
}

$user_email = $_SESSION['user_email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Document</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: black;
    }

    .topnav {
      background-color: #ff0000;
    }

    .topnav a {
      color: white;
      font-size: larger;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      padding: 5px;
      border-right: 2px solid white;
      text-decoration: none;
    }

    .topnav nav {
      padding: 25px;
    }

    a:hover {
      color: black;
    }

    .middlenav img {
      width: 150px;
      /* Adjust as needed */
    }

    /* .middlenav a {
            margin-left: 20px;
        } */

    .middlenav {
      background-color: #2b2b2b;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;

    }

    .middlenav nav {
      /* padding: 35px; */
      flex-grow: 1;
      display: flex;
      justify-content: flex-end;
    }

    .middlenav a {
      color: white;
      /* font-weight: bold; */
      font-size: medium;
      text-decoration: none;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .middlenav a:hover {
      color: #ff0000;
    }

    .middlenav a.active {
      color: #ff0000;
    }

    .middlenav button {
      margin-top: 5px;
      background-color: #ff0000;
      color: white;
      height: 40px;
      width: 11%;
      border: 2px #ff0000;
      border-radius: 3px;
      margin-left: 40px;
      cursor: pointer;

    }

    .logo {
      margin-left: 70px;
    }

    /* Media queries for responsiveness */
    @media screen and (max-width: 600px) {
      .topnav a {
        font-size: small;
      }

      .middlenav {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .middlenav img {
        width: 80%;
        /* Adjust as needed */
        margin-bottom: 10px;
      }

      .middlenav nav {
        margin-top: 10px;
        justify-content: center;
      }

      /* .middlenav a {
        margin: 0 10px;
      } */

      .middlenav button {
        margin-top: 10px;
        margin-left: 0;
        width: 80%;
      }

      .footer {
        flex-direction: column;
        text-align: center;
        align-items: center;
      }

      .footer p {
        margin: 0 10px;
      }

      .socialmedia {
        margin-left: 0;
      }
    }



    /* Media queries for responsiveness */
    @media screen and (max-width: 600px) {

      .slideshow-container {
        max-width: 100%;
      }

      .mySlides img {
        width: 100%;
        height: auto;
      }
    }

    .dot {
      height: 15px;
      width: 15px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }

    .bottom-container1 {
      display: flex;
      margin: 50px;
      margin-left: 50px;
      justify-content: center;

    }

    .bottom1 {
      height: 400px;
      width: 300px;
      border: 2px white;
      border-radius: 10px;
      background-image: url(rafaello.jpg);
      background-repeat: no-repeat;
      background-size: 300px 400px;
      margin: 25px;

    }

    .bottom2 {
      height: 400px;
      width: 300px;
      border: 2px white;
      border-radius: 10px;
      background-image: url(heaven.PNG);
      background-repeat: no-repeat;
      background-size: 300px 400px;
      margin: 25px;
    }

    .bottom3 {
      height: 400px;
      width: 300px;
      border: 2px white;
      border-radius: 10px;
      background-image: url(cupcake.PNG);
      background-repeat: no-repeat;
      background-size: 300px 400px;
      margin: 25px;
    }

    .bottom-container2 {
      display: flex;
      margin: 50px;
      margin-left: 50px;
      justify-content: center;

    }

    .bottom4 {
      height: 400px;
      width: 300px;
      border: 2px white;
      border-radius: 10px;
      background-image: url(brownies.PNG);
      background-repeat: no-repeat;
      background-size: 300px 400px;
      margin: 25px;

    }

    .bottom5 {
      height: 400px;
      width: 300px;
      border: 2px white;
      border-radius: 10px;
      background-image: url(sundae.PNG);
      background-repeat: no-repeat;
      background-size: 300px 400px;
      margin: 25px;
    }

    .bottom6 {
      height: 400px;
      width: 300px;
      border: 2px white;
      border-radius: 10px;
      background-image: url(cakebucket.jpg);
      background-repeat: no-repeat;
      background-size: 300px 400px;
      margin: 25px;
    }

    .bottom-container3 {
      display: flex;
      margin: 50px;
      margin-left: 50px;
      justify-content: center;

    }

    .bottom7 {
      height: 400px;
      width: 300px;
      border: 2px white;
      border-radius: 10px;
      background-image: url(biscuit1.jpg);
      background-repeat: no-repeat;
      background-size: 300px 400px;
      margin: 25px;

    }

    .bottom8 {
      height: 400px;
      width: 300px;
      border: 2px white;
      border-radius: 10px;
      background-image: url(Strawberryice.jpg);
      background-repeat: no-repeat;
      background-size: 300px 400px;
      margin: 25px;
    }

    .bottom9 {
      height: 400px;
      width: 300px;
      border: 2px white;
      border-radius: 10px;
      background-image: url(chips\ and\ nimco.PNG);
      background-repeat: no-repeat;
      background-size: 300px 400px;
      margin: 25px;
    }

    .bottom-container4 {
      display: flex;
      margin: 50px;
      margin-left: 50px;
      justify-content: center;

    }

    .bottom10 {
      height: 400px;
      width: 300px;
      border: 2px white;
      border-radius: 10px;
      background-image: url(gulab.jpg);
      background-repeat: no-repeat;
      background-size: 300px 400px;
      margin: 25px;

    }

    .bottom11 {
      height: 400px;
      width: 300px;
      border: 2px white;
      border-radius: 10px;
      background-image: url(samosa1.PNG);
      background-repeat: no-repeat;
      background-size: 300px 400px;
      margin: 25px;
    }

    .bottom12 {
      height: 400px;
      width: 300px;
      border: 2px white;
      border-radius: 10px;
      background-image: url(buns.jpg);
      background-repeat: no-repeat;
      background-size: 300px 400px;
      margin: 25px;
    }

    .bottom-container5 {
      display: flex;
      margin: 50px;
      margin-left: 50px;
      justify-content: center;

    }

    .bottom13 {
      height: 400px;
      width: 300px;
      border: 2px white;
      border-radius: 10px;
      background-image: url(prepacked.PNG);
      background-repeat: no-repeat;
      background-size: 300px 400px;
      margin: 25px;

    }

    .bottom14 {
      height: 400px;
      width: 300px;
      border: 2px white;
      border-radius: 10px;
      background-image: url(customized1.png);
      background-repeat: no-repeat;
      background-size: 300px 400px;
      margin: 25px;
    }

    .speciality {
      width: 100vw;
      background-image: url(wall.jpg);
      padding: 20px;

    }

    .speciality h1 {
      text-align: center;
      color: white;
      font-size: 50px;
    }

    .nimimg {
      margin-left: 90px;
    }

    .feedback {
      width: 100vw;
      background-image: url(cupcakes.jpg);
      padding: 20px;

    }

    .center {
      padding: 30px;
      color: #ff0000;
      font-size: 30px;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      text-align: center;
      font-weight: bold;
    }

    .feed-button {
      background-color: #ff0000;
      color: white;
      height: 50px;
      width: 20%;
      border: 2px #ff0000;
      border-radius: 3px;
      margin-left: 530px;
      cursor: pointer;
      justify-content: center;
      text-align: center;
      font-size: larger;

    }

    .footer {
      display: flex;
      flex-wrap: wrap;
      /* justify-content: center; */
      margin-top: 20px;
    }

    .flogo {
      /* margin-left: 50px;
            padding: 20px; */
      margin: 10px;
    }

    .fa {
      padding: 15px;
      font-size: 18px;
      width: 10px;
      height: 10px;
      text-decoration: none;
      margin: 2px 2px;
      border-radius: 50%;

    }

    .fa:hover {
      opacity: 0.7;
      background-color: red;
    }

    .fa-facebook {
      background: grey;
      color: white;
      justify-content: center;
    }

    .fa-youtube {
      background: grey;
      color: white;
      justify-content: center;
    }

    .fa-instagram {
      background: grey;
      color: white;
      justify-content: center;
    }

    .socialmedia {
      display: flex;
      justify-content: center;
      margin-top: 10px;
    }

    @media screen and (max-width: 600px) {
      .socialmedia {
        justify-content: center;
        margin-left: 0;
      }
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @media screen and (max-width: 600px) {

      .bottom-container1,
      .bottom-container2,
      .bottom-container3,
      .bottom-container4,
      .bottom-container5 {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .bottom1,
      .bottom2,
      .bottom3,
      .bottom4,
      .bottom5,
      .bottom6,
      .bottom7,
      .bottom8,
      .bottom9,
      .bottom10,
      .bottom11,
      .bottom12,
      .bottom13,
      .bottom14 {
        width: 80%;
        /* Adjust as needed */
      }

      .bottom-container1,
      .bottom-container2,
      .bottom-container3,
      .bottom-container4,
      .bottom-container5 {
        margin: 10px;
      }

      .middlenav {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .middlenav img {
        width: 80%;
        /* Adjust as needed */
        margin-bottom: 10px;
      }

      .middlenav nav {
        margin-top: 10px;
        justify-content: center;
      }

      .middlenav button {
        margin-top: 10px;
        margin-left: 0;
        width: 80%;
      }
    }

    @media screen and (max-width: 600px) {
      .centered {
        text-align: center;
        margin-top: 200px;
        /* Adjust as needed */
      }
    }

    .menu-icon {
      display: none;
      cursor: pointer;
      color: white;
      font-size: 24px;
      padding: 10px;
    }


    @media screen and (max-width: 600px) {
      .topnav a {
        /* display: none; */
        display: list-item;
        font-weight: bold;

      }

      .menu-icon {
        display: block;
      }

      #navLinks {
        display: none;
      }

      #navLinks.show {
        display: block;
      }
    }
  </style>
</head>

<body>
  <div class="topnav">
    <div class="menu-icon" onclick="toggleMenu()">
      <i class="fa fa-bars"></i>
    </div>
    <nav id="navLinks">
      <a style="margin-left: 5px;" href="#">Deals</a>
      <a style="margin-left: 3px;" href="#">Cakes</a>
      <a style="margin-left: 3px;" href="#">Cup Cakes</a>
      <a style="margin-left: 3px;" href="#">Brownies</a>
      <a style="margin-left: 3px;" href="#">Sundae</a>
      <a style="margin-left: 3px;" href="#">Cake Bucket</a>
      <a style="margin-left: 3px;" href="#">Biscuits</a>
      <a style="margin-left: 3px;" href="#">Ice cream</a>
      <a style="margin-left: 3px;" href="#">Chips & Nimcos</a>
      <a style="margin-left: 3px;" href="#">Sweets</a>
      <a style="margin-left: 3px;" href="#">Savory</a>
      <a style="margin-left: 3px;" href="#">Breakfast</a>
      <a style="margin-left: 3px;" href="#">Prepacked</a>
      <!-- Add your other navigation links here -->
    </nav>
  </div>

  <div class="middlenav">
    <div class="logo">
      <a href="#"><img width="250" height="127" src="kababjee logo.png" alt="img"></a>
    </div>
    <nav>
      <a style="margin-left: 20px;" class="active"
        href="http://localhost/anumprogram/web/landingpage.php">HOME</a>
      <a style="margin-left: 15px;"
        href="http://localhost/anumprogram/web/aboutus.html">ABOUT
        US</a>
      <a style="margin-left: 15px;"
        href="http://localhost/anumprogram/web/bankoffer.html">BANK
        OFFERS</a>
      <a style="margin-left: 15px;"
        href="http://localhost/anumprogram/web/ourlocatioon.html">OUR
        LOCATION</a>
      <a style="margin-left: 15px;"
        href="http://localhost/anumprogram/web/contactus.php">CONTACT
        US</a>
    </nav>
    <button><a
        href="http://localhost/anumprogram/web/registration.php">REGISTER</a></button>
    <button><a
        href="http://localhost/anumprogram/web/login.php">LOGIN</a></button>

  
  </div>
  <div class="slideshow-container">
    <div class="mySlides fade">
      <img src="image slideshow1.png" alt="Snow" style="width:100%; height: 500px;">
      <!-- <div class="centered">
        <img height="300" src="download-removebg-preview.png" alt="img">
      </div> -->
    </div>
    <div class="mySlides fade">
      <img src="img1.webp" style="width:100%">
    </div>

  </div>
  <br>
  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>

  </div>
  </div>
  <div class="bottom-container1">
    <div class="bottom1">
      <h2 style=" color: white; margin-left: 40px;margin-top: 180px; ">EXCLUSIVE DEALS</h2>
      <p style=" color: white; margin-left: 40px;margin-top: 30px; ">Ramadan Kareem Mubarak</p>
      <button style="background-color: red; color: white; width: 50%; 
            height: 40px; margin-left: 70px;margin-top: 70px; border: 2px red;">SEE COLLECTION</button>
    </div>
    <div class="bottom2">
      <h2 style=" color: white; margin-left: 40px;margin-top: 180px; ">CAKES</h2>
      <p style=" color: white; margin-left: 40px;margin-top: 30px; ">Sweet Cravings? We got you<br>covered.</p>
      <button style="background-color: red; color: white; width: 50%; 
            height: 40px; margin-left: 70px;margin-top: 50px; border: 2px red;">SEE COLLECTION</button>
    </div>
    <div class="bottom3">
      <h2 style=" color: white; margin-left: 40px;margin-top: 180px; ">
        CUPCAKES</h2>
      <p style=" color: white; margin-left: 40px;margin-top: 30px; ">A little cupcake goes a long way.</p>
      <button style="background-color: red; color: white; width: 50%; 
            height: 40px; margin-left: 70px;margin-top: 70px; border: 2px red;">SEE COLLECTION</button>
    </div>
  </div>
  <div class="bottom-container2">
    <div class="bottom4">
      <h2 style=" color: white; margin-left: 40px;margin-top: 180px; ">BROWNIES</h2>
      <p style=" color: white; margin-left: 40px;margin-top: 30px; ">Feeling Drownie? Have our Brownie.</p>
      <button style="background-color: red; color: white; width: 50%; 
            height: 40px; margin-left: 70px;margin-top: 70px; border: 2px red;">SEE COLLECTION</button>
    </div>
    <div class="bottom5">
      <h2 style=" color: white; margin-left: 40px;margin-top: 180px; ">SUNDAE</h2>
      <p style=" color: white; margin-left: 40px;margin-top: 30px; ">Celebrate your sweet moments with<br>our sweet</p>
      <button style="background-color: red; color: white; width: 50%; 
            height: 40px; margin-left: 70px;margin-top: 50px; border: 2px red;">SEE COLLECTION</button>
    </div>
    <div class="bottom6">
      <h2 style=" color: white; margin-left: 40px;margin-top: 180px; ">CAKE BUCKET</h2>
      <p style=" color: white; margin-left: 40px;margin-top: 30px; ">Sweet and special</p>
      <button style="background-color: red; color: white; width: 50%; 
            height: 40px; margin-left: 70px;margin-top: 70px; border: 2px red;">SEE COLLECTION</button>
    </div>
  </div>
  <div class="bottom-container3">
    <div class="bottom7">
      <h2 style=" color: white; margin-left: 40px;margin-top: 180px; ">
        BISCUITS ASSORTED</h2>
      <p style=" color: white; margin-left: 40px;margin-top: 30px; ">Perfect for every day snacking</p>
      <button style="background-color: red; color: white; width: 50%; 
            height: 40px; margin-left: 70px;margin-top: 70px; border: 2px red;">SEE COLLECTION</button>
    </div>
    <div class="bottom8">
      <h2 style=" color: white; margin-left: 40px;margin-top: 180px;">ICE CREAM</h2>
      <p style=" color: white; margin-left: 40px;margin-top: 30px; ">The best time for ice cream is<br>always.</p>
      <button style="background-color: red; color: white; width: 50%; 
            height: 40px; margin-left: 70px;margin-top: 50px; border: 2px red;">SEE COLLECTION</button>
    </div>
    <div class="bottom9">
      <h2 style=" color: white; margin-left: 40px;margin-top: 180px;">CHIPS & NIMCO</h2>
      <p style=" color: white; margin-left: 40px;margin-top: 30px; ">Delicious & Crunchy Mix Namkeen<br>Food.</p>
      <button style="background-color: red; color: white; width: 50%; 
            height: 40px; margin-left: 70px;margin-top: 50px; border: 2px red;">SEE COLLECTION</button>
    </div>
  </div>
  <div class="bottom-container4">
    <div class="bottom10">
      <h2 style=" color: white; margin-left: 40px;margin-top: 180px; ">SWEETS</h2>
      <p style=" color: white; margin-left: 40px;margin-top: 30px; ">A True essence of Celebration</p>
      <button style="background-color: red; color: white; width: 50%; 
            height: 40px; margin-left: 70px;margin-top: 70px; border: 2px red;">SEE COLLECTION</button>
    </div>
    <div class="bottom11">
      <h2 style=" color: white; margin-left: 40px;margin-top: 180px; ">SAVORY</h2>
      <p style=" color: white; margin-left: 40px;margin-top: 30px; ">Freshly made Savories to indulge.</p>
      <button style="background-color: red; color: white; width: 50%; 
            height: 40px; margin-left: 70px;margin-top: 70px; border: 2px red;">SEE COLLECTION</button>
    </div>
    <div class="bottom12">
      <h2 style=" color: white; margin-left: 40px;margin-top: 180px; ">BREAKFAST ITEMS</h2>
      <p style=" color: white; margin-left: 40px;margin-top: 30px; ">A healthy breakfast</p>
      <button style="background-color: red; color: white; width: 50%; 
            height: 40px; margin-left: 70px;margin-top: 70px; border: 2px red;">SEE COLLECTION</button>
    </div>
  </div>
  <div class="bottom-container5">
    <div class="bottom13">
      <h2 style=" color: white; margin-left: 40px;margin-top: 180px; ">PREPACKED</h2>
      <p style=" color: white; margin-left: 40px;margin-top: 30px; ">Eat healthily. Live healthily.</p>
      <button style="background-color: red; color: white; width: 50%; 
            height: 40px; margin-left: 70px;margin-top: 70px; border: 2px red;">SEE COLLECTION</button>
    </div>
    <div class="bottom14">
      <h2 style=" color: white; margin-left: 20px;margin-top: 180px; ">CUSTOMIZED ORDER</h2>
      <p style=" color: white; margin-left: 20px;margin-top: 30px; ">Share Moments, Share Custom.</p>
      <button style="background-color: red; color: white; width: 50%; 
            height: 40px; margin-left: 70px;margin-top: 50px; border: 2px red;">SEE COLLECTION</button>
    </div>
  </div>
  <div class="speciality">
    <h1>OUR SPECIALITIES</h1>
    <p style="  text-align: center; color: white;font-size: 20px;">Fresh Bakery Items with the Finest Ingredients</p>
    <img src="nimco.jpg" alt="img" class="nimimg">
    <p style="color: red; margin-left: 90px;">MIX NIMCO</p>
    <p style="color: white; margin-left: 90px;">Rs.220.00</p>
  </div>
  <div class="feedback">
    <div class="center">
      Have feedback about our product or service?<br>
      Please contact KababjeesBakers directly
    </div>
    <button type="submit" class="feed-button">SEND FEEDBACK NOW</button>
  </div>
  <div class="footer">
    <p style="color: white; margin-top: 50px; margin-left: 90px;">Iso, Halal, & Haccap certified, approved by the
      Sindh<br>
      Food Authority & made to the very highest standards of hygiene &<br>
      healthfulness, our age-old virtues of quality & good service <br>
      intact, Kababjees is now reinventing the art of baking with the<br>
      same tender loving care that has earned us your trust.
    </p>
    <img src="footerlogo.PNG" alt="img" class="flogo">

    <ul style="margin-top: 40px;">
      <li><a style="text-decoration: none; color: white; cursor: pointer; font-size: medium; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
            padding: 20px;" href="#home">Cake</a></li>
      <li style="margin-top: 20px;"><a style="text-decoration: none; color: white; cursor: pointer; font-size: medium; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
              padding: 20px;" href="#news">Sweets</a></li>
      <li style="margin-top: 20px;"><a style="text-decoration: none; color: white; cursor: pointer; font-size: medium; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
              padding: 20px;" href="#contact">Nimco</a></li>

    </ul>
    <ul style="margin-top: 40px;">
      <li><a style="text-decoration: none; color: white; cursor: pointer; font-size: medium; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
            padding: 20px; margin-left: 30px; " href="#home">LOCATIONS</a></li>
      <li style="margin-top: 20px;"><a style="text-decoration: none; color: white; cursor: pointer; font-size: medium; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
              padding: 20px; margin-left: 30px;" href="#news">MENU</a></li>
      <li style="margin-top: 20px;"><a style="text-decoration: none; color: white; cursor: pointer; font-size: medium; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
              padding: 20px; margin-left: 30px; " href="#contact">CONTACT US</a></li>

    </ul>
  </div>
  <div class="socialmedia">
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-youtube"></a>
    <a href="#" class="fa fa-instagram"></a>
  </div>

  <script>
    let slideIndex = 0;
    showSlides();
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  </script>
  <script>
    function toggleMenu() {
      var navLinks = document.getElementById("navLinks");
      navLinks.classList.toggle("show");
    }
  </script>
</body>

</html>