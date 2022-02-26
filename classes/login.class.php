<?php
class Login{
    private $email;
    private $password;
    private $role;
    private $user;

    private $conn;
    private $sql;
    private $query;

    public function __construct($email, $password){
        $this->email = $email;
        $this->password = $password;
    }

    public function doLogin(){
        $this->role = '';
        $this->conn = new db();
        $this->sql = 'SELECT id, name, lname, email, password, role FROM register where email = :email';
        $this->query = $this->conn->getConn()->prepare($this->sql);
        $this->query->bindParam(':email', $this->email);
        $this->query->execute();

        $this->user = $this->query->fetch();

        if($this->user != null && password_verify($this->password, $this->user['password'])){
            $_SESSION['user_id'] = $this->user['id'];
            $_SESSION['name'] = $this->user['name'];
            $_SESSION['role'] = $this->user['role'];
            header('Location: ../index.php');
        }
        else{
            echo "<script>alert('Keni shkruar gabim email ose password.');
            document.location='../index.php';
            </script>";
        }
    }
}

?>