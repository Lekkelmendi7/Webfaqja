<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
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
    width: 80%;
    margin: auto;
}

.class td, .class th {
    border: 1px solid #ddd;
    padding: 8px;
    width: 33%;
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
    </style>
</head>
<body>

<header>
   <?php include_once '../include/headerAdmin.php'?>
</header>

         <h1 class="title">Lista qe kane Kontaktuar</h1>
<table class="class">
  <tr>
    <th>Emri</th>
    <th>Mbiemri</th>
    <th>Mesazhi</th>
    <th>Fshije</th>
  </tr>
  <tr>
    <td>Enes</td>
    <td>Hetemi</td>
    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores soluta delectus repellat, fugit, eius libero modi commodi natus est aspernatur harum temporibus maxime dolor accusamus laudantium nam distinctio laboriosam, dolorum sed et. Laboriosam repellendus laborum obcaecati officiis vitae totam sed beatae repellat dolorum sunt! Minima ipsa quia architecto molestiae quam.</td>
    <td><button class="delete">Delete</button></td>
  </tr>
  <tr>
    <td>Enes</td>
    <td>Hetemi</td>
    <td>Lorem ipsum dolor sit amet.</td>
    <td><button class="delete">Delete</button></td>
  </tr>
  <tr>
    <td>Enes</td>
    <td>Hetemi</td>
    <td>Lorem ipsum dolor sit amet.</td>
    <td><button class="delete">Delete</button></td>
  </tr>
  <tr>
    <td>Enes</td>
    <td>Hetemi</td>
    <td>Lorem ipsum dolor sit amet.</td>
    <td><button class="delete">Delete</button></td>
  </tr>
  <tr>
    <td>Enes</td>
    <td>Hetemi</td>
    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam dolor id quo veniam maxime, reprehenderit nihil doloribus tempore ea, illum corrupti cum esse dignissimos magni error perferendis ut assumenda pariatur facere architecto? Maiores saepe dolor nulla a quisquam consectetur, architecto, ab assumenda autem cumque quae at animi iste aliquid iure debitis natus laudantium cum exercitationem molestiae! Recusandae esse tempora alias amet temporibus laudantium optio dignissimos, aut suscipit id cum rerum omnis facere praesentium illo repellendus cumque mollitia accusamus harum quod necessitatibus assumenda vero. Quibusdam eveniet suscipit aperiam corrupti, rem autem quis doloremque beatae eius laudantium voluptatum voluptatem, est aliquam similique.</td>
    <td><button class="delete">Delete</button></td>
  </tr>
  <tr>
    <td>Enes</td>
    <td>Hetemi</td>
    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam dolor id quo veniam maxime, reprehenderit nihil doloribus tempore ea, illum corrupti cum esse dignissimos magni error perferendis ut assumenda pariatur facere architecto? Maiores saepe dolor nulla a quisquam consectetur, architecto, ab assumenda autem cumque quae at animi iste aliquid iure debitis natus laudantium cum exercitationem molestiae! Recusandae esse tempora alias amet temporibus laudantium optio dignissimos, aut suscipit id cum rerum omnis facere praesentium illo repellendus cumque mollitia accusamus harum quod necessitatibus assumenda vero. Quibusdam eveniet suscipit aperiam corrupti, rem autem quis doloremque beatae eius laudantium voluptatum voluptatem, est aliquam similique.</td>
    <td><button class="delete">Delete</button></td>
  </tr>
</table>

<div style="text-align: center; padding-top: 50px;">
    <span class="credit" style="text-align: center;">Ndertuar nga <a href="https://www.google.com" style="color: blue; text-decoration: none;">Enes Hetemi</a></span>
</div>
</body>
</html>