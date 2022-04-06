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
            $id = $product['id'];
            $imageurl = $product['image'];
            echo"
            <section class='product'>
            <div class='product1'>
            <div class='card'>
               <img src='img/upload/{$imageurl}'>
               <h1>{$product['titull']}</h1>
               <p class='price'>{$product['price']}</p>
               <p class='text'>{$product['pershk']}</p>
               <p><a href='viewProduct.php?id={$id}'><button>Shiko Produktin</button></a></p>
            </div> 
            </div>
            </section>
            ";
        }
    }

}


?>



