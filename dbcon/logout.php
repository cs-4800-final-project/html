<?php 
IF(ISSET($_GET['destroy'])){
 session_start();
 session_destroy();
 header('Location:danc.ddns.net/login/');
}
?>