<?php
session_start();
?>


<section>
            
    <div id="container">
    <?php if(isset($_SESSION['name'])): ?>
    <p>Welcome, <?php echo $_SESSION['name'];?>
    <?php if($_SESSION['role'] == "Admin" ): ?>
    <a href="Admin/produktetAdmin.php">Admin Panel</a>
    <?php endif; ?>
    / <a href="logout.php">Logout</a></p>
    <?php endif; ?>
        <div id="shopName"><a href="#"> <b>Tech</b>Ecom </a></div>
            
            <div id="search">
            <input type="text" name="searchBox" placeholder="Search">
            <input type="button" value="Search">
        </div>
        <div id="user">
            <a href="#"> <i class="fas fa-shopping-cart addedToCart"><div id="badge"> 0 </div></i></a>

        </div>

        <div class="navbar">
            <input type="checkbox" id="btn-menu" class="hidden">
                <label for="btn-menu" class="icon-menu">
            <i class="fa fa-bars bars"></i>
            
            </label>
            <div class="navbar_div">
                
                <ul class="navbar_div_ul">
                    
                <li class="navbar_div_li"><a href="Mainpage.php">Ballina</a></li>
                <li class="navbar_div_li"><a href="index.php">Produktet</a></li>
                <li class="navbar_div_li"><a href="Rreth Nesh.php">RrethNesh</a></li>
                <li class="navbar_div_li"><a href="Kontakt.php">Kontakti</a></li>
                <li class="navbar_div_li"><a href="Login.php">Login</a></li>
                <li class="navbar_div_li"><a href="Register.php">Register</a></li>
                </ul>     
        </div>
    </div>
        </div>

    </section>