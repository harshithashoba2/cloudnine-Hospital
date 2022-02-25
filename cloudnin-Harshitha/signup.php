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
    <script>
        function validate()
        {
            var pass = document.getElementById("pass").value;
            var cpass = document.getElementById("cpass").value;
            if(pass != cpass)
            {
                alert("Password and Confirm Password mismatch")
                return false;

            }
            
        }
       

    </script>
    
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
        <div class="title">REGISTER</div>
   
       <form action="registerdb.php" onsubmit="return validate();" method="POST">
        <div class="row">
            <i class="fa fa-user icon"></i>
            <input type="text" class="input" placeholder="Name" name="name" required>
           </div>
           <div class="row">
            <i class="fa fa-calendar icon"></i>
            <input type="date" class="input" placeholder="Date" name="date" required>
           </div>
           <div class="row">
            <i class="fa fa-phone icon"></i>
            <input type="tel" class="input"  placeholder="Phone"  name="phone" maxlength="10" required>
           </div>
           <div class="row">
            <i class="fa fa-user icon"></i>
            <input type="email" class="input"  placeholder="Email" name="email" required>
           </div>
           <div class="row">
            <i class="fa fa-lock icon"></i>
            <input type="password" class="input" id="pass" placeholder="Password" name="pass" required>
           </div>
           <div class="row">
            <i class="fa fa-lock icon"></i>
            <input type="password" class="input" id="cpass" name="cpass"  placeholder="Confirm Password" required>
           </div>
           <div class="row button">
               <input type="submit" name="submit" value="Register">
           </div>
           <div class="signup">
            Already have account? <a href="login.php">Login</a>
        
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