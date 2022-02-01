<?php
include_once '../classes/register.class.php';
include_once '../classes/database.class.php';


 $name = $_POST['username'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $passwordC = $_POST['passwordC'];
 


 $register = new Register($name, $lname, $email, $password, $passwordC);
 
 if(isset($_POST['submit'])){
     if($name == '' || $lname == '' || $email == '' || $password == '' || $passwordC == ''){
        echo "<script>alert('Duhet ti plotesoni te gjitha fushat.');
        document.location='../register.php';
        </script>";
     }
     else{
     $register->doRegister();
     }
 }