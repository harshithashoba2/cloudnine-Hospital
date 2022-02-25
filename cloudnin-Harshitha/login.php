<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="static/css/login.css">
    <link rel="stylesheet" href="static/css/style.css">
    
    <title>Login</title>
    
</head>
<body>
    <div class="container-fluid">
        <h2>Cloudnine Hospital</h2>
        <div class="nav">
            <a href="index.php">HOME</a>
            <a href="about.php">ABOUT</a>
            <a href="shop.php">SHOPPING</a>
            <a href="chat.php">COMMUNITY</a>
            <a href="yoga.php">YOGA</a>
           
        </div>
    
    </div>  
 <div class="container">
    <div class="wrapper">
        <div class="title">LOGIN</div>
   
       <form action="logindb.php" method="POST">
           <div class="row">
            <i class="fa fa-user icon"></i>
            <input type="email" class="input" name="email" placeholder="Email" required>
           </div>
           <div class="row">
            <i class="fa fa-lock icon"></i>
            <input type="password" class="input" name="pass"  placeholder="Password" required>
           </div>
           <div class="pass">
               <a href="#">Forgot Password?</a>
           </div>
           <div class="row button">
               <input type="submit" name="submit" value="Login">
           </div>
           <div class="signup">
            New user? <a href="signup.php">Signup now</a>
        
           </div>
           
       </form>
    </div>  
</div>
<br>
<?php
include_once 'footer.php';
?>
</body>
</html>