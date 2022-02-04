<?php
class ProductAdmin{
  private $titull;
  private $price;
  private $pershk;

  private $conn;
  private $sql;
  private $query;

  public function __construct($titull, $price, $pershk){
      $this->titull = $titull;
      $this->price = $price;
      $this->pershk = $pershk;
  }
  
  public function doProduct(){

      $this->conn = new db();

      $this->sql = 'INSERT INTO product (titull, price, pershk) VALUES (:titull, :price, :pershk)';
      $this->query = $this->conn->getConn()->prepare($this->sql);
      $this->query->bindParam('titull', $this->titull);
      $this->query->bindParam('price', $this->price);
      $this->query->bindParam('pershk', $this->pershk);

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