<?php 
class RegisterAdmin{  
    private $conn;
    private $query;
    private $registers;
    private $register;
    
    
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
              <td><a href='editRegisterAdmin.php'><button class='edit'>Edit</button></a><a href='../action/delete.registerAdmin.php?id={$id}'><button class='delete'>Delete</button></a></td>
            </tr>";
        }
    }
}