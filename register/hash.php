<?php
$password = "masterman1";
echo $password;
$param_password = password_hash($password, PASSWORD_DEFAULT);
echo $param_password;
?>