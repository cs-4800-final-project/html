<?php

session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Include config file
require_once "config.php";
?>
<?php
	if(isset('submit-search'))
	{
		$search = mysql_real_escape_string($link, $_POST['search']);
		$sql = "SELECT * FROM content where ctittle LIKE '%$search%' OR year LIKE '%$search%'";
		$result = mysqli_query($link,$sql);
		$queryResult = mysqli_num_rows($result)
		if($queryResult > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<div><p>.$row['ctittle']</p><p>.$row['clink']</p></div>"
			}
		}
		else
		{
			echo "There are no results matching your search"
		}
	}
?>