<?php 
class ContactAdmin{  
    private $conn;
    private $query;
    private $contacts;
    private $contact;
    
    
    public function fetchContacts(){
        $this->conn = new db();
        $this->query = $this->conn->getConn()->query('SELECT * FROM contact');
        $this->contacts = $this->query->fetchAll();
    }

    public function echoContacts(){
        foreach($this->contacts as $contact){
            $id = $contact['id'];
            echo"
            <tr>
              <td>{$contact['name']}</td>
              <td>{$contact['lname']}</td>
              <td>{$contact['subject']}</td>
              <td><a href='../action/delete.contactAdmin.php?id={$id}'><button type='submit' class='delete'>Delete</button></a></td>
            </tr>";
        }
    }
}

?>