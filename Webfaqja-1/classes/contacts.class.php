<?php 
class Contacts{  
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
              <div class='contact'>
                <div class='contact_one_box'>
                  <h3>Adresa</h3>
                  <p><i class='fas fa-map-marker-alt'></i><br>{$contact['Adresa']}</p>
                </div>
               <div class='contact_one_box'>
                  <h3>Numri i Kontaktit</h3>
                  <p><i class='fas fa-phone-alt'></i><br>{$contact['Nrkontaktit']}</p>
                </div>
               <div class='contact_one_box'>
              <h3>Email</h3>
                 <p><i class='fas fa-envelope'></i><br>{$contact['email']}</p>
              </div>
            </div>";
        }
    }
}

?>