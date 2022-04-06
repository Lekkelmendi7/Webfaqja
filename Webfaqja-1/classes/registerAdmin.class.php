<?php 
class RegisterAdmin{  
    private $conn;
    private $query;
    private $registers;
    public $register;
    
    
    public function fetchRegisters(){
        $this->conn = new db();
        $this->query = $this->conn->getConn()->query('SELECT * FROM register');
        $this->registers = $this->query->fetchAll();
    }

    public function echoRegister(){
        foreach($this->registers as $register){
            $id = $register['id'];
            echo"
            <tr>
              <td>{$register['name']}</td>
              <td>{$register['lname']}</td>
              <td>{$register['email']}</td>
              <td><a href='../Admin/editRegisterAdmin.php?id={$id}'><button class='edit'>Edit</button></a><a href='../action/delete.registerAdmin.php?id={$id}'><button class='delete'>Delete</button></a></td>
            </tr>";
        }
    }


    public function editRegisterId(){
        $this->conn = new db();
        
        
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        }
        
        $sql = "SELECT * FROM register WHERE id = :id";
        $query = $this->conn->getConn()->prepare($sql);
        $query->execute(['id' => $id]);
        $this->register = $query->fetch();
        }

        public function updateRegister(){
            $this->conn = new db();
            if(isset($_POST['edit'])){
                $name = $_POST['name'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $role = $_POST['role'];
                $id = $_GET['id'];
            
                $sql = 'UPDATE register SET name = :name, lname = :lname, email = :email, role = :role WHERE id = :id';
                $query = $this->conn->getConn()->prepare($sql);
                $query->bindParam('name', $name);
                $query->bindParam('lname', $lname);
                $query->bindParam('email', $email);
                $query->bindParam('role', $role);
                $query->bindParam('id', $id);
                $query->execute();

                header("Location: ../Admin/registerAdmin.php");
            }
        }
}

?>