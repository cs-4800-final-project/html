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
	$id = $_POST["userData"];//not working
	$content = $_POST["cid"];
	$return = $_POST["return"];
	
	echo $return;

	$sql = "INSERT INTO comments(userId, contentId, body) VALUES('$id', '$content', '$comment')";
	if($conn->query($sql) === TRUE){
		echo "Successful insertion";
	}else{
		echo "error";
	}
	redirect('$return');
?>
