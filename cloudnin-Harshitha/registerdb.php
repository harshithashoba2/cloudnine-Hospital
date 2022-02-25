<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass =$_POST['cpass'];
    
    }
    if (!empty($name) || !empty($date) ||!empty($phone) || !empty($email) || !empty($pass)  ||!empty($cpass))
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
    else
    {
        
    $sql = "INSERT INTO register (name,date,phone,email,pass,cpass)
	 VALUES ('$name','$date','$phone','$email','$pass','$cpass')";
	 if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registered Successfully');window.location='login.php'</script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
}
     ?>