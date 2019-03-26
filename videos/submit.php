<html>
  <body>
  
  the comment was <?php echo $_POST["comment"]; ?><br>
  
  </body>
</html>
<?php
	session_start();

	$servername = "localhost";
	$username = "admin";
	$password = "12345";
	$dbname = "information";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
   		 die("Connection failed: " . $conn->connect_error);
	} 
	
	
	$comment = $_POST["comment"];

	$sql = "INSERT INTO comments(userId, contentId, body) VALUES(15, 7, $comment)";
	if($conn->query($sql) === TRUE){
		echo "Successful insertion";
	}else{
		echo "error";
	}
?>
