<?php 
include_once '../classes/database.class.php';
include_once '../classes/contactAdmin.class.php';
session_start();


$conn = new db();


if(isset($_GET['id'])){
    $id=$_GET['id'];
}

$query = "DELETE FROM contact WHERE id = :id";
$query = $conn->getConn()->prepare($query);
$query->bindParam(':id', $id);
$query->execute();

    echo "<script>alert('Kontaktimi eshte fshire me sukses');
    document.location='../Admin/contactAdmin.php';
    </script>";
    

?>