<?php
include_once '../classes/productAdmin.class.php';
include_once '../classes/database.class.php';


 $titull = $_POST['titull'];
 $price = $_POST['price'];
 $pershk = $_POST['pershk'];
 $image = $_FILES['image'];

 $product = new ProductAdmin($titull, $price, $pershk, $image);
 
 if(isset($_POST['submit'])){
     $product->UploadImageProduct();
     $product->doProduct();
 }
?>