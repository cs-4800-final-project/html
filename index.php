<title> NuFu </title>
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

