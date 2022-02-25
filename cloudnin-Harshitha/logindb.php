<?php
 

    if (isset($_POST['submit'])) {
       
 
       $email = $_POST['email'];
 
       $pass = $_POST['pass'];
 
 
    
        
        }
        if (!empty($email) ||!empty($pass))
        {
            $host = "localhost";
            $dbusername = "id18517612_cloudninehos";
            $dbpassword = "7thmarchZAZU@";
            $dbname = "id18517612_cloudnine";
            $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        
        if (mysqli_connect_error()){
          die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
        }
        else{
         
         

      
          $sql = "SELECT * FROM register WHERE email='$email' AND pass='$pass'";
      
          $result = mysqli_query($conn, $sql);
      
          if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
                  if ($row['email'] === $email && $row['pass'] === $pass) {
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['pass'] = $row['pass'];
            	
                    echo "<script>alert('Login Successful');window.location='index.php'</script>";
                  exit();
                  }else{
                    echo "<script>alert('oops!Incorrect email/Password');window.location='login.php'</script>";
                  exit();
            }
          }else{
            echo "<script>alert('oops!Incorrect email/Password');window.location='login.php'</script>";
                exit();
          }
        }
        
      }else{
        header("Location: index.php");
        exit();
      }
    
?>


