<?php 
class SliderAdminA{  
    private $conn;
    private $query;
    private $sliders;
    public $slider;
    
    
    public function fetchSliders(){
        $this->conn = new db();
        $this->query = $this->conn->getConn()->query('SELECT * FROM slider');
        $this->sliders = $this->query->fetchAll();
    }

    public function echoSliders(){
        foreach($this->sliders as $slider){
            $id = $slider['id'];
            $imageurl = $slider['image'];
            echo"
            <tr>
              <td><img style='width:100px; height:80px;' src='../img/slider/{$imageurl}''></td>
              <td><a href='../action/delete.sliderAdmin.php?id={$id}'><button class='delete'>Delete</button></a></td>
             </tr>";
        }
    }

}


?>



