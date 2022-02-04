<?php 
class Product{  
    private $conn;
    private $query;
    private $products;
    private $product;
    
    
    public function fetchProducts(){
        $this->conn = new db();
        $this->query = $this->conn->getConn()->query('SELECT * FROM product');
        $this->products = $this->query->fetchAll();
    }

    public function echoProducts(){
        foreach($this->products as $product){
            echo"
            <section class='product'>
            <div class='product1'>
            <div class='card'>
               <img src='img/Laptophp.png'>
               <h1>{$product['titull']}</h1>
               <p class='price'>{$product['price']}</p>
               <p class='text'>{$product['pershk']}</p>
               <input type='number' class='quantity' name='quantity' min='1' value='1'>
               <p><button>Shto ne Shporte</button></p>
            </div> 
            </div>
            </section>
            ";
        }
    }

}


?>



