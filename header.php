
<div id="menubar">
	<a href="index.php">
  		<img src="assets/nufu.png" alt="Home" style="width:42px;height:42px;border:0">
	</a>
	<a href="index.php?page=log">Logs</a>
	<a href="index.php?page=srs">SRS</a>
	<a href="index.php?page=project">Database</a>
	<a href="index.php?page=er">ER Model</a>
	<a href="index.php?page=member">Members</a>
	<a href="index.php?page=contact">Contact Us</a>
	<?php 
	session_start();
	if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
	{
		?>
	      <a href="logout.php">Logout</a>
		<?php 
	}
	else
	{ 
		?>
     	<a href="login.php">Login</a>
     	<a href="register.php">Register</a>
		<?php 
	} 	
	?>
</div>
