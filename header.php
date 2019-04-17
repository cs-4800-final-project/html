<nav class ="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class = "container-fluid"> 
	<a class = "navbar-brand" href="#"><img src = "../img/logo.png"> </a>
	<button class="navbar-toggler" type= "button" data-toggle="collapse" data-target = "#navbarResponsive">
		<span class =  "navbar-toggler-icon"></span>
	</button>

	<?php
		$searchq = $_POST['search'];
		$baseurl = "http://danc.ddns.net/search/?ID="
		$completeurl = $baseurl + $searchq
	?>

	<!--<?php echo $_POST['search']; ?>-->
	<form action="<?php echo $completeurl;?>" method="POST">
			<input type="text" name="search" placeholder="Search">
			<button type="submit" name="submit-search">Search</button>
	</form>
	<div class = "collapse navbar-collapse" id= "navbarResponsive">
		<ul class = "navbar-nav ml-auto">
			<li class = "nav-item">
				<a class ="nav-link" href = "http://danc.ddns.net/home/"> Home </a>
			</li>
				<a class ="nav-link" href = "http://danc.ddns.net/profile/profile.php"> Profile</a>
			</li>
			<?php 
			session_start();
			if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
			{
				?>
			      <a class ="nav-link"href="../dbcon/logout.php">Logout</a>
			      </li>
				<?php 
			}
			else
			{ 
				?>
		     	<a class ="nav-link"href="../login/login.php">Login</a>
		     	</li>
		     	<a class ="nav-link"href="../register/register.php">Register</a>
		     	</li>
				<?php 
			} 	
			?>
		</ul>
	</div>
</div>
</nav>
