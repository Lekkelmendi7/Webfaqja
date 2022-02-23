<?php
include_once '../classes/sliderAdmin.class.php';
include_once '../classes/database.class.php';


 $image = $_FILES['image'];

 $slider = new SliderAdmin($image);
 
 if(isset($_POST['submit'])){
     $slider->UploadImageSlider();
     $slider->doSlider();
 }
?>