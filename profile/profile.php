<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="../style.css" rel="stylesheet">

	<!--Change Navbar Color on Scroll & Pause video when you scroll down-->
	<script>
		 $(window).scroll(function(){
		var scroll = $(window).scrollTop();
		var vid = document.getElementById("player");
		
        if(scroll < 700){
			$('.fixed-top').css('background', 'transparent'); 
			$('#slides').carousel({interval: 500});
        } else{
			$('.fixed-top').css('background', 'rgba(22, 22, 22)'); 
			
        }
	});</script>
	
</head>
<?php
include('../header.php');
?>
<body>



<!--Timeline Cover Photo as well as Profile Image-->
<div id = "slides" class = "carousel slide carousel-fade" data-ride= "carousel"  >
	
	<div id = "myCarousel" class = "carousel-inner-profile">
		<div class ="carousel-item active" >
			<img src = "../img/background.png" > <!--TIMELINE COVER PHOTO--> 
			<div class = "carousel-caption-profile">
				<img src = "../img/profile.JPG"> 
			</div>
			<div class = "carousel-caption-profile-nameCaption">
				<h1>  <?php echo $_SESSION['username'];?> </h1>
			</div>
		</div>
	</div>
</div>
	<div class = "box-profile"> 
       
            <div class="panel panel-default">
                <div class="panel-body">
                        <div class="media-body">
                            <hr>
                            <h3><strong>Bio</strong></h3>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</h3>
                            <hr>
                            <h3><strong>Location</strong></h3>
                            <p>Earth</p>
                            <hr>
                            <h3><strong>Gender</strong></h3>
                            <p>M</p>
                            <hr>
                            <h3><strong>Birthday</strong></h3>
                            <p>January 01 1901</p>
                        </div>
                    </div>
                </div>
		
		</div>

		<div class= "box-profile-content">
					<div class="panel panel-default">
						<div class="panel-body">
							<span>
								<h1 class="panel-title pull-left" style="font-size:25px;">Your Subscriptions <small></small> </h1>
								<div class="dropdown pull-right">
									<button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										Manage Subscriptions
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<li><a href="#">Options</a></li>
										<li><a href="#"> Cancel your Subscriptions</a></li>
										<li><a href="#"> Add a Subscription</a></li>
										<li><a href="#"></a></li>
										<li role="separator" class="divider"></li>
										<li><a href="#"><i class="fa fa-fw fa-plus" aria-hidden="true"></i>  I don't know </a></li>
									</ul>
								</div>
							</span>
							<br><br>
							 <a href="#"><img src= "../img/movie1.jpg" alt =""  width= "100" height = "100"/> </a> 
							 <a href="#"><img src= "../img/movie1.jpg" alt =""  width= "100" height = "100"/> </a> 
							 <a href="#"><img src= "../img/movie1.jpg" alt =""  width= "100" height = "100"/> </a> 
							
							<br><br><hr>
						</div>
					</div>
				</div>


			<!-- Simple post content example. -->
						<div class = "box-profile-content" style= "margin-top: 10px;">
							<div class="panel panel-default">
									<div class="panel-body">
										<div class="pull-left">
											<a href="#">
												<img class="media-object img-circle" src="../img/profile.JPG" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
											</a>
										</div>
										<h4><a href="#" style="text-decoration:none;"><strong>John Doe</strong></a> – <small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 42 minutes ago</i></a></small></small></h4>
										<span>
											<div class="navbar-right">
												<div class="dropdown">
													<button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
														<i class="fa fa-cog" aria-hidden="true"></i>
														<span class="caret"></span>
													</button>
													<ul class="dropdown-menu" aria-labelledby="dd1" style="float: right;">
														<li><a href="#"><i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i> Report</a></li>
														<li><a href="#"><i class="fa fa-fw fa-ban" aria-hidden="true"></i> Ignore</a></li>
														<li><a href="#"><i class="fa fa-fw fa-bell" aria-hidden="true"></i> Enable notifications for this post</a></li>
														<li><a href="#"><i class="fa fa-fw fa-eye-slash" aria-hidden="true"></i> Hide</a></li>
														<li role="separator" class="divider"></li>
														<li><a href="#"><i class="fa fa-fw fa-trash" aria-hidden="true"></i> Delete</a></li>
													</ul>
												</div>
											</div>
										</span>
										<hr>
										<div class="post-content">
											<p>Simple post content example.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
										</div>
										<hr>
										<div>
											<div class="pull-right btn-group-xs">
												<a class="btn btn-default btn-xs"><i class="fa fa-heart" aria-hidden="true"></i> Like</a>
												<a class="btn btn-default btn-xs"><i class="fa fa-retweet" aria-hidden="true"></i> Reshare</a>
												<a class="btn btn-default btn-xs"><i class="fa fa-comment" aria-hidden="true"></i> Comment</a>
											</div>
											<div class="pull-left">
												<p class="text-muted" style="margin-left:5px;"><i class="fa fa-globe" aria-hidden="true"></i> Public</p>
											</div>
											<br>
										</div>
										<hr>
										<div class="media">
											<div class="pull-left">
												<a href="#">
													<img class="media-object img-circle" src="" width="35px" height="35px" style="margin-left:3px; margin-right:-5px;">
												</a>
											</div>
											<div class="media-body">
												<textarea class="form-control" rows="1" placeholder="Comment"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
					



<!--
<div class= "box-profile >
        <table border = "0" cellspacing ="0" width= "400" height = "480" align="center" >
            
            <tr align="center">
                    <td colspam ="3">  <h4>About Me </h4> </td>
            </tr> 
            <tr>
                    <td colspan= "3"> <h3>  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </h3> </td> 
            </tr>
            <tr align="center">
                    <td colspam ="3"> <h4><a href="#">Friends </a></h4> </td>
            </tr>
            <tr>
                    <td colspam ="1"> <a href="#"><img src= "../img/friend.jpg" alt ="" class = "box-img" width= "100" height = "100"/> </a> </td>
                    
            </tr>
        
            <tr align="center">
                    <td colspam ="3"> <h4><a href="#">Favorited Shows/Movies</a> </h4> </td>
                    
            </tr>    
            <tr>
                    <td colspam ="1"> <a href="https://www.youtube.com/watch?v=VubxHFy7ocE"><img src= "penguins.jpg" alt ="" class = "box-img" width= "100" height = "100"/> </a></td>
                    
            </tr>
        </table>
    </div>
-->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>







<!--- Footer -->





</body>
<?php
include('../footer.php');
?>
</html>






