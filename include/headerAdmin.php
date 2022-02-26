<?php
include_once '../classes/isAdmin.class.php';
session_start();

$Admin = new isAdmin();
if (!$Admin->AdminIs()) {
	header('Location: ../index.php');
}
?>



<section>
            
            <div id="container">
                
                <div id="shopName"><a href="#"> <b>Admin Panel</b> TechEcom </a></div>
                <?php if(isset($_SESSION['name'])): ?>
                <p>Welcome, <?php echo $_SESSION['name'];?>
                / <a href="../logout.php">Logout</a></p>

                <?php endif; ?>
        
                <div class="navbar">
                
                    <input type="checkbox" id="btn-menu" class="hidden">
                        <label for="btn-menu" class="icon-menu">
                    <i class="fa fa-bars bars"></i>
                    
                    </label>
                    <div class="navbar_div">
                        
                        <ul class="navbar_div_ul">
                            
                        <li class="navbar_div_li"><a href="produktetAdmin.php">Produktet</a></li>
                        <li class="navbar_div_li"><a href="registerAdmin.php">Regjistrimet</a></li>
                        <li class="navbar_div_li"><a href="contactAdmin.php">Kontaktimet</a></li>
                         
                        </ul>     
                </div>
            </div>
                </div>
        
            </section>