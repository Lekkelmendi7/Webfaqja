<?php
class ProductAdmin{
  private $titull;
  private $price;
  private $pershk;
  private $image;
  private $images;

  private $conn;
  private $sql;
  private $query;

  public function __construct($titull, $price, $pershk, $image){
      $this->titull = $titull;
      $this->price = $price;
      $this->pershk = $pershk;
      $this->image = $image;
  }

  public function UploadImageProduct(){
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

  if (in_array($fileActualExt, $allowed)) {
        $this->images = uniqid('', true). "." .$fileActualExt;
        $fileDestination = '../img/upload/'.$this->images;
        move_uploaded_file($fileTmpName, $fileDestination);
  }
}


  public function doProduct(){

      $this->conn = new db();

      $this->sql = 'INSERT INTO product (titull, price, pershk, image) VALUES (:titull, :price, :pershk, :image)';
      $this->query = $this->conn->getConn()->prepare($this->sql);
      $this->query->bindParam('titull', $this->titull);
      $this->query->bindParam('price', $this->price);
      $this->query->bindParam('pershk', $this->pershk);
      $this->query->bindParam('image', $this->images);

      if($this->query->execute()){
        echo "<script>alert('Ju keni shtuar me sukses produktin');
        document.location='../Admin/produktetAdmin.php';
        </script>";
      }
      else{
        echo "<script>alert('Duhet ti plotesoni te gjitha fushat.');
        document.location='../Admin/produktetAdmin.php';
        </script>";
      }
  }
}


?>