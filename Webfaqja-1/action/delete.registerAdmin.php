<?php 
include_once '../classes/database.class.php';
include_once '../classes/register.class.php';


$conn = new db();


if(isset($_GET['id'])){
    $id=$_GET['id'];
}

$query = "DELETE FROM register WHERE id = :id";
$query = $conn->getConn()->prepare($query);
$query->bindParam(':id', $id);
$query->execute();

    echo "<script>alert('Regjistrimi eshte fshire me sukses');
    document.location='../Admin/registerAdmin.php';
    </script>";
    

?>