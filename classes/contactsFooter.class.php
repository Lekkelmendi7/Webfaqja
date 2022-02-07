<?php 
class ContactsF{  
    private $conn;
    private $query;
    private $contacts;
    private $contact;
    
    
    public function fetchContacts(){
        $this->conn = new db();
        $this->query = $this->conn->getConn()->query('SELECT * FROM contacts');
        $this->contacts = $this->query->fetchAll();
    }

    public function echoContact(){
        foreach($this->contacts as $contact){
            echo"
            <h2>Adresa</h2>
            <div class='content'>
              <div class='place'>
                <span class='fas fa-map-marker-alt'></span>
                <span class='text'>{$contact['Adresa']}</span>
              </div>
              <div class='phone'>
                <span class='fas fa-phone-alt'></span>
                <span class='text'>{$contact['Nrkontaktit']}</span>
              </div>
              <div class='email'>
                <span class='fas fa-envelope'></span>
                <span class='text'>{$contact['email']}</span>
              </div>
            </div>";
        }
    }
}

?>