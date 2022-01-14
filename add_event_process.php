<?php

require_once('user_connection.php');

session_start();

	// // if(isset($_POST['radio'])){
	// // 	$area= $_POST['areas'];
	// // 	$event= $_POST['radio'];

	// // 	$ID = $_SESSION['ID'];
		
	// // 	$_SESSION['area']=$area;
	// // 	$_SESSION['radio']=$event;

	// // 			if($event == "romantic"){

	// // 				header("location:dataentry.php");

	// // 				$area= "Relationships";
	// // 				$_SESSION['area']=$area;
	
	// // 				$sub_event1 = "Met future partner";
	// // 				$sub_event2 = "Marriage";
	// // 				$sub_event3 = "Quarrel with partner";
	// // 				$sub_event4 = "Divorce";

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;

	// // 			}

	// // 			elseif($event == "family"){

	// // 				header("location:dataentry.php");

	// // 				$area= "Relationships";
	// // 				$_SESSION['area']=$area;

	// // 				$sub_event1 = "Positive event in family member’s life";
	// // 				$sub_event2 = "Negative event in family member’s life";
	// // 				$sub_event3 = "Separation from family member";
	// // 				$sub_event4 = "Reunion with family member";

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;
	// // 			}

	// // 			elseif($event == "profession"){

	// // 				header("location:dataentry.php");

	// // 				$area= "Relationships";
	// // 				$_SESSION['area']=$area;

	// // 				$sub_event1 = "Disagreement with boss/co-worker";
	// // 				$sub_event2 = "New boss";
	// // 				$sub_event3 = "New close co-worker";

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;
	// // 			}

	// // 			elseif($event == "friends"){

	// // 				header("location:dataentry.php");

	// // 				$area= "Relationships";
	// // 				$_SESSION['area']=$area;

	// // 				$sub_event1 = "New friend";
	// // 				$sub_event2 = "Quarrel with friend";
	// // 				$sub_event3 = "Separation from friend";
	// // 				$sub_event4 = "Reunion with friend";

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;
	// // 			}

	// // 			elseif($event == "illness"){

	// // 				header("location:dataentry.php");

	// // 				$area= "Health";
	// // 				$_SESSION['area']=$area;

	// // 				$sub_event1 = "Start of illness";
	// // 				$sub_event2 = "Recovery from illness";

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;

	// // 			}

	// // 			elseif($event == "accident"){

	// // 				header("location:dataentry.php");

	// // 				$area= "Health";
	// // 				$_SESSION['area']=$area;

	// // 				$sub_event1 = "Accident";
	// // 				$sub_event2 = "Recovery from accident";

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;
	// // 			}

	// // 			elseif($event == "habbit"){

	// // 				header("location:dataentry.php");

	// // 				$area= "Health";
	// // 				$_SESSION['area']=$area;

	// // 				$sub_event1 = "Start of healthy habit";
	// // 				$sub_event2 = "Start of unhealthy habit";
	// // 				$sub_event3 = "End of unhealthy habit";

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 			}

	// // 			elseif($event == "gains"){

	// // 				header("location:dataentry.php");

	// // 				$area= "Financial";
	// // 				$_SESSION['area']=$area;


	// // 				$sub_event1 = "Expected gain";
	// // 				$sub_event2 = "Unexpected gain";

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;

	// // 			}

	// // 			elseif($event == "loss"){

	// // 				header("location:dataentry.php");

	// // 				$area= "Financial";
	// // 				$_SESSION['area']=$area;

	// // 				$sub_event1 = "Expected/Planned expense/loss";
	// // 				$sub_event2 = "Unexpected expense/loss";

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;

	// // 			}

	// // 			elseif($event == "decision"){

	// // 				header("location:dataentry.php");

	// // 				$area= "Financial";
	// // 				$_SESSION['area']=$area;

	// // 				$sub_event1 = "Invested in stock market/speculative";
	// // 				$sub_event2 = "Invested in fixed assets like real estate for investment purposes";
	// // 				$sub_event3 = "Car";
	// // 				$sub_event4 = "Bought house for staying";
	// // 				$sub_event5 = "Re-shuffling of funds or assets";

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;

	// // 			}

	// // 			elseif($event == "job"){
	// // 				header("location:dataentry.php");

	// // 				$area= "Career";
	// // 				$_SESSION['area']=$area;
					
	// // 				$sub_event1 = "New primary job/position";
	// // 				$sub_event2 = "New secondary job";
	// // 				$sub_event3 = "CarPromotion";
	// // 				$sub_event4 = "Got fired";

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;

	// // 			}

	// // 			elseif($event == "study"){

	// // 				header("location:dataentry.php");

	// // 				$area= "Career";
	// // 				$_SESSION['area']=$area;
					
	// // 				$sub_event1 = "Started study";
	// // 				$sub_event2 = "Changed field of study";
					

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;
				

	// // 			}

	// // 			elseif($event == "award"){

	// // 				header("location:dataentry.php");

	// // 				$area= "Career";
	// // 				$_SESSION['area']=$area;
					
	// // 				$sub_event1 = "Received professional or academic award/recognition";

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;

	// // 			}

	// // 			elseif($event == "spiritualpractice"){

	// // 				header("location:dataentry.php");
					
	// // 				$area= "Spiritual";
	// // 				$_SESSION['area']=$area;

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;

	// // 			}

	// // 			elseif($event == "spiritualmaster"){

	// // 				header("location:dataentry.php");

	// // 				$area= "Spiritual";
	// // 				$_SESSION['area']=$area;
					

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;

	// // 			}

	// // 			elseif($event == "spiritualexperience"){

	// // 				header("location:dataentry.php");
					
	// // 				$area= "Spiritual";
	// // 				$_SESSION['area']=$area;

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;

	// // 			}

	// // 			elseif($event == "forstudies"){

	// // 				header("location:dataentry.php");

	// // 				$area= "Travel";
	// // 				$_SESSION['area']=$area;					

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;

	// // 			}

	// // 			elseif($event == "forwork"){

	// // 				header("location:dataentry.php");
					
	// // 				$area= "Travel";
	// // 				$_SESSION['area']=$area;

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;

	// // 			}

	// // 			elseif($event == "forrelation"){

	// // 				header("location:dataentry.php");
					
	// // 				$area= "Travel";
	// // 				$_SESSION['area']=$area;

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;

	// // 			}

	// // 			elseif($event == "forpleasure"){

	// // 				header("location:dataentry.php");
					
	// // 				$area= "Travel";
	// // 				$_SESSION['area']=$area;

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;

	// // 			}

	// // 			elseif($event == "children"){

	// // 				header("location:dataentry.php");
					
	// // 				$area= "Other";
	// // 				$_SESSION['area']=$area;

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;

	// // 			}

	// // 			elseif($event == "other"){

	// // 				header("location:dataentry.php");
					
	// // 				$area= "Other";
	// // 				$_SESSION['area']=$area;

	// // 				$_SESSION['sub_event1'] = $sub_event1;
	// // 				$_SESSION['sub_event2'] = $sub_event2;
	// // 				$_SESSION['sub_event3'] = $sub_event3;
	// // 				$_SESSION['sub_event4'] = $sub_event4;
	// // 				$_SESSION['sub_event5'] = $sub_event5;

	// // 			}






	// // 			if ($event == "romantic") {
	// // 		$_SESSION['checked1'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked1'] = "";
	// // 	}



	// // 	if ($event == "family") {
	// // 		$_SESSION['checked2'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked2'] = "";
	// // 	}



	// // 	if ($event == "profession") {
	// // 		$_SESSION['checked3'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked3'] = "";
	// // 	}



	// // 	if ($event == "friends") {
	// // 		$_SESSION['checked4'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked4'] = "";
	// // 	}

	// // 	if ($event == "illness") {
	// // 		$_SESSION['checked5'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked5'] = "";
	// // 	}

	// // 	if ($event == "accident") {
	// // 		$_SESSION['checked6'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked6'] = "";
	// // 	}

	// // 	if ($event == "Habbit") {
	// // 		$_SESSION['checked7'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked7'] = "";
	// // 	}

	// // 	if ($event == "Gains") {
	// // 		$_SESSION['checked8'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked8'] = "";
	// // 	}

	// // 	if ($event == "Losses") {
	// // 		$_SESSION['checked9'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked9'] = "";
	// // 	}

	// // 	if ($event == "Decisions") {
	// // 		$_SESSION['checked10'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked10'] = "";
	// // 	}

	// // 	if ($event == "Job/Position") {
	// // 		$_SESSION['checked11'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked11'] = "";
	// // 	}

	// // 	if ($event == "Study") {
	// // 		$_SESSION['checked12'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked12'] = "";
	// // 	}

	// // 	if ($event == "Award/Recognition") {
	// // 		$_SESSION['checked13'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked13'] = "";
	// // 	}

	// // 	if ($event == "Started spiritual practice") {
	// // 		$_SESSION['checked14'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked14'] = "";
	// // 	}

	// // 	if ($event == "Met spiritual master") {
	// // 		$_SESSION['checked15'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked15'] = "";
	// // 	}

	// // 	if ($event == "Siginificant spiritual experience") {
	// // 		$_SESSION['checked16'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked16'] = "";
	// // 	}

	// // 	if ($event == "For Studies") {
	// // 		$_SESSION['checked17'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked17'] = "";
	// // 	}

	// // 	if ($event == "For Work") {
	// // 		$_SESSION['checked18'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked18'] = "";
	// // 	}

	// // 	if ($event == "For relationship") {
	// // 		$_SESSION['checked19'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked19'] = "";
	// // 	}

	// // 	if ($event == "For pleasure") {
	// // 		$_SESSION['checked20'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked20'] = "";
	// // 	}

	// // 	if ($event == "Children") {
	// // 		$_SESSION['checked21'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked21'] = "";
	// // 	}

	// // 	if ($event == "other") {
	// // 		$_SESSION['checked22'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checked22'] = "";
	// // 	}





	// // 	if ($area == "relationships") {
	// // 		$_SESSION['checkeda1'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checkeda1'] = "";
	// // 	}

	// // 	if ($area == "health") {
	// // 		$_SESSION['checkeda2'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checkeda2'] = "";
	// // 	}

	// // 	if ($area == "financial") {
	// // 		$_SESSION['checkeda3'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checkeda3'] = "";
	// // 	}

	// // 	if ($area == "career") {
	// // 		$_SESSION['checkeda4'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checkeda4'] = "";
	// // 	}

	// // 	if ($area == "spiritual") {
	// // 		$_SESSION['checkeda5'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checkeda5'] = "";
	// // 	}

	// // 	if ($area == "travel") {
	// // 		$_SESSION['checkeda6'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checkeda6'] = "";
	// // 	}

	// // 	if ($area == "other") {
	// // 		$_SESSION['checkeda7'] = "checked";

	// // 	}
	// // 	else{
	// // 		$_SESSION['checkeda7'] = "";
	// // 	}

	// // }


	// if(isset($_POST['submit'])){

	// 	$person_id=$_SESSION['ID'];
	// 	$event_area=$_SESSION['area'];
	// 	$event_radio=$_SESSION['radio'];
	// 	$sub_event = $_POST['sub_events'];
	// 	$edate = $_POST['edate'];
	// 	$event_type = $_POST['event_type'];
	// 	$description = $_POST['description'];
		

	// 		$sql = "INSERT INTO `event`(`person_id`, `area`, `event`, `sub_event`, `event_type`, `event_date`, `event_description`) VALUES ('$person_id','$event_area','$event_radio','$sub_event','$event_type','$edate','$description')";
	// 			mysqli_query($con,$sql);
	// 			header("location:timeline.php?person_id={$_SESSION['ID']}");

	// }


?>