<?php
include_once '../classes/contact.class.php';
include_once '../classes/database.class.php';


 $name = $_POST['name'];
 $lname = $_POST['lname'];
 $subject = $_POST['subject'];

 $contact = new Contact($name, $lname, $subject);
 
 if(isset($_POST['submit'])){
     if($name == '' || $lname == '' || $subject == ''){
        echo "<script>alert('Duhet ti plotesoni te gjitha fushat.');
        document.location='../Kontakt.php';
        </script>";
     }
     else{
     $contact->doContact();
     }
 }
?>