
<h2>Welcome to our Homepage.</h2>
This will be changed after initial update.
<a href="https://github.com/cs-4800-final-project">Github Project</a>
<div id = "slides" class = "carousel slide" data-ride= "carousel">
	<ul class= "carousel-indicators">
		<li data-target = "#slides" data-slide-to="0" class="active"></li>
		<li data-target = "#slides" data-slide-to="1"></li>
		<li data-target = "#slides" data-slide-to="2"></li>
	</ul>
	<div class = "carousel-inner">

		<div class ="carousel-item active">
			<img src = "img/background (1).png">
			<div class = "carousel-caption">
				<h1 class ="display-2">Some Movie Title</h1>
				<h3> "Some Amazing Quote"</h3>
				<button type = "button" class = "btn btn-outline-light btn-lg">Watch Now <i class="fas fa-play-circle"></i>  </button>
				<button type = "button" class = "btn btn-outline-light btn-lg">See Trailer <i class="fas fa-film"></i></button>
			</div>
		</div>
		<div class ="carousel-item">
			<img src = "img/Kimi-no-Na-wa-Wallpaper-kimi-no-na-wa-40144869-1920-1200.png">
			<div class = "carousel-caption">
					<h1 class ="display-2">Your Name</h1>
					<h3> "Treasure the experience. Dreams fade away after you wake up."</h3>
					<button type = "button" class = "btn btn-outline-light btn-lg">Watch Now <i class="fas fa-play-circle"></i>  </button>
					<button type = "button" class = "btn btn-outline-light btn-lg">See Trailer <i class="fas fa-film"></i></button>
				</div>
		</div>
		<div class ="carousel-item">
			<img src = "img/patrick.png">
			<div class = "carousel-caption">
					<h1 class ="display-2">No</h1>
					<h3> "This is Patrick!"</h3>
					<button type = "button" class = "btn btn-outline-light btn-lg">Watch Now  <i class="fas fa-play-circle"></i> </button>
					<button type = "button" class = "btn btn-outline-light btn-lg">See Trailer <i class="fas fa-film"></i></button>
				</div>
	</div>
</div>

</div>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
