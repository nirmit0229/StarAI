<?php

require_once('user_connection.php');
session_start();


	if(isset($_POST['submit'])){

		$person_id=$_SESSION['person_id'];
		$event = $_SESSION['event'];

		$event_area=$_SESSION['area'];
		
		$sub_event = $_POST['sub_events'];
		$edate = $_POST['edate'];
		$event_type = $_POST['event_type'];
		$description = $_POST['description'];


		

			$sql = "UPDATE `event` SET `person_id`='".$person_id."',`area`='".$event_area."',`event`='".$event."',`sub_event`='".$sub_event."',`event_type`='".$event_type."',`event_date`='".$edate."',`event_description`='".$description."' WHERE event= '".$event."' AND person_id= '".$person_id."'";
				mysqli_query($con,$sql);
				header("location:timeline.php?person_id={$_SESSION['person_id']}");

	}


?>