<?php
include_once 'classes/productAdmin.adminclass.php';
include_once 'classes/database.class.php';

$conn = new db();
$productsClass = new ProductAdminA();
$productsClass->editProductId();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/produkt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .view{
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }
        img{
            width: 400px;
            height: 400px;
            padding-top: 25px;
            padding-bottom: 25px;
            border: 1px solid lightblue;
        }
        .view1{
            text-align: center;
            padding-top: 25px;
            color: lightblue;
        }
        h1{
            font-family: Arial, Helvetica, sans-serif;
        }
        .create{
           background-color: blue;
           color: white;
           border-radius: 5px;
           cursor: pointer;
           width: 80%;
           height: 40px;
        }
        @media only screen and (max-width: 400px){
        img{
           width: 300px;
           height: 300px;
        }
    }
    </style>
    <title>TechEcommerce</title>
</head>
<body>
<header>
    <?php include_once 'include/header.php';?>
</header>
<form action="" method="post">
<div class="view">
   <img src="img/Laptophp.png">
</div>
<div class="view1">
   <h1><?php echo $productsClass->product['titull']?></h1><br>
   <h2>Qmimi: <strong><?php echo $productsClass->product['price']?></strong></h2><br>
   <p><?php echo $productsClass->product['pershk']?></p><br>
   <input type='number' class='quantity' name='quantity' min='1' value='1'><br>
   <button class="create">Shto Produktin</button>
</div>
</form>
<footer>
     <?php include_once 'include/footer.php';?>
  </footer>



    <script src="https://kit.fontawesome.com/3b1ca000cb.js"></script>
</body>
</html>