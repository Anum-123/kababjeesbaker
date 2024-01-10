<?php
session_start();

include "connection.php";

if (isset($_POST['save_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = "SELECT * FROM login_form WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $query);
    $row=mysqli_fetch_array($result);
    if ($row["usertype"] == "user") {
      $_SESSION['user_email'] = $email;
      header("Location: products.php");
      exit();
  } elseif ($row["usertype"] == "admin") {
      $_SESSION['user_email'] = $email;
      header("Location: admin.php");
      exit();
  }
  //  else {
  //     echo "<script>alert('User with the same email already exists. Please choose a different email.');</script>";
  // }
  
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>CONTACT US</title>
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

    .middlenav {
      background-color: #2b2b2b;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;

    }

    .middlenav nav {
      flex-grow: 1;
      display: flex;
      justify-content: flex-end;
    }

    .middlenav a {
      color: white;
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

    .feedback {
      background-image: url(SLIDER-4.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      padding: 20px;

    }

    .bottom-container1 {
      justify-content: center;
      display: flex;
    }

    .bottom1 {
      height: 330px;
      width: 600px;
      border: 2px white;
      border-radius: 10px;
      background-color: #212121;
      margin: 25px;
      text-align: center;

    }

    .input-field {

      margin-left: 10px;
      height: 50px;
      width: 70%;

    }

    button {
      background-color: black;
      color: #fff;
      cursor: pointer;
      margin-left: 10px;
      margin-top: 20px;
      height: 35px;
      width: 90%;
      border-radius: 20px;
      align-items: center;
      font-family: 'Times New Roman', Times, serif;
      font-size: 20px;
    }

    .footer {
      display: flex;
      flex-wrap: wrap;
      /* justify-content: center; */
      margin-top: 20px;
    }

    .flogo {
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
<script>
  function validateForm() {
    var fname = document.forms["contactForm"]["firstname"].value;
    var number = document.forms["contactForm"]["number"].value;
    var subject = document.forms["contactForm"]["subject"].value;
    var description = document.forms["contactForm"]["description"].value;

    // Validate name (should not contain numbers)
    var nameRegex = /^[a-zA-Z\s]+$/;
    if (!nameRegex.test(fname)) {
      alert("Please enter a valid name without numbers.");
      return false;
    }

    // Validate subject and description (should not contain numbers)
    if (/\d/.test(subject) || /\d/.test(description)) {
      alert("Subject and description should not contain numbers.");
      return false;
    }

    return true;
  }
</script>

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
      <a href="#"><img src="kababjee logo.png" alt="img"></a>
    </div>

  </div>

  <div class="bottom-container1">
    <div class="bottom1">
      <h1 style=" color: white; margin-left: 40px;margin-top: 5px; ">Login</h1>
      <form action="" method="POST" onsubmit="return validateForm()" name="login_form">
        <input style="margin-top: 30px;" name="email" type="email" placeholder="email" required class="input-field" /><br><br>
       
       
        <input type="password" placeholder="password" name="password"  required class="input-field" /><br><br>
    
        
        <input style="background-color: red; color: white; width: 40%; 
            height: 30px; margin-left: 10px;margin-top: 30px; border: 2px red;" type="submit" name="save_btn" value="Login"><br><br>
    </div>
    </form>
    <?php
    if (isset($_POST['save_btn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];


        $query = "INSERT INTO login_form (email,password) VALUES('$email','$password')";
        $data = mysqli_query($con, $query);
        if ($data) {
            echo "data save";
        } else {
            echo "please try again";
        }
    }
    ?>
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
    function toggleMenu() {
      var navLinks = document.getElementById("navLinks");
      navLinks.classList.toggle("show");
    }
  </script>
</body>

</html>