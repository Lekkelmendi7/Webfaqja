<?php 
include_once '../classes/database.class.php';
include_once '../classes/productAdmin.class.php';


$conn = new db();


if(isset($_GET['id'])){
    $id=$_GET['id'];
}

$query = "DELETE FROM product WHERE id = :id";
$query = $conn->getConn()->prepare($query);
$query->bindParam(':id', $id);
$query->execute();

    echo "<script>alert('Produkti eshte fshire me sukses');
    document.location='../Admin/produktetAdmin.php';
    </script>";
    

?>