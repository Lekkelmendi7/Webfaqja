<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin - Techecom</title>

    <style>
.title{
    text-align: center;
    padding-top: 60px;
    font-family: Arial, Helvetica, sans-serif;
    color: blue;
}
.class {
    padding: 20px;
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

.class td, .class th {
    border: 1px solid #ddd;
    padding: 8px;
    width: 20%;
}

.class tr:nth-child(even){
    background-color: #f2f2f2;
}

.class tr:hover {
    background-color: #ddd;
}

.class th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: blue;
    color: white;
}
.delete{
    background-color: red;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    width: 70px;
    height: 30px;
}
.edit{
    background-color: green;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    width: 70px;
    height: 30px;
}
.create{
    background-color: blue;
    color: white;
    margin-top:60px;
    margin-left: 30px;
    border-radius: 5px;
    cursor: pointer;
    width: 80px;
    height: 40px;
}
    </style>
</head>
<body>

<header>
<section>
            
            <div id="container">
                
                <div id="shopName"><a href="#"> <b>Admin Panel</b> TechEcom </a></div>
                    
        
                <div class="navbar">
                
                    <input type="checkbox" id="btn-menu" class="hidden">
                        <label for="btn-menu" class="icon-menu">
                    <i class="fa fa-bars bars"></i>
                    
                    </label>
                    <div class="navbar_div">
                        
                        <ul class="navbar_div_ul">
                            
                        <li class="navbar_div_li"><a href="Mainpage.html">Ballina</a></li>
                        <li class="navbar_div_li"><a href="produktetAdmin.php">Produktet</a></li>
                        <li class="navbar_div_li"><a href="registerAdmin.php">Regjistrimet</a></li>
                        <li class="navbar_div_li"><a href="contactAdmin.php">Kontaktimet</a></li>
                         
                        </ul>     
                </div>
            </div>
                </div>
        
            </section>
         </header>
<a href="createProdukt.php">
    <button class="create">Create</button>
</a>
         <h1 class="title">Lista qe kane Kontaktuar</h1>
<table class="class">
  <tr>
    <th>Foto</th>
    <th>Titulli</th>
    <th>Qmimi</th>
    <th>Pershkrimi</th>
    <th>Veprim</th>
  </tr>
  <tr>
    <td><img style="width:80px; height:80;" src="img/Laptopdell.jpg"></td>
    <td>Llaptop Dell</td>
    <td>$800</td>
    <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem obcaecati temporibus blanditiis. At laudantium facere magnam perferendis neque tempora error voluptates magni reprehenderit accusamus, quod ipsa iusto corporis, molestias dolorem aperiam in nemo, aspernatur numquam illo ut assumenda culpa esse. Officia ullam velit laborum accusamus assumenda nam earum quos perferendis.</td>
    <td><button class="edit">Edit</button><button class="delete">Delete</button></td>
  </tr>
  <tr>
    <td><img style="width:80px; height:80;" src="img/Laptophp.png"></td>
    <td>Llaptop Hp</td>
    <td>$600</td>
    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus facere cum nihil, excepturi enim ipsam eius unde sequi expedita consequuntur?</td>
    <td><button class="edit">Edit</button><button class="delete">Delete</button></td>
  </tr>
</table>

<div style="text-align: center; padding-top: 50px;">
    <span class="credit" style="text-align: center;">Ndertuar nga <a href="https://www.google.com" style="color: blue; text-decoration: none;">Enes Hetemi</a></span>
</div>
</body>
</html>