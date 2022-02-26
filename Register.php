<?php
include_once 'classes/register.class.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>TechEcommerce</title>
</head>
<body>
    <h1>Register Form</h1>
    <form class="signup-form" action="include/register.inc.php" method="POST">
      <input type="text" class="name" name="username" placeholder="Emri"/>
      <input type="text" class="lname" name="lname" placeholder="Mbiemri"/>
      <input type="email" class="email" name="email" placeholder="Email"/>
      <input type="password" class="password" name="password" placeholder="Password"/>
      <input type="password" class="passwordC" name="passwordC" placeholder="Konfirmo Password-in"/>
      <input type="submit" name="submit" class="disabled" value="Regjistohu" disabled/>
      <span class="error-msg"></span>
    </form>
    <div style="text-align: center; padding-top: 10px;">Jeni te regjistruar: <a href="Login.php" style="color: blue; text-decoration: none;">Logohu</a></div>
<div style="text-align: center; padding-top: 20px;">
    <span class="credit" style="text-align: center;">Ndertuar nga <a href="https://www.google.com" style="color: blue; text-decoration: none;">Enes Hetemi</a></span>
  </div>
    <script src="js/register.js"></script>
</body>
</html>