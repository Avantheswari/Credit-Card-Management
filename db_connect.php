<?php
	//make connection with database
	$link = mysqli_connect("localhost","avanthi","kEUW#onjf2YR|b-x","Avantheswari");
	
	// Check connection
	if($link === false) {
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>
