<?php  
	require_once ("connection.php");
	
	$sve = $mysqli->query('select * from users')->fetch_row();
	$_SESSION['user'] = $sve;
	foreach($sve as $row){
	    echo "<h2>".$row.'</h2>';
	}

	include_once ('header.php');
	include_once ('footer.php');
?>