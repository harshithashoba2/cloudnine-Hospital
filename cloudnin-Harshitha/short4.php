<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Maxi</title>
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
            <img src="static/images/short/4.jpg">
            <br>
            <h3>Multicolour Maternity wear
            </h3>
            <h3>Rs.750</h3>
        </div>
        <br><br>
        <div class="information">
            <div class="similar">

            <h5>3 Similar products</h5>
            <a href="maxi2.php"><img src="static/images/short/2.png"></a>
            <a href="maxi3.php"><img src="static/images/short/3.jpg"></a>
            <a href="maxi4.php"><img src="static/images/short/1.jpg"></a>
        </div>
            <br><br>
            <div class="size">
            <h4>Sizes</h4><br>
            <button>S</button> <button>M</button>  <button>L</button>  <button>XL</button>  <button>XXL</button>
        </div>
        <div class="description">
            <h4>Description</h4>
            <p><ul>
                <li>Care Instructions: Machine Wash</li>
                <li>Fit Type: Regular</li>
                <li> Style: Fit & Double Flare Dress</li>
                <li>Fabri-Poly Crepe</li>
                    <li>Neck Style: Round Neck</li>
                <li>Be ready with the Elegant and awesome look for office, Party, casual and regular wears</li>
                <li>Sleeve Type: Cap Sleeve; Occasion Type: Casual</p></ul>
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