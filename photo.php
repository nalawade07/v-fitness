<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="photo.css">
    <!-- font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>



<?php 
    include "header.php";
?>


<style>
<?php
include "photo.css";
?>
</style>

   
 <div class="gallery-content">
     
<div class="name"><h1>Gallery</h1></div>

<div class="card-bg">
    <div class="gallery">

        <div class="img">
            <img src="all.jpg">
        </div>

        <div class="img">
            <video src="production ID_4761698.mp4" autoplay></video>
        </div>

        <div class="img">
            <img src="background4.jpg">
        </div>

        <div class="img">
            <img src="background.jfif">
        </div>

        <div class="img">
            <img src="background9.jpg">
        </div>

        <div class="img">
            <img src="background3.jpg">
        </div>
        <div class="img">
            <video src="pexels-tima-miroshnichenko-5319750.mp4" autoplay></video>
        </div>

        <div class="img">
            <img src="vi.jpg">
        </div>

        <div class="img">
            <img src="the rock.jpg">
        </div>

        <div class="img">
            <img src="giphy.gif">
        </div>

        <div class="img">
            <img src="trainer.jpg">
        </div>

        <div class="img">
            <img src="sahil.jfif">
        </div>

   </div> 
</div>

</div>

<?php

include "footer.php";

?>



<script>


var nav = document.getElementById('navbar');
    // var menu = document.getElementById('menu');
     function menu(){
        navbar.classList.toggle('active');
     }
    


</script>


</body>
</html>