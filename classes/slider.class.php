<?php 
class Slider{  
    private $conn;
    private $query;
    private $sliders;
    private $slider;
    
    
    public function fetchSliders(){
        $this->conn = new db();
        $this->query = $this->conn->getConn()->query('SELECT * FROM slider');
        $this->sliders = $this->query->fetchAll();
    }

    public function echoSliders(){
        foreach($this->sliders as $slider){
            $imageurl = $slider['image'];
            echo"
            <div class='mySlides1'>
              <img src='img/slider/{$imageurl}'>
            </div>
            ";
        }
    }

}


?>