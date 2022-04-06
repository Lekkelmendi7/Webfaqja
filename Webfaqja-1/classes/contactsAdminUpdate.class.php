<?php 
class ContactUpdate{  
    private $conn;
    private $query;
    private $contactsU;
    public $contactU;
    
    
    public function fetchContactsU(){
        $this->conn = new db();
        $this->query = $this->conn->getConn()->query('SELECT * FROM contacts');
        $this->contactsU = $this->query->fetchAll();
    }

    public function echoContact(){
        foreach($this->contactsU as $contactU){
            $id = $contactU['id'];
            echo"
            <tr>
              <td>{$contactU['Adresa']}</td>
              <td>{$contactU['Nrkontaktit']}</td>
              <td>{$contactU['email']}</td>
              <td><a href='../Admin/editContacts.php?id={$id}'><button type='submit' class='edit'>Edit</button></a></td>
            </tr>";
        }
    }


    public function editContactId(){
        $this->conn = new db();
        
        
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        }
        
        $sql = "SELECT * FROM contacts WHERE id = :id";
        $query = $this->conn->getConn()->prepare($sql);
        $query->execute(['id' => $id]);
        $this->contactU = $query->fetch();
        }

        public function updateContacts(){
            $this->conn = new db();
            if(isset($_POST['edit'])){
                $Adresa= $_POST['Adresa'];
                $Nrkontaktit = $_POST['Nrkontaktit'];
                $email = $_POST['email'];
                $id = $_GET['id'];
            
                $sql = 'UPDATE contacts SET Adresa = :Adresa, Nrkontaktit = :Nrkontaktit, email = :email WHERE id = :id';
                $query = $this->conn->getConn()->prepare($sql);
                $query->bindParam('Adresa', $Adresa);
                $query->bindParam('Nrkontaktit', $Nrkontaktit);
                $query->bindParam('email', $email);
                $query->bindParam('id', $id);
                $query->execute();

                header("Location: ../Admin/contactAdmin.php");
            }
        }
}

?>