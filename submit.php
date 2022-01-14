<?php

session_start();


require_once('user_connection.php');


  //echo $_POST['name'] . "<br />";
  //echo $_POST['email'] . "<br />";
  //echo $_POST['phone'] . "<br />";
  // echo $_POST['gender'] . "<br />";
  // echo "==============================<br />";
  // echo "All Data Submitted Successfully!";


  $event = $_POST['gender'];

  $_SESSION['radio'] = $event;


  if($event == "romantic"){

					

					$area= "Relationships";
					$_SESSION['area']=$area;
	
					$sub_event1 = "Met future partner";
					$sub_event2 = "Marriage";
					$sub_event3 = "Quarrel with partner";
					$sub_event4 = "Divorce";

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;

				}

				elseif($event == "family"){

					 

					$area= "Relationships";
					$_SESSION['area']=$area;

					$sub_event1 = "Positive event in family member’s life";
					$sub_event2 = "Negative event in family member’s life";
					$sub_event3 = "Separation from family member";
					$sub_event4 = "Reunion with family member";

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;
				}

				elseif($event == "profession"){

					 

					$area= "Relationships";
					$_SESSION['area']=$area;

					$sub_event1 = "Disagreement with boss/co-worker";
					$sub_event2 = "New boss";
					$sub_event3 = "New close co-worker";

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;
				}

				elseif($event == "friends"){

					 

					$area= "Relationships";
					$_SESSION['area']=$area;

					$sub_event1 = "New friend";
					$sub_event2 = "Quarrel with friend";
					$sub_event3 = "Separation from friend";
					$sub_event4 = "Reunion with friend";

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;
				}

				elseif($event == "illness"){

					 

					$area= "Health";
					$_SESSION['area']=$area;

					$sub_event1 = "Start of illness";
					$sub_event2 = "Recovery from illness";

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;

				}

				elseif($event == "accident"){

					 

					$area= "Health";
					$_SESSION['area']=$area;

					$sub_event1 = "Accident";
					$sub_event2 = "Recovery from accident";

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;
				}

				elseif($event == "habbit"){

					 

					$area= "Health";
					$_SESSION['area']=$area;

					$sub_event1 = "Start of healthy habit";
					$sub_event2 = "Start of unhealthy habit";
					$sub_event3 = "End of unhealthy habit";

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
				}

				elseif($event == "gains"){

					 

					$area= "Financial";
					$_SESSION['area']=$area;


					$sub_event1 = "Expected gain";
					$sub_event2 = "Unexpected gain";

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;

				}

				elseif($event == "loss"){

					 

					$area= "Financial";
					$_SESSION['area']=$area;

					$sub_event1 = "Expected/Planned expense/loss";
					$sub_event2 = "Unexpected expense/loss";

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;

				}

				elseif($event == "decision"){

					 

					$area= "Financial";
					$_SESSION['area']=$area;

					$sub_event1 = "Invested in stock market/speculative";
					$sub_event2 = "Invested in fixed assets like real estate for investment purposes";
					$sub_event3 = "Car";
					$sub_event4 = "Bought house for staying";
					$sub_event5 = "Re-shuffling of funds or assets";

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;

				}

				elseif($event == "job"){
					 

					$area= "Career";
					$_SESSION['area']=$area;
					
					$sub_event1 = "New primary job/position";
					$sub_event2 = "New secondary job";
					$sub_event3 = "CarPromotion";
					$sub_event4 = "Got fired";

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;

				}

				elseif($event == "study"){

					 

					$area= "Career";
					$_SESSION['area']=$area;
					
					$sub_event1 = "Started study";
					$sub_event2 = "Changed field of study";
					

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;
				

				}

				elseif($event == "award"){

					 

					$area= "Career";
					$_SESSION['area']=$area;
					
					$sub_event1 = "Received professional or academic award/recognition";

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;

				}

				elseif($event == "spiritualpractice"){

					 
					
					$area= "Spiritual";
					$_SESSION['area']=$area;

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;

				}

				elseif($event == "spiritualmaster"){

					 

					$area= "Spiritual";
					$_SESSION['area']=$area;
					

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;

				}

				elseif($event == "spiritualexperience"){

					 
					
					$area= "Spiritual";
					$_SESSION['area']=$area;

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;

				}

				elseif($event == "forstudies"){

					 

					$area= "Travel";
					$_SESSION['area']=$area;					

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;

				}

				elseif($event == "forwork"){

					 
					
					$area= "Travel";
					$_SESSION['area']=$area;

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;

				}

				elseif($event == "forrelation"){

					 
					
					$area= "Travel";
					$_SESSION['area']=$area;

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;

				}

				elseif($event == "forpleasure"){

					 
					
					$area= "Travel";
					$_SESSION['area']=$area;

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;

				}

				elseif($event == "children"){

					 
					
					$area= "Other";
					$_SESSION['area']=$area;

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;

				}

				elseif($event == "other"){

					 
					
					$area= "Other";
					$_SESSION['area']=$area;

					$_SESSION['sub_event1'] = $sub_event1;
					$_SESSION['sub_event2'] = $sub_event2;
					$_SESSION['sub_event3'] = $sub_event3;
					$_SESSION['sub_event4'] = $sub_event4;
					$_SESSION['sub_event5'] = $sub_event5;

				}



echo "<div id='event'>

      <form action='process.php' method='post'>

        <div class='dropdown'>";

         
            
            if(!empty($sub_event1)){
              echo "<label for='sub_events'>Choose a sub event:</label>";
              echo "<select id='cars' name='sub_events' required>";
              echo "<label for='cars'>Choose a sub event:</label>";
              echo "<option value='$sub_event1'>$sub_event1</option>";
            }
            if(!empty($sub_event2)){
              echo "<option value='$sub_event2'>$sub_event2</option>";
            }
            if(!empty($sub_event3)){
              echo "<option value='$sub_event3'>$sub_event3</option>";
            }
            if(!empty($sub_event4)){
              echo "<option value='$sub_event4'>$sub_event4</option>";
            }
            if(!empty($sub_event5)){
              echo "<option value='$sub_event5'>$sub_event5</option>";
            }
         

        echo "</div>";

        echo "<div><input type='date' class='form-control' name='edate' placeholder='Event Date' required></div>

        
        // <div><input type='text' class='form-control' name='event_type' placeholder='Event Type: Negative/Positive' required></div>

        <label for='cars'>Event type:</label>
  <select name='event_type' id='cars'>
    <option value='negative'>Negative</option>
    <option value='positive'>Positive</option>
  </select>

        <div><input type='textarea' class='form-control' name='description' placeholder='Event description' required></div>
         <a href='#'><button class='btn1' type='submit' name='submit'>Submit</button></a>
      </form>

    </div>";


    	if(isset($_POST['submit'])){

		$person_id=$_SESSION['user'];
		$event_area=$_SESSION['area'];
		$event_radio=$_SESSION['radio'];
		$sub_event = $_POST['sub_events'];
		$edate = $_POST['edate'];
		$event_type = $_POST['event_type'];
		$description = $_POST['description'];
		

			$sql = "INSERT INTO `event`(`person_id`, `area`, `event`, `sub_event`, `event_type`, `event_date`, `event_description`) VALUES ('$person_id','$event_area','$event_radio','$sub_event','$event_type','$edate','$description')";
				mysqli_query($con,$sql);
				header("location:timeline.php?person_id={$person_id}");

	}




?>



