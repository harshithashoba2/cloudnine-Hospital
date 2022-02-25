<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Toys</title>
    <style>
       .btn
       {
           margin-left: 50%;
       }
            
        
    </style>
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
    <br><br>
    <div class="container">
        <div class="images">
            <img src="static/images/toys/1.jpg">
            <br>
            <h3>Kids Multicolour Train
            </h3>
            <h3>Rs.550</h3>
        </div>
        <br><br>
        <div class="information">
            <div class="similar">

            <h5>3 Similar products</h5>
            <a href="maxi2.php"><img src="static/images/toys/2.jpg"></a>
            <a href="maxi3.php"><img src="static/images/toys/3.jpg"></a>
            <a href="maxi4.php"><img src="static/images/toys/4.jpg"></a>
        </div>
            <br><br>
            
        <div class="description">
            <h4>Description</h4>
            <p><ul>
               <li>This toy is available with light, music, and sound.</li>
               <li>This toy needs 3-AA size batteries for operation or working, which are not included in a pack.</li>
               <li>This toy contains transparent plastic, gear mechanism. Due to this children take knowledge about the mechanism of the gear and entertainment of the toy.</li> 
               <li>There are 2 modes in this toy. When you drag a switch for the first-time toy will be lighted, and drag a switch again that time toy will be start light, sound, and music.</li>
               <li>This toy has an automatic function also. When the toy touches any object it changes the direction automatically.</li>
            
            
            </ul>
        </div>
        </div>
        <br><br>
        <button class="btn btn-warning"><a href="pay" style="color: black;"><b>Buy Now</b></a></button>
    </div>
    <br>
    <?php
include_once 'footer.php';
?>
</body>
</html>