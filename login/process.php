<?php
    // Include config file
    require_once "../dbcon/config.php";
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $email = stripcslashes($email);
    $password = stripcslashes($password);
    
    $email = mysqli_real_escape_string($link, $email);
    $password = mysqli_real_escape_string($link, $password);

    $sql =  "select * from account where email = '$email' and password = '$password'";
    $result = $link->query($sql);
    $row = $result->fetch_assoc();
    
    if($row["email"] == $email && $row["password"] == $password){
      echo "Log in sucessfull! Welcome ".$row['username'];
      session_start();
                               
      // Store data in session variables
      $_SESSION["loggedin"] = true;
      $_SESSION["id"] = $row['id'];
      $_SESSION["username"] = $row['username'];                            
      
      // Redirect user to welcome page
      header("location: ../home");
    } else {
      echo "Failed to login!";
    }

?>
