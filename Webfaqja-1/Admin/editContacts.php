<?php
include_once '../classes/contactsAdminUpdate.class.php';
include_once '../classes/database.class.php';

$conn = new db();
$contactsClass = new ContactUpdate();
$contactsClass->editContactId();

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
  <h1 class="title">Ndrysho Te dhenat e Kontaktit</h1>
    <form action="<?php $contactsClass->updateContacts();?>" method="POST">
        <input type="text" class="Titulli" name="Adresa" placeholder="Shkruani Adresen" value="<?php echo $contactsClass->contactU['Adresa']?>"><br><br>
        <input type="text" class="Qmimi" name="Nrkontaktit" placeholder="Shkruani Numrin e telefonit" value="<?php echo $contactsClass->contactU['Nrkontaktit']?>"><br><br>
        <textarea id="persh" class="persh" name="email" placeholder="Shkruani emailin" style="width: 80%; height: 230px;"><?php echo $contactsClass->contactU['email']?></textarea><br><br>
        <button type="submit" class="create" name="edit">Ndrysho Kontaktet</button>
    </form>

    <div style="text-align: center; padding-top: 50px;">
    <span class="credit" style="text-align: center;">Ndertuar nga <a href="https://www.google.com" style="color: blue; text-decoration: none;">Enes Hetemi</a></span>
    </div>
</body>
</html>