<?php
class register{
  private $name;
  private $lname;
  private $email;
  private $password;
  private $passwordC;
  private $role;

  private $conn;
  private $sql;
  private $query;

  public function __construct($name, $lname, $email, $password, $passwordC){
      $this->name = $name;
      $this->lname = $lname;
      $this->email = $email;
      $this->password = $password;
      $this->passwordC = $passwordC;
  }
  
  public function doRegister(){
      
      $this->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $this->passwordC = password_hash($_POST['passwordC'], PASSWORD_BCRYPT);
      $this->role = 'User';
      $this->conn = new db();

      $this->sql = 'INSERT INTO register (name, lname, email, password, passwordC, role) VALUES (:name, :lname, :email, :password, :passwordC, :role)';
      $this->query = $this->conn->getConn()->prepare($this->sql);
      $this->query->bindParam('name', $this->name);
      $this->query->bindParam('lname', $this->lname);
      $this->query->bindParam('email', $this->email);
      $this->query->bindParam('password', $this->password);
      $this->query->bindParam('passwordC', $this->passwordC);
      $this->query->bindParam('role', $this->role);

      if($this->query->execute()){
        echo "<script>alert('Ju jeni regjistruar me sukses, Faleminderit');
        document.location='../Register.php';
        </script>";
      }
      else{
        echo "<script>alert('Duhet ti plotesoni te gjitha fushat.');
        document.location='../Register.php';
        </script>";
      }
  }
}


?>