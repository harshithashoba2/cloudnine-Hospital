<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Cloudnine Hospital</title>
</head>
<body>
    <div class="container-fluid">
        <h2>Cloudnine Shopping Zone</h2>
        <div class="nav">
            <a href="index.php">HOME</a>
            <a href="about.php">ABOUT</a>
            <a href="shop.php">SHOPPING</a>
            <a href="chat.php">COMMUNITY</a>
            <a href="yoga.php">YOGA</a>
           
        </div>
    
    </div> 
    
    <div class="about">
        <table><tr><td>
        <h1 style="color:purple">About Cloudnine</h1>
        <h6 style="color:rgb(236, 77, 104)">At Cloudnine, we believe that a child is life’s<br> greatest gift and pregnancy is one of the<br> most magical experiences nature can offer.</h6>
    </div>
</td><td>
        <p>This gift deserves to be nurtured and cared for, not just at <br>birth, but for the entire duration of your pregnancy. Which<br> is why, to ensure a healthy and happy pregnancy,<br> Cloudnine provides you with world-class medical<br> expertise, state-of-the-art facilities, a space filled with love<br> and laughter and staff dedicated to the holistic well-being<br> of you and your baby.<br>

Having celebrated over 1 Lac births across regions, with a<br> 3000+ strong team, Cloudnine has expanded its reach to <br>multiple facilities across India while continuing to maintain<br> and excel international standards of care and is still going <br>strong with plans to reach every woman and child in India.</p>
</td></tr></table>
    </div>
    <br>
    <br>
    <div class="slideshow-container">
    <div class="mySlides ">
      <div class="numbertext">1 / 6</div>
        <img src="static/images/gallery/1.jpg" style="width:100%">
        
        </div>
      </div>
      
      <div class="mySlides ">
        <div class="numbertext">2 / 6</div>
        <img src="static/images/gallery/2.jpg" style="width:100%">
        
        </div>
      </div>
      
      <div class="mySlides ">
        <div class="numbertext">3 / 6</div>
        <img src="static/images/gallery/3.png" style="width:100%">
        
        </div>
      </div>
      <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src="static/images/gallery/4.jpeg" style="width:100%">
        
        </div>
      </div>
      <div class="mySlides ">
        <div class="numbertext">5 / 6</div>
        <img src="static/images/gallery/4.jpg" style="width:100%">
        
        </div>
      </div>
      <div class="mySlides">
        <div class="numbertext">6 / 6</div>
        <img src="static/images/gallery/6.jpg" style="width:100%">
        
        </div>
      </div>
      <br>
    </div>
    <div style="text-align:center">
         <span class="dot"></span> 
         <span class="dot"></span> 
         <span class="dot"></span> 
         <span class="dot"></span> 
         <span class="dot"></span> 
         <span class="dot"></span> 
    </div>
    <script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 6000); // Change image every 2 seconds
        }
        </script>
<br><br>
   
<div class="about1">
        <table><tr><td>
        <h1 style="color:purple"><u>OUR MISSION</u></h1>
        <p>To be the kind of leader in the space<br> of women and health that India has<br> not witnessed yet, by providing<br> premier quality healthcare to women and children.</p>
</td><td>
<h1 style="color:purple"><u>OUR VISION</u></h1>
        <p>Our aim is the pursuit of excellence in<br> providing the best maternal and<br> neonatal care by setting higher <br>standards for ourselves and striving constantly to achieve them.</p> 
        </td><td>
        <td>
<h1 style="color:purple"><u>OUR QUALITY</u></h1>
        <p>Achieve clinical excellence by <br>inculcating a culture of continuous<br> quality improvement across all<br> domains with the center of focus being patient safety.</p> 
</td></tr></table>
    </div>
<?php
include_once 'footer.php';
?>

</body>
</html>