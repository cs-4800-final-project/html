<html>
  <body>
  
  the comment was <?php echo $_POST["comment"]; ?><br>
  
  </body>
</html>
<?php
	session_start();

require_once "../dbcon/config.php"; 
	
	
	$comment = $_POST["comment"];
	$id = $_POST["userData"];//not working
	$content = $_POST["cid"];
	$return = $_POST["return"];
	
	echo $return;

	$sql = "INSERT INTO comments(userId, contentId, body) VALUES('$id', '$content', '$comment')";
	if($link->query($sql) === TRUE){
		echo "Successful insertion";
	}else{
		echo "error";
	}
	header("Location: $return");
?>
