<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloudnine Yoga</title>
    <link rel="stylesheet" href="static/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="static/css/chat.css">
    <style>
        .video
        {
            border: 5px ridge;
        }
           .container
           {
             display: flex;
             flex-direction: row;
             justify-content: space-between;
           }

    </style>
</head>
<body>
<div class="container-fluid">
    <h2>Cloudnine Yoga</h2>
    <div class="nav">
        <a href="index.php">HOME</a>
        <a href="about.php">ABOUT</a>
        <a href="shop.php">SHOPPING</a>
        <a href="chat.php">COMMUNITY</a>
        <a href="yoga.php">YOGA</a>
       
       
    </div>


</div>  
<br><br>

<h3>Welcome to Week2!!</h3><br>
       <div class="container">
        <b>Yoga:</b>
           <div class="video" id="borderimg1">
            
            <iframe width="400" height="305" src="https://www.youtube.com/embed/3VHnnpBJVsk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      
               
             
           </div>
           <b>Tips:</b>
           <div class="video">
            <iframe width="400" height="305" src="https://www.youtube.com/embed/szA9AiDxvJ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>
       </div>
       <br>
       <?php
include_once 'footer.php';
?>
</body>
</html>