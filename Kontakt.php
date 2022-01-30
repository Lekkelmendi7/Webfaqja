<?php
include_once 'classes/contact.class.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/kontakt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>TechEcommerce</title>
</head>
<body>
<header>
    <?php include_once 'include/header.php';?>
</header>

<main id="main">
    <div class="contact">
        <div class="contact_one_box">
          <h3>Adresa</h3>
          <p><i class="fas fa-map-marker-alt"></i><br>Bill Klinton, Kosova</p>
           </div>
        <div class="contact_one_box">
          <h3>Numri i Kontaktit</h3>
           <p><i class="fas fa-phone-alt"></i><br>+383-44-111-111</p>
        </div>
        <div class="contact_one_box">
          <h3>Email</h3>
            <p><i class="fas fa-envelope"></i><br>email.gmail.com</p>
        </div>
    </div>
</main>
<section class="contact1">
    <div class="conatct1_box">
       <form class="contact-form" action="include/contact.inc.php" method="POST">
           <h1>Contact Form</h1>
           <input type="text" class="name" name="name" placeholder="Emri"/><br>
           <input type="text" class="lname" name="lname" placeholder="Mbiemri"/><br>
           <textarea id="subject" class="subject" name="subject" placeholder="Mesazhi juaj" style="height:150px"></textarea><br>
           <input type="submit" name="submit" class="disabled" value="Dergo" disabled/>
           <span class="error-msg"></span>
       </form>
    </div>
</section>
<footer>
    <?php include_once 'include/footer.php';?>
</footer>


    <script src="js/kontakt.js"></script>
    <script src="https://kit.fontawesome.com/3b1ca000cb.js"></script>
</body>
</html>