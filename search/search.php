<title> NuFu Search</title>
<link rel="stylesheet" href="assets/style.css">

<div id='uni'>
<?php
include('header.php');
?>

<?php
include_once('config.php');
if(isset($_POST['search']))
{
	$q = $_POST['q'];
	$query = mysqli_query($link,"SELECT * FROM `content` WHERE (`ctittle` LIKE '%".$q."%') OR (`year` LIKE '%".$q."%')"); 
//Replace table_name with your table name and `thing_to_search` with the column you want to search
	$count = mysqli_num_rows($query);
	if($count == "0")
  {
		$output = '<h2>There are no results matching your search!</h2>';
	}else
  {
		while($row = mysqli_fetch_array($query))
    {
		  $s = $row['column_to_display']; // Replace column_to_display with the column you want the results from
			$output .= '<h2>'.$s.'</h2><br>';
		}
	}
}
?>
<h2>Test search</h2>
<?php
include('footer.php');
?>
</div>
