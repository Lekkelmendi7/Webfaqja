<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Rreth Nesh</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="about_us.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/navbar.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="about-us.js">
        </script>
        
    </head>
    <body>
       <header>
    <?php include_once 'include/header.php';?>
</header>
    <main>
      <div class="themain">
        <div class="maintxt">
          <center><u>Rreth Kompanise</u></center>
        </div>
        <div class="slideshow-container">

         
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="photos\photo2.jpg" style="width: 650px; height: 400px; margin-top: 40px; margin-left: 40px;">
            <div class="text">Slide One</div>
          </div>
        
          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="photos\aksesore.jpg" style="width: 650px; height: 400px;margin-top: 40px; margin-left:40px">
            <div class="text">Slide Two</div>
          </div>
        
          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="photos\photo4.jpg" style="width: 650px; height: 400px;margin-top: 40px; margin-left: 40px;">
            <div class="text">Slide Three</div>
          </div>
        
      
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        
       
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
  
        <img src="photos/kompania.jpg" id="mainimg">
        <div id="title">
          <h4><u><b>HISTORIA</b></u></h4>
        </div> 
        <div id="text">
            <p>
              Mir?? se vini n?? dyqanin TechEcom, dyqani juaj num??r nj?? p??r t?? gjitha produktet elektronike.<br> Ne jemi t?? p??rkushtuar t'ju ofrojm?? m?? t?? mir??n e produktit, me fokus n?? besueshm??ri, sh??rbimi<br> ndaj klientit dhe cilesi unike.
              E themeluar n?? vitin 2010 nga Enes Hetemi dhe bashkpuntori i tij<br> Leke Kelmendi. TechEcom ka b??r?? nj?? rrug?? t?? gjat?? nga fillimet e tij n?? nj?? zyre te sht??pis??.<br> Kur Enes Hetemi filloi p??r her?? t?? par??, pasioni i tij p??r ndihmen e klienteve, e shtyu at?? t?? b??j?? <br>k??rkime intensive dhe i dha atij shtys?? p??r ta kthyer pun??n e palodhur n?? nj?? dyqan online.<br> Ne tani u sh??rbejm?? klient??ve n?? t?? gjith?? vendin psh, ne Kosove, Maqedoni, Shqiperi,<br> e shume vende tjera te botes dhe jemi t?? entuziazmuar q?? jemi pjes?? e tregtise <br>se produkteve elektronike.
            </p>
          </div>
          <div id="title1">
            <h4><u><b>DETYRA JONE</b></u></h4>
          </div> 
          <div id="text1">
          <p>Ne si kompani e kemi per detyre qe te ofrojme <br>keto sherbime si blerjen/shitjen e produkteve <br>elektronike, transportimin e mallrave te porositura <br>nga shume kliente dhe servisimin <br>e produkteve te demtuara.</p>
          </div>
          <div id="title2">
            <h4><u><b>VIZIONI</b></u></h4>
          </div> 
          <div id="text2">
          <p>Ne si kompani mundohemi te lehtesojme <br>jeten e klienteve tane, me produkte me <br>kualitative ne mbare boten si dhe me<br> nje cmim me efikas.</p>
          </div>
          <div class="center0">
            <div class="stars">
              <input type="radio" id="five" name="rate" value="5">
              <label for="five"></label>
              <input type="radio" id="four" name="rate" value="4">
              <label for="four"></label>
              <input type="radio" id="three" name="rate" value="3">
              <label for="three"></label>
              <input type="radio" id="two" name="rate" value="2">
              <label for="two"></label>
              <input type="radio" id="one" name="rate" value="1">
              <label for="one"></label>
              <span class="result"></span>   
            </div>
         </div>
         <div id="paragraph">
          <p>Jepni nje vleresim per kompanine tone</p>
         </div>
         <form action="Rreth Nesh.html">
          <textarea type="text" class="textarea" placeholder="Jep me shume detaje rreth vlersimit... " id="txtName" ></textarea>
              <input type="submit" onclick=" ValidateTextBox()" id="btnCheck"  value="Kliko" class="button-click">
              <input type="submit"  onclick="clearElements()" id="btnCheck" value="Fshij" class="button-delete">
            </form>
            </div>
    </main>
    <footer>
    <?php include_once 'include/footer.php';?>     
</footer>
        <div class="scroll-bar" ></div>
        
        
        <script src="https://kit.fontawesome.com/3b1ca000cb.js"></script>
      
    </body>
</html>