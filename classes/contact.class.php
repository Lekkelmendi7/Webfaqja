<?php
class contact{
  private $name;
  private $lname;
  private $subject;

  private $conn;
  private $sql;
  private $query;

  public function __construct($name, $lname, $subject){
      $this->name = $name;
      $this->lname = $lname;
      $this->subject = $subject;
  }
  
  public function doContact(){
      $this->conn = new db();

      $this->sql = 'INSERT INTO contact (name, lname, subject) VALUES (:name, :lname, :subject)';
      $this->query = $this->conn->getConn()->prepare($this->sql);
      $this->query->bindParam('name', $this->name);
      $this->query->bindParam('lname', $this->lname);
      $this->query->bindParam('subject', $this->subject);

      if($this->query->execute()){
        echo "<script>alert('Mesazhi eshte derguar me sukses, Faleminderit per mesazhin!');
        document.location='../Kontakt.php';
        </script>";
      }
      else{
        echo "<script>alert('Duhet ti plotesoni te gjitha fushat.');
        document.location='../Kontakt.php';
        </script>";
      }
  }
}

?>