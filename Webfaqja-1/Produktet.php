<?php
include_once 'classes/product.class.php';
include_once 'classes/database.class.php';


$productClass = new Product();
$productClass->fetchProducts();
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
    <link rel="stylesheet" href="css/pagination.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>TechEcommerce</title>
</head>
<body>
<header>
    <?php include_once 'include/header.php';?>
</header>

<div class="pr">
    <?php $productClass->echoProducts(); ?>
</div>

<div class="pagination">
  <a href="#" title="previous page"><</a>
  <a href="#" class="page-active">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#" title="next page">></a>
</div>

<footer>
   <?php include_once 'include/footer.php';?>
</footer>



    <script src="https://kit.fontawesome.com/3b1ca000cb.js"></script>
</body>
</html>