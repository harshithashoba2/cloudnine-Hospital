<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Cloudnine Shopping</title>
    
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
    <div class="menu">
      <marquee direction="left">
      <a href="maxi.php"><img src="static/images/maxi.jpg" width="200" height="200"></a>
      <a href="nightwear.php"><img src="static/images/nightwear.jpeg" width="200" height="200"></a>
      <a href="baby.php"><img src="static/images/baby.jpeg" width="200" height="200"></a>
      <a href="short.php"><img src="static/images/short.jpg" width="200" height="200"></a>
      <a href="toys.php"><img src="static/images/toys.jpeg" width="200" height="200"></a>
    </marquee>
    </div>
    <div class="container">

    
    <div class="slideshow-container">
      <div class="mySlides ">
        <div class="numbertext">1 / 6</div>
        <a href="maxi.php"><img src="static/images/shop/1.jpg" style="width:100%"></a>
          
        </div>
        
        <div class="mySlides ">
          <div class="numbertext">2 / 6</div>
          <a href="nightwear.php"><img src="static/images/shop/2.jpg" style="width:100%"></a>
         
        </div>
        
        <div class="mySlides ">
          <div class="numbertext">3 / 6</div>
          <a href="short.php"><img src="static/images/shop/3.jpg" style="width:100%"></a>
          
        </div>
        <div class="mySlides">
          <div class="numbertext">4 / 6</div>
          <a href="toys.php"> <img src="static/images/shop/4.jpg" style="width:100%"></a>
          
        </div>
        <div class="mySlides ">
          <div class="numbertext">5 / 6</div>
          <a href="short.php"><img src="static/images/shop/5.jpg" style="width:100%"></a>
         
        </div>
        <div class="mySlides">
          <div class="numbertext">6 / 6</div>
          <a href="baby.php"> <img src="static/images/shop/6.jpg" style="width:100%"></a>
          
          </div>
   
        <br>
    </div>
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
           <br>
           <div class="trending"> 
             <h3 style="color: rgb(216, 41, 70);">Trending Now</h3><i class='fas fa-crown'></i>
             <div class="images">
             <img src="static/images/trending/1.jpg">
            </div>
            <div class="images">
              <img src="static/images/trending/2.jpg">
            </div>
            <div class="images">
             <img src="static/images/trending/3.jpg" >
             </div>
           </div>
           <br>
           <div class="container1">
            <div class="card " style="width:350px">
                <img class="card-img-top" src="static/images/maxi/1.jpeg" >
                <div class="card-body">
                    <h4 class="card-title">Stylish and Trendy Maxi</h4>
                    <p class="card-text"><del>Rs.10,000/-</del> Rs.8000/-</p>
                    <a href="maxi1.php" class="btn btn-primary">View</a>
                </div>
            </div>
            <div class="card " style="width:350px">
             <img class="card-img-top" src="static/images/maxi/2.jpeg" >
             <div class="card-body">
                 <h4 class="card-title">One-shoulder Maternity wear</h4>
                 <p class="card-text">Rs.10,000/-</p>
                 <a href="maxi2.php" class="btn btn-primary">View</a>
             </div>
             
         </div>
         <div class="card " style="width:350px">
             <img class="card-img-top" src="static/images/maxi/3.jpeg">
             <div class="card-body">
                 <h4 class="card-title">Comfortable Maxi Dress</h4>
                 <p class="card-text">Rs.800/-</p>
                 <a href="maxi3.php" class="btn btn-primary">View</a>
             </div>
        </div>
        
        <div class="card " style="width:350px">
         <img class="card-img-top" src="static/images/maxi/4.jpeg" >
         
         <div class="card-body">
             <h4 class="card-title">Half Shoulder Maternity wear</h4>
             <p class="card-text">Rs.1000/-</p>
             <a href="maxi4.php" class="btn btn-primary">View</a>
         </div>
     </div>
     <div class="card " style="width:350px">
         <img class="card-img-top" src="static/images/short/1.jpg" >
         
         <div class="card-body">
             <h4 class="card-title">Greeny Maternity Short Dress</h4>
             <p class="card-text">Rs.500/-</p>
             <a href="short1.php" class="btn btn-primary">View</a>
         </div>
     </div>
     <div class="card " style="width:350px">
      <img class="card-img-top" src="static/images/short/2.png" >
      
      <div class="card-body">
          <h4 class="card-title">Black Frill short Dress</h4>
          <p class="card-text"><del>Rs.1000/-</del> Rs.650/-</p>
          <a href="short2.php" class="btn btn-primary">View</a>
      </div>
  </div>
  <div class="card " style="width:350px">
    <img class="card-img-top" src="static/images/short/3.jpg" >
    
    <div class="card-body">
        <h4 class="card-title">Half Shoulder short Dress</h4>
        <p class="card-text">Rs.700/-</p>
        <a href="short3.php" class="btn btn-primary">View</a>
    </div>
