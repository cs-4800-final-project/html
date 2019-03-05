<title> NuFu </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" href="assets/style.css">

<div id='uni'>

<?php
include('header.php');
?>

<div id="content">
	<?php
		if($_GET['page'])
		{
			$page= $_GET['page'];
			$display=$page.'.php';
			if (file_exists($display)) 
			{
    			include($display);
			} 
			else 
			{
    			echo "The file $display does not exist";
			}
		}
		else
		{
			include('home.php');
		}
	?>	
</div>

<?php
include('footer.php');
?>
</div>

