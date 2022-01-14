<?php

	$con=mysqli_connect('localhost','root','','starai');

	if(!$con){
		die('Please check your connection'.mysql_error($con));
	}

?>