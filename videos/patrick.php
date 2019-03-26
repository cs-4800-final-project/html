<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" href="assets/style.css">

<?php
	echo  '<nav class ="navbar navbar-expand-md navbar-light bg-light">
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
				<a class ="nav-link" href = "http://danc.ddns.net/index.php?page=contact"> Contact Us</a>
			</li>
			<?php 
			session_start();
			if( isset($_SESSION[\'username\']) && !empty($_SESSION[\'username\']) )
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
';?>

<?php
	session_start();
	
	echo '<div style="position:relative; padding-bottom:56.25%; overflow:hidden;"><iframe src="https://cdn.jwplayer.com/players/NllofW4e-wMbjKtxS.html" width="100%" height="100%" frameborder="0" scrolling="auto" allowfullscreen style="position:absolute;"></iframe></div>';
	
	
?>

<style>
.checked{
	color: orange;
}
</style>

<h2>Rating</h2>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>



<h2>Comments</h2>

 <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div> 
	
<input type="submit" class="btn btn-info" value="Submit">

<?php
	
	$servername = "localhost";
	$username = "admin";
	$password = "12345";
	$dbname = "information";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
   		 die("Connection failed: " . $conn->connect_error);
	} 
	
	

	$comment = $_GET['comment'];

	//$sql = "INSERT INTO comments(userId, contentId, body) VALUES(3, 5, 'this is an insrted comment')";
	if($conn->query($sql) === TRUE){
		echo "Successful insertion";
	}else{
		echo "error";
	}
	
	$sql = "SELECT userId, contentId, body FROM comments";
	$commentData = $conn->query($sql);
	
	$sql = "SELECT ID, firstName FROM user";
	$userData = $conn->query($sql);
	
	$sql = "SELECT cid FROM content";
	$contentData = $conn->query($sql);
	
	
	
	if ($commentData->num_rows > 0) {
    // output data of each row
    while($row = $commentData->fetch_assoc()) {
        echo "id: " . $row["userId"]. "contentId: " . $row["contentId"]. " " . $row["body"]. "<br>";
    }
	} else {
		echo "0 results";
	}
	
	$conn->close();
	
	include('footer.php')
?>





