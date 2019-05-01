<nav class="navbar navbar-expand-md navbar-dark bg-gray fixed-top ">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"> <img src="http://danc.ddns.net/img/logo.png"> </h1> </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"> <span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">

			<?php
			if ( isset($_POST['submit-search']) )
			{
				$searchq = $_POST['search'];
				$baseurl = "http://danc.ddns.net/search/?ID=";
				$completeurl = $baseurl.$searchq;
				header( "Location:".$completeurl ); 
			}
			?>

			 <form class="form-inline" method="POST">
                <div class="md-form my-0">
                    <input type="text" class="form-control form-control-sm mr-3 w-80" name="search" placeholder="Search">
                    <button type="submit" name="submit-search" style= "background-color:Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;"><i class="fas fa-search" aria-hidden="true" style= "color:white;"></i></button>
                </div>
        	</form>


					<!--

					<form class="form-inline ">
												<div class="md-form my-0">
							<input class="form-control form-control-sm mr-3 w-80" type="text" placeholder="Search"
								aria-label="Search">
							<i class="fas fa-search" aria-hidden="true"></i>
						</div>
					</form>
					-->

					<li class="nav-item">
						<a class="nav-link" href="http://danc.ddns.net/home/"> Home </a>
					</li>
					<a class="nav-link" href="http://danc.ddns.net/subscriptions/"> My Subscriptions </a>
					</li>
					<a class="nav-link" href="http://danc.ddns.net/shows/"> Shows </a>
					</li>
					<a class="nav-link" href="http://danc.ddns.net/movies/"> Movies </a>
					</li>
					<a class="nav-link" href="http://danc.ddns.net/profile"> My Profile </a>
					<!--Make this a dropdown w/ profile picture later -->
					</li>
					<a class="nav-link" href="http://danc.ddns.net/dbcon/logout.php"> Logout </a>
					</li>
				</ul>
			</div>
		</div>
	</nav>



<!-- old header
<nav class ="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class = "container-fluid"> 
	<a class = "navbar-brand" href="#"><img src = "../img/logo.png"> </a>
	<button class="navbar-toggler" type= "button" data-toggle="collapse" data-target = "#navbarResponsive">
		<span class =  "navbar-toggler-icon"></span>
	</button>

	<?php
	if ( isset($_POST['submit-search']) )
	{
		$searchq = $_POST['search'];
		$baseurl = "http://danc.ddns.net/search/?ID=";
		$completeurl = $baseurl.$searchq;
		header( "Location:".$completeurl ); 
	}
	?>

	<form method="POST">
			<input type="text" name="search" placeholder="Enter Show Name">
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

-->
