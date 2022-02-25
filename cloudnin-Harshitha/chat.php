<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Cloudnine Shopping</title>
    <style>
        .animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
  font-size: 190px;
  
  }


@keyframes textclip {
  to {
    background-position: 200% center;
  }
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
    <br>
    <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3 class="animate-charcter ">COMING SOON</h3>
          </div>
        </div>
      </div>

<?php
include_once 'footer.php';
?>
</body>
</html>