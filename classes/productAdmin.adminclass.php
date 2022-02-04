<?php 
class ProductAdminA{  
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
            <tr>
              <td><img style='width:80px; height:80;' src='../img/Laptophp.png''></td>
              <td>{$product['titull']}</td>
              <td>{$product['price']}</td>
              <td>{$product['pershk']}</td>
              <td><a href='editAdmin.php'><button class='edit'>Edit</button></a><button class='delete'>Delete</button></td>
             </tr>";
        }
    }

}


?>



