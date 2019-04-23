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
	/*
	$servername = "localhost";
	$username = "admin";
	$password = "12345";
	$dbname = "information";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		
	}
	
	$sql = "SELECT userId, contentId, body FROM comments";
	$result = $conn->query($sql);
	
	echo $result;
*/
	
	echo '<script src="https://cdn.jwplayer.com/players/QGRZjY0Z-wMbjKtxS.js"></script>';
	
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
<html>
<form action = "submit.php" method = "post">
  	<label for="comment">Comment:</label>
  	<input type ="text" name="comment" class="form-control" rows="5" id="comment" ><br>
	<input type="submit" class="btn btn-info" value="Submit">
	<input type="hidden" name="cid" value="7" />
	<input type="hidden" name="return" value="http://danc.ddns.net/videos/yourname.php">
</form>	
</html>
 

<?php
	
	$servername = "localhost";
	$username = "admin";
	$password = "12345";
	$dbname = "information";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
   		 die("Connection failed: " . $conn->connect_error);
	} 
	
	
	$sql = "SELECT userId, contentId, body FROM comments";
	$commentData = $conn->query($sql);
	
	$sql = "SELECT ID, firstName FROM user";
	$_POST["userData"] = $conn->query($sql);//this needs to be tied to the current user logged in
	
	$sql = "SELECT cid FROM content";
	$_POST["contentData"] = $conn->query($sql);//this wil be sent by the page
	
	
	if ($commentData->num_rows > 0) {
    		// output data of each row
    		while($row = $commentData->fetch_assoc()) {
			if($row["contentId"] ==7){
				
				
				$printout = 'id: ' . $row["userId"]. '     Comment:  ' . $row["body"]. '<br>';
				?>
				<html>
				<div class="card">
  					<div class="card-body">
					<?php echo $printout; ?>
						<div class="float-left">
							<input type="button" class="btn btn-info" value="Like!">
						</div>
					
					</div>	
				</div>
				</html>
       			 	<?php
				
				
				
				
			}
    		}
	} else {
    		echo "0 results";
	}
	
	
	$conn->close();
	
	include('footer.php')
?>