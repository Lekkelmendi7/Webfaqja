<?php
include_once 'classes/login.class.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Log-in Form</title>
        <link rel="stylesheet" type="text/css" href="login.css">


        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/navbar.css">

       
    </head>
    <body>
        <header>
        <?php include_once 'include/header.php';?>
    <main>
      <div class="main">

        <div class="wrapper">
          <header>Login Form</header>
          <form name="login" action="include/login.inc.php" method="POST">
            <div class="field email">
              <div class="input-area">
                <input type="text" name="email" placeholder="E-mail Adresa">
                <!---<i class="icon fas fa-envelope"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
              </div>
              <div class="error error-txt">E-mail nuk duhet te jete e zbrazet--></div>
            </div>
            <div class="field password">
              <div class="input-area">
                <input type="password" name="password" placeholder="Fjalekalimi">
                <!---<i class="icon fas fa-lock"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
              </div>
              <div class="error error-txt">Fjalekalimi nuk duhet te jete i zbrazet--></div>
            </div>
            <div class="pass-txt"><p><a href="Register.html">Keni harruar fjalekalimin?</p></a></div>
            <input type="submit" name="login" value="Login">
          </form>
        </div>
        <script src="login.js"></script>
</div>
</main>
    <footer>
    <?php include_once 'include/footer.php';?>
        </footer>
        
        
        <script src="https://kit.fontawesome.com/3b1ca000cb.js"></script>
        <!--<div class="scroll-bar" ></div>-->
    </body>
</html>