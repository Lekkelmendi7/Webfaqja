<?php 
include_once '../classes/database.class.php';
include_once '../classes/sliderAdmin.class.php';


$conn = new db();


if(isset($_GET['id'])){
    $id=$_GET['id'];
}

$query = "DELETE FROM slider WHERE id = :id";
$query = $conn->getConn()->prepare($query);
$query->bindParam(':id', $id);
$query->execute();

    echo "<script>alert('Slideri eshte fshire me sukses.');
    document.location='../Admin/produktetAdmin.php';
    </script>";
    

?>