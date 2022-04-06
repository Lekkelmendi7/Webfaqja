<?php 
class ProductAdminA{  
    private $conn;
    private $query;
    private $products;
    public $product;
    
    
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
            <tr>
              <td><img style='width:80px; height:80;' src='../img/upload/{$imageurl}''></td>
              <td>{$product['titull']}</td>
              <td>{$product['price']}</td>
              <td>{$product['pershk']}</td>
              <td><a href='editProductAdmin.php?id={$id}'><button class='edit'>Edit</button></a></a><a href='../action/delete.productAdmin.php?id={$id}'><button class='delete'>Delete</button></a></td>
             </tr>";
        }
    }


    public function editProductId(){
        $this->conn = new db();
        
        
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        }
        
        $sql = "SELECT * FROM product WHERE id = :id";
        $query = $this->conn->getConn()->prepare($sql);
        $query->execute(['id' => $id]);
        $this->product = $query->fetch();
        }

        public function updateProducts(){
            $this->conn = new db();
            if(isset($_POST['edit'])){
                $titull= $_POST['titull'];
                $price = $_POST['price'];
                $pershk = $_POST['pershk'];
                $id = $_GET['id'];
            
                $sql = 'UPDATE product SET titull = :titull, price = :price, pershk = :pershk WHERE id = :id';
                $query = $this->conn->getConn()->prepare($sql);
                $query->bindParam('titull', $titull);
                $query->bindParam('price', $price);
                $query->bindParam('pershk', $pershk);
                $query->bindParam('id', $id);
                $query->execute();

                header("Location: ../Admin/produktetAdmin.php");
            }
        }

}


?>



