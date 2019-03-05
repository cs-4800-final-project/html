<nav class ="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class = "container-fluid"> 
	<a class = "navbar-brand" href="#"><img src = "img/logo.png"> </a>
	<button class="navbar-toggler" type= "button" data-toggle="collapse" data-target = "#navbarResponsive">
		<span class =  "navbar-toggler-icon"></span>
	</button>
	<div class = "collapse navbar-collapse" id= "navbarResponsive">
		<ul class = "navbar-nav ml-auto">
			<li class = "nav-item">
				<a class ="nav-link" href = "http://danc.ddns.net"> Home </a>
			</li>
				<a class ="nav-link" href = "http://danc.ddns.net/index.php?page=log"> Logs </a>
			</li>
				<a class ="nav-link" href = "http://danc.ddns.net/index.php?page=srs"> SRS </a>
			</li>
				<a class ="nav-link" href = "http://danc.ddns.net/index.php?page=project"> Database </a>
			</li>
			</li>
				<a class ="nav-link" href = "http://danc.ddns.net/index.php?page=er"> ER Model </a>
			</li>
				<a class ="nav-link" href = "http://danc.ddns.net/index.php?page=member"> Members </a>
			</li>
				<a class ="nav-link" href = "http://danc.ddns.net/index.php?page=contact"> Contact Us</a>
			</li>
			<?php 
			session_start();
			if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
			{
				?>
			      <a class ="nav-link"href="logout.php">Logout</a>
			      </li>
				<?php 
			}
			else
			{ 
				?>
		     	<a class ="nav-link"href="login.php">Login</a>
		     	</li>
		     	<a class ="nav-link"href="register.php">Register</a>
		     	</li>
				<?php 
			} 	
			?>
		</ul>
	</div>
</div>
</nav>
