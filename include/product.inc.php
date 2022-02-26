<?php
include_once '../classes/productAdmin.class.php';
include_once '../classes/database.class.php';
session_start();

 $titull = $_POST['titull'];
 $price = $_POST['price'];
 $pershk = $_POST['pershk'];
 $image = $_FILES['image'];
 $autori = $_SESSION['name'];

 $product = new ProductAdmin($titull, $price, $pershk, $image, $autori);
 
 if(isset($_POST['submit'])){
     $product->UploadImageProduct();
     $product->doProduct();
 }
?>