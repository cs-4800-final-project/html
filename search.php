
<?php
	require_once "config.php";
	mysql_select_db("content") or die(mysql_error());
    $query = $_POST['search']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
           
        $query = mysql_real_escape_string($query);

         
        $raw_results = mysql_query("SELECT * FROM articles
            WHERE (`ctitle` LIKE '%".$query."%') OR (`year` LIKE '%".$query."%')") or die(mysql_error());
 
         
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
     
             
                echo "<p><h3>".$results['title']."</h3>".$results['clink']."</p>";
            }
             
        }
        else{ // if there is no matching rows do following
            echo "There are no results matching your search";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>

<title> NuFu Login</title>
<link rel="stylesheet" href="assets/style.css">

<div id='uni'>
<?php
include('header.php');
?>