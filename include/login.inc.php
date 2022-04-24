<?php
include_once '../classes/login.class.php';
include_once '../classes/database.class.php';
session_start();

 $email = $_POST['email'];
 $password = $_POST['password'];
 

 $login = new Login($email, $password);


 if(isset($_POST['login'])){
    if($email == '' || $password == ''){
       echo "<script>alert('Duhet ti plotesoni te gjitha fushat.');
       document.location='../Login.php';
       </script>";
    }
    else{
    $login->doLogin();
    }
}
?>

<?php if(isset($_GET['email'])): ?>
        Your name is <?php echo $_GET["email"]; ?>
<?php endif; ?>

<?php if(isset($_GET['password'])): ?>
        Your name is <?php echo $_GET["password"]; ?>
<?php endif; ?>
