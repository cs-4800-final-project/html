<div id="menubar">
	<a href="index.php">
  		<img src="assets/nufu.png" alt="Home" style="width:42px;height:42px;border:0">
	</a>
	<a href="index.php?page=log">Logs</a>
	<a href="index.php?page=srs">SRS</a>
	<a href="index.php?page=project">Project</a>
	<a href="index.php?page=member">Members</a>
	<a href="index.php?page=contact">Contact Us</a>
	// Check if the user is logged in, if not then redirect him to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== false){
    
    	<a href="logout.php">Logout</a>
	}
</div>
