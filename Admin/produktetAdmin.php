<?php
include_once '../classes/productAdmin.adminclass.php';
include_once '../classes/database.class.php';


$productClass = new ProductAdminA();
$productClass->fetchProducts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin - Techecom</title>

    <style>
.title{
    text-align: center;
    padding-top: 60px;
    font-family: Arial, Helvetica, sans-serif;
    color: blue;
}
.class {
    padding: 20px;
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 80%;
    margin: auto;
}

.class td, .class th {
    border: 1px solid #ddd;
    padding: 8px;
    width: 20%;
}

.class tr:nth-child(even){
    background-color: #f2f2f2;
}

.class tr:hover {
    background-color: #ddd;
}

.class th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: blue;
    color: white;
}
.delete{
    background-color: red;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    width: 70px;
    height: 30px;
}
.edit{
    background-color: green;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    width: 70px;
    height: 30px;
}
.create{
    background-color: blue;
    color: white;
    margin-top:60px;
    margin-left: 140px;
    border-radius: 5px;
    cursor: pointer;
    width: 80px;
    height: 40px;
}
    </style>
</head>
<body>

<header>
    <?php include_once '../include/headerAdmin.php'?>
</header>
<a href="createProdukt.php">
    <button class="create">Create</button>
</a>
         <h1 class="title">Lista e Produkteve</h1>
<table class="class">
  <tr>
    <th>Foto</th>
    <th>Titulli</th>
    <th>Qmimi</th>
    <th>Pershkrimi</th>
    <th>Veprim</th>
  </tr>
  
  <?php $productClass->echoProducts(); ?>

</table>

<div style="text-align: center; padding-top: 50px;">
    <span class="credit" style="text-align: center;">Ndertuar nga <a href="https://www.google.com" style="color: blue; text-decoration: none;">Enes Hetemi</a></span>
</div>
</body>
</html>