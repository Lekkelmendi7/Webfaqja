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
    width: 25%;
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
.edit{
    background-color: green;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    width: 70px;
    height: 30px;
}
.delete{
    background-color: red;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    width: 70px;
    height: 30px;
}
    </style>
</head>
<body>

<header>
    <?php include_once '../include/headerAdmin.php'?> 
</header>

         <h1 class="title">Lista qe jane regjistruar</h1>
<table class="class">
  <tr>
    <th>Emri</th>
    <th>Mbiemri</th>
    <th>Email</th>
    <th>Fshije</th>
  </tr>
  <tr>
    <td>Enes</td>
    <td>Hetemi</td>
    <td>Test@gmail.com</td>
    <td><a href="editRegisterAdmin.php"><button class="edit">Edit</button></a><button class="delete">Delete</button></td>
  </tr>
  <tr>
    <td>Enes</td>
    <td>Hetemi</td>
    <td>Test1@gmail.com</td>
    <td><a href="editRegisterAdmin.php"><button class="edit">Edit</button></a><button class="delete">Delete</button></td>
  </tr>
  <tr>
    <td>Enes</td>
    <td>Hetemi</td>
    <td>test2@gmail.com</td>
    <td><a href="editRegisterAdmin.php"><button class="edit">Edit</button></a><button class="delete">Delete</button></td>
  </tr>
</table>

<div style="text-align: center; padding-top: 50px;">
    <span class="credit" style="text-align: center;">Ndertuar nga <a href="https://www.google.com" style="color: blue; text-decoration: none;">Enes Hetemi</a></span>
</div>
</body>
</html>