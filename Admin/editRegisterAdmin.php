<?php
include_once '../classes/registerAdmin.class.php';
include_once '../classes/database.class.php';

$conn = new db();
$registersClass = new RegisterAdmin();
$registersClass->editRegisterId();

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
    form{
        margin-left: 175px;
        margin-top: 60px;
    }
    input[type=text]{
        width: 80%;
        height: 30px;
        border-radius: 6px;
        border-color: lightblue;
    }
    textarea{
        border-radius: 5px;
        border-color: lightblue;
    }
    input:focus, textarea:focus{
        outline: none;
    }
    .create{
        background-color: blue;
        color: white;
        border-radius: 5px;
        cursor: pointer;
        width: 80%;
        height: 40px;
    }
@media only screen and (max-width: 634px){
    form{
        margin-left: 120px;
    }
}
    @media only screen and (max-width: 464px){
    form{
        margin-left: 60px;
    }
}
</style>
</head>
<body>
    <header>
       <?php include_once '../include/headerAdmin.php'?>
    </header>
  <h1 class="title">Ndrysho Regjistrimin</h1>
    <form action="<?php $registersClass->updateRegister();?>" method="POST">

        <input type="text" class="emri" name="name" placeholder="Shkruani emrin" value="<?php echo $registersClass->register['name']?>"><br><br>
        <input type="text" class="mbiemri" name="lname" placeholder="Shkruani mbiemrin" value="<?php echo $registersClass->register['lname']?>"><br><br>
        <input type="text" class="email" name="email" placeholder="Shkruani emailin" value="<?php echo $registersClass->register['email']?>"><br><br>
        <p>Tipi i userit: <strong><?php echo $registersClass->register['role']?></strong></p><br>
        <label>Ndrysho Tipin e Userit, i cili duhet te selektohet gjithmon kur behet update:</label><br><br>
        <input type="radio" class="Admin" name="role" value="Admin">
        <label for="Admin">Admin</label><br><br>
        <input type="radio" class="user" name="role" value="User">
        <label for="User">User</label><br><br>
        <button type="submit" class="create" name="edit">Ndrysho</button>
    </form>
    

    <div style="text-align: center; padding-top: 50px;">
    <span class="credit" style="text-align: center;">Ndertuar nga <a href="https://www.google.com" style="color: blue; text-decoration: none;">Enes Hetemi</a></span>
    </div>
</body>
</html>