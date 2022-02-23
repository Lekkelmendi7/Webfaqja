<?php
class SliderAdmin{
  private $image;
  private $images;

  private $conn;
  private $sql;
  private $query;

  public function __construct($image){
      $this->image = $image;
  }

  public function UploadImageSlider(){
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

  if (in_array($fileActualExt, $allowed)) {
        $this->images = uniqid('', true). "." .$fileActualExt;
        $fileDestination = '../img/slider/'.$this->images;
        move_uploaded_file($fileTmpName, $fileDestination);
  }
}


  public function doSlider(){

      $this->conn = new db();

      $this->sql = 'INSERT INTO slider (image) VALUES (:image)';
      $this->query = $this->conn->getConn()->prepare($this->sql);
      $this->query->bindParam('image', $this->images);

      if($this->query->execute()){
        echo "<script>alert('Ju keni shtuar me sukses sliderin.');
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