</div>
<div class="card " style="width:350px">
  <img class="card-img-top" src="static/images/short/4.jpg" >
  
  <div class="card-body">
      <h4 class="card-title">Multicolour Maternity wear</h4>
      <p class="card-text">Rs.750/-</p>
      <a href="short4.php" class="btn btn-primary">View</a>
  </div>
</div>
<div class="card " style="width:350px">
  <img class="card-img-top" src="static/images/toys/1.jpg" >
  
  <div class="card-body">
      <h4 class="card-title">Kids Multicolour Train</h4>
      <p class="card-text">Rs.550/-</p>
      <a href="toy1.php" class="btn btn-primary">View</a>
  </div>
</div>
<div class="card " style="width:350px">
  <img class="card-img-top" src="static/images/toys/2.jpg" >
  
  <div class="card-body">
      <h4 class="card-title">Kids Drums</h4>
      <p class="card-text">Rs.450/-</p>
      <a href="toy2.php" class="btn btn-primary">View</a>
  </div>
</div>
<div class="card " style="width:350px">
  <img class="card-img-top" src="static/images/toys/3.jpg" >
  
  <div class="card-body">
      <h4 class="card-title">
        Multicolour Building</h4>
      <p class="card-text">Rs.750/-</p>
      <a href="toy3.php" class="btn btn-primary">View</a>
  </div>
</div>
<div class="card " style="width:350px">
  <img class="card-img-top" src="static/images/toys/4.jpg" >
  
  <div class="card-body">
      <h4 class="card-title">JCB Excavator Truck Automobile Vehicle 4CH</h4>
      <p class="card-text"><del>Rs.1200/-</del> Rs.950/-</p>
      <a href="toy4.php" class="btn btn-primary">View</a>
  </div>
</div>
<div class="card " style="width:350px">
  <img class="card-img-top" src="static/images/nightwear/1.jpg" >
  
  <div class="card-body">
      <h4 class="card-title">Blue Cotton Night Wear</h4>
      <p class="card-text">Rs.550/-</p>
      <a href="nw1.php" class="btn btn-primary">View</a>
  </div>
</div>
<div class="card " style="width:350px">
  <img class="card-img-top" src="static/images/nightwear/2.png" >
  
  <div class="card-body">
      <h4 class="card-title">Black Maternity Night Wear</h4>
      <p class="card-text"><del>Rs.800/-</del>Rs.650/-</p>
      <a href="nw2.php" class="btn btn-primary">View</a>
  </div>
</div>
<div class="card " style="width:350px">
  <img class="card-img-top" src="static/images/nightwear/3.jpeg" >
  
  <div class="card-body">
      <h4 class="card-title">Grey with Black comfortable Night wear</h4>
      <p class="card-text">Rs.750/-</p>
      <a href="nw3.php" class="btn btn-primary">View</a>
  </div>
</div>
<div class="card " style="width:350px">
  <img class="card-img-top" src="static/images/nightwear/4.jpg" >
  
  <div class="card-body">
      <h4 class="card-title">Comfortable cotton Night Wear</h4>
      <p class="card-text">Rs.650/-</p>
      <a href="nw4.php" class="btn btn-primary">View</a>
  </div>
</div>
<div class="card " style="width:350px">
  <img class="card-img-top" src="static/images/baby/1.jpeg" >
  
  <div class="card-body">
      <h4 class="card-title">Blue colour New born wear</h4>
      <p class="card-text"><del>Rs.500/-</del> Rs.350/-</p>
      <a href="baby1.php" class="btn btn-primary">View</a>
  </div>
</div>
<div class="card " style="width:350px">
  <img class="card-img-top" src="static/images/baby/2.jpeg" >
  
  <div class="card-body">
      <h4 class="card-title">Combo of three wears</h4>
      <p class="card-text">Rs.1050/-</p>
      <a href="baby2.php" class="btn btn-primary">View</a>
  </div>
</div>
<div class="card " style="width:350px">
  <img class="card-img-top" src="static/images/baby/3.jpeg" >
  
  <div class="card-body">
      <h4 class="card-title">Babies comfortable clothing</h4>
      <p class="card-text"><del>Rs.1500/-</del> Rs.1250/-</p>
      <a href="baby3.php" class="btn btn-primary">View</a>
  </div>
</div>
<div class="card " style="width:350px">
  <img class="card-img-top" src="static/images/baby/4.jpeg" >
  
  <div class="card-body">
      <h4 class="card-title">Babies complete wear</h4>
      <p class="card-text">Rs.1350/-</p>
      <a href="baby4.php" class="btn btn-primary">View</a>
  </div>
</div>
        </div>

<br>
<?php
include_once 'footer.php';
?>

</body>
</html>