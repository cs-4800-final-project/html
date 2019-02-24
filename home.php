
<h2>Welcome to our Homepage.</h2>
This will be changed after initial update.
<a href="https://github.com/cs-4800-final-project">Github Project</a>

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>