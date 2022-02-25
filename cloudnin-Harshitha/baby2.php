<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Baby</title>
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
            <img src="static/images/baby/2.jpeg">
            <br>
            <h3>Combo of three wears</h3>
            <h3>Rs.1050</h3>
        </div>
        <br><br>
        <div class="information">
            <div class="similar">

            <h5>3 Similar products</h5>
            <a href="maxi2.php"><img src="static/images/baby/1.jpeg"></a>
            <a href="maxi3.php"><img src="static/images/baby/3.jpeg"></a>
            <a href="maxi4.php"><img src="static/images/baby/4.jpeg"></a>
        </div>
            <br><br>
            <div class="size">
            <h4>Sizes</h4><br>
            <button>0-3months</button> <button>3-6months</button>  <button>6-9months</button>  <button>9-12months</button>  <button>12-15months</button>
        </div>
        <div class="description">
            <h4>Description</h4>
            <p><ul>
                <li>100% Pure Cotton. Meets International quality standards</li>
                <li>Skin Friendly - No polyester blend, Soft fabrics well suited for babies</li>
                <li>Assorted pieces will be sent. Designs will vary time to time as we keep updating our inventory. We ensure that only the best prints will be dispatched.</li>
                <li>Well suited to use with diaper, Press button which snaps at diaper line.</li>
               </p></ul>
        </div>
        </div>
        <br><br>
        <button class="btn btn-warning"><a href="pay" style="color: black;"><b>Buy Now</b></a></button>
    </div>
    <?php
include_once 'footer.php';
?>
</body>
</html>