<?php
include_once '../classes/contact.class.php';
include_once '../classes/database.class.php';
session_start();


 $name = $_POST['name'];
 $lname = $_POST['lname'];
 $subject = $_POST['subject'];

 $contact = new Contact($name, $lname, $subject);
 
 if(isset($_POST['submit'])){
     $contact->doContact();
     header("Location: ../Produktet.php");
 
 }
?>