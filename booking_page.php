<?php

session_start();

?>

<!DOCTYPE html>

<html>

<head>

<title>Register!</title>

<style>

* {

      margin: 0;

      padding: 0;

      font-family: cursive;

      color: navy;

}

body{

      background-color: pink;

}

.button {

border-radius: 4px;

background-color: #f4511e;

border: none;

color: #FFFFFF;

text-align: center;

font-size: 28px;

padding: 15px;

width: 250px;

transition: all 0.5s;

cursor: pointer;

margin: 5px;

margin-left: 38%;

}



.button span {

cursor: pointer;

display: inline-block;

position: relative;

transition: 0.5s;

}



.button span:after {

content: '\00bb';

position: absolute;

opacity: 0;

top: 0;

right: -20px;

transition: 0.5s;

}



.button:hover span {

padding-right: 25px;

}



.button:hover span:after {

opacity: 1;

right: 0;

}

.nav-bar {

                      height: 10vh;

                      width: 100%;

                      background-color: red;

                      color: navy;

                      text-align: center;

                      font-size: 38px;

                      text-shadow: 0px 0px 1px cyan;

                      padding-top: 4px;

      }

.form-div {

      min-height: 90vh;

      display: flex;

      justify-content: center;

      align-items: center;

      font-size: 20px;

      margin-top: 25px;

}

.mydesign{

      border: 3px solid red;

      width: 70%;

      height: 100%;

      box-shadow: 5px 5px 20px grey;

      padding: 30px;

      padding-top: 30px;

      margin-top: 50px;

}

.text_design{

      margin-left: 15%;

      margin-right: 14%;

}

.input_design{

      margin-left: 1%;

}

.linky{

                      font-size: 21px;

                      padding: 6px;

                      border: 3px solid black;

                      width: 250px;

                      float: right;

                      margin: 7px;

      }

      .welcome{

      width: 250px;

      font-size: 21px;

      padding: 6px;

      border: 3px solid black;

      float: left;

      margin: 7px;

}

</style>

</head>

<body>

<nav class="nav-bar">

<a class="welcome">Welcome <?php echo $_SESSION['username'] ?></a>

<span style="color:navy;">

      Fill Your Details!

</span>

<a class="linky" href="homepage.php">Return to Home</a>

</nav>

<hr style="border: 3px solid black;">

<section class="form-div">

<form class="mydesign" action="process_booking.php" method="POST">

      <span class="text_design">Check In :</span><input type="text" class="input_design" style="margin-left: 100px;"name="check_in" /><br><br>

      <span class="text_design">Check Out :    </span><input type="text" style="margin-left: 80px;" class="input_design" name="check_out" /><br><br>

      <span class="text_design">Number of Guest :</span><input type="text" style="margin-left: 22px;"class="input_design" name="no_of_guest" /><br><br>

      <span class="text_design">Number of rooms : </span><input type="text" style="margin-left: 15px;"class="input_design" name="no_of_rooms" /><br><br>

      <button class="button"><span>Book Now </span></button>
      <p style="text-align: center; margin-top: 20px;">Note: Bring Your Govt. Id proofs along with you.</p>

</form>

</section>

</body>

</html>