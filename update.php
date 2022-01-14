<?php 
session_start();

    if ($_SESSION['user']==true) {
        # code...
        //   $sub_event1 = $_SESSION['sub_event1'];
        // $sub_event2 = $_SESSION['sub_event2'];
        // $sub_event3 = $_SESSION['sub_event3'];
        // $sub_event4 = $_SESSION['sub_event4'];
        // $sub_event5 = $_SESSION['sub_event5'];
    }
?>


<!DOCTYPE html>
<html lang="en-us"><head>
  <meta charset="utf-8" />
  <title>StarAI | A Paradigm Shift in Astrology</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  
  <meta name="author" content="Star AI">
  
  <meta name="generator" content="Hugo 0.80.0" />

  <!-- Bootstrap -->
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- font-awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <!-- Main Stylesheets -->
  
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/alter.css" />

  
  <link rel="shortcut icon" href = "favicon.png" type="image/x-icon" />
  <link rel="icon" href="favicon.ico" type="image/x-icon" />

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script>
    $(document).ready(function(){
      /* by default hide all radio_content div elements except first element */
      $(".content .radio_content").hide();
      $(".content .radio_content:first-child").show();

      /* when any radio element is clicked, Get the attribute value of that clicked radio element and show the radio_content div element which matches the attribute value and hide the remaining tab content div elements */
      $(".radio_wrap").click(function(){
        var current_raido = $(this).attr("data-radio");
        $(".content .radio_content").hide();
        $("."+current_raido).show();
      })
    });


  </script>


</head><body><nav class="navbar navbar-expand-lg site-navigation">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="logos/logo_horizontal.png" alt="logo" />
    </a>
    <button
      class="navbar-toggler collapsed"
      type="button"
      data-toggle="collapse"
      data-target="#sitenavbar"
    >
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <div class="collapse navbar-collapse" id="sitenavbar">
      <ul class="navbar-nav ml-auto main-nav">
         
         
         

          
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              Home
            </a>
          </li>
          

         

          
          <li class="nav-item">
            <a class="nav-link" href="about.php">
              About
            </a>
          </li>
          

         

          
          <li class="nav-item">
            <a class="nav-link" href="research.php">
              Astrology Research
            </a>
          </li>
          

         

          
          <li class="nav-item">
            <a
              class="nav-link btn btn-sm btn-primary btn-sm-rounded"
              href="trial.php"
            >
              <span class="btn-area">
                <span data-text="Trial Signup">
                  Trial Signup
                </span>
              </span>
            </a>
          </li>
          

        
      </ul>
    </div>
  </div>
</nav>
<main>





  <section class="group-56-1">

        <form action="update_process.php" method="post">

        <div class="dropdown">

          <?php 

          if(isset($_GET['event']))  {

          $conn = mysqli_connect("localhost", "root", "", "starai");
                            // Check connection
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }

            $event = mysqli_real_escape_string($conn, $_GET['event']); 
            $_SESSION['event']=$event;

            $area = mysqli_real_escape_string($conn, $_GET['area']); 
            $_SESSION['area']=$area;

            $description = mysqli_real_escape_string($conn, $_GET['event_description']); 
            $_SESSION['event_description']=$description;

            $date = mysqli_real_escape_string($conn, $_GET['event_date']); 
            $_SESSION['event_date']=$date;


            $ID = mysqli_real_escape_string($conn, $_GET['person_id']);  
            $_SESSION['person_id'] = $ID;
}
          if($event == "romantic"){

          

          $sub_event1 = "Met future partner";
          $sub_event2 = "Marriage";
          $sub_event3 = "Quarrel with partner";
          $sub_event4 = "Divorce";

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;

        }

        elseif($event == "family"){

        

          $sub_event1 = "Positive event in family member's life";
          $sub_event2 = "Negative event in family member's life";
          $sub_event3 = "Separation from family member";
          $sub_event4 = "Reunion with family member";

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;
        }

        elseif($event == "profession"){

    

          $sub_event1 = "Disagreement with boss/co-worker";
          $sub_event2 = "New boss";
          $sub_event3 = "New close co-worker";

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;
        }

        elseif($event == "friends"){


          $sub_event1 = "New friend";
          $sub_event2 = "Quarrel with friend";
          $sub_event3 = "Separation from friend";
          $sub_event4 = "Reunion with friend";

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;
        }

        elseif($event == "illness"){

      

          $sub_event1 = "Start of illness";
          $sub_event2 = "Recovery from illness";

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;

        }

        elseif($event == "accident"){

    

          $sub_event1 = "Accident";
          $sub_event2 = "Recovery from accident";

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;
        }

        elseif($event == "habbit"){

    

          $sub_event1 = "Start of healthy habit";
          $sub_event2 = "Start of unhealthy habit";
          $sub_event3 = "End of unhealthy habit";
        }

        elseif($event == "gains"){



          $sub_event1 = "Expected gain";
          $sub_event2 = "Unexpected gain";

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;

        }

        elseif($event == "loss"){

    

          $sub_event1 = "Expected/Planned expense/loss";
          $sub_event2 = "Unexpected expense/loss";

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;

        }

        elseif($event == "decision"){



          $sub_event1 = "Invested in stock market/speculative";
          $sub_event2 = "Invested in fixed assets like real estate for investment purposes";
          $sub_event3 = "Car";
          $sub_event4 = "Bought house for staying";
          $sub_event5 = "Re-shuffling of funds or assets";

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;

        }

        elseif($event == "job"){
  
          
          $sub_event1 = "New primary job/position";
          $sub_event2 = "New secondary job";
          $sub_event3 = "CarPromotion";
          $sub_event4 = "Got fired";

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;

        }

        elseif($event == "study"){


          
          $sub_event1 = "Started study";
          $sub_event2 = "Changed field of study";
          

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;
        

        }

        elseif($event == "award"){
          
          $sub_event1 = "Received professional or academic award/recognition";

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;

        }

        elseif($event == "spiritualpractice"){

          // header("location:dataentry2.php");
          
          

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;
        }

        elseif($event == "spiritualmaster"){

          // header("location:dataentry.php");
          

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;

        }

        elseif($event == "spiritualexperience"){

          header("location:dataentry.php");
          
          

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;

        }

        elseif($event == "forstudies"){

          // header("location:dataentry.php");
          

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;

        }

        elseif($event == "forwork"){

          // header("location:dataentry.php");
          
          

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;

        }

        elseif($event == "forrelation"){

          // header("location:dataentry.php");
          

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;

        }

        elseif($event == "forpleasure"){

          // header("location:dataentry.php");
          
          

          // $_SESSION['sub_event1'] = $sub_event1;
          // $_SESSION['sub_event2'] = $sub_event2;
          // $_SESSION['sub_event3'] = $sub_event3;
          // $_SESSION['sub_event4'] = $sub_event4;
          // $_SESSION['sub_event5'] = $sub_event5;

        }



  


            
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

          ?>

        </div>

        <div><input type="date" class="form-control" name="edate" <?php echo" value= '" .$_SESSION['event_date']. "'"; ?>></div>
<!-- 
        <div class="btn-group1">Event Type
          <input type="radio" class="btn-check"  id ="option1" value="negative" name="event_type" autocomplete="off" required>
          <label class="btn btn-secondary" for="option1">Negative</label>

          <input type="radio" class="btn-check" id="option2" name="event_type" value="positive" autocomplete="off" required >
          <label class="btn btn-secondary" for="option2">Positive</label>
        </div> -->

        <label for="cars">Event type:</label>
  <select name="event_type" id="cars">
    <option value="negative">Negative</option>
    <option value="positive">Positive</option>
  </select>


        <div><input type="textarea"  class="form-control"name="description"  <?php echo" value= '" .$_SESSION['event_description']. "'"; ?>  required></div>
        <a href="#"><button class="btn btn-primary" type="submit" name="submit">Submit</button></a>
      </form>

    </div>
  </section>



</main><footer class="site-footer">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-3 col-md-6">
        <div class="site-footer-widget">
          <h5 class="site-footer-widget-title">Contact Info</h5>
          <p class="site-footer-widget-description">
            <a href="mailto:info@starailab.com">info@starailab.com</a>
          </p>
        </div>
      </div>
      
      
      <div class="col-lg-2 col-md-6">
        <div class="site-footer-widget">
          <h5 class="site-footer-widget-title">Sitemap</h5>
          <ul class="site-footer-widget-links">
            
            <li><a href="about.php">About Company</a></li>
            
            <li><a href="research.php">Astrology Research</a></li>
            
            <li><a href="trial.php">Trial Sign-up</a></li>
            
            <li><a href="careers.php">Careers</a></li>
            
            <li><a href="contact.php">Contact</a></li>
            
            <li><a href="privacy.php">Privacy</a></li>
            
          </ul>
        </div>
      </div>
      
      
      <div class="col-lg-2 col-md-6">
        <div class="site-footer-widget">
          <h5 class="site-footer-widget-title">Social Media</h5>
          <ul class="site-footer-widget-links">
            
              <li><a href="#">Twitter</a></li>
            
              <li><a href="#">Facebook</a></li>
            
              <li><a href="#">Youtube</a></li>
            
              <li><a href="#">Instagram</a></li>
            
          </ul>
        </div>
      </div>
      
      
      <div class="col-lg-3 col-md-6">
        <div class="site-footer-widget">
          <h5 class="site-footer-widget-title">Star AI:</h5>
          <p class="site-footer-widget-description">
            A Paradigm Shift in Astrology.<br/>We revolutionize astrology research with AI.
          </p>
        </div>
      </div>
      
      <div class="col-lg-2 col-12">
        <a href="#top" class="site-footer-widget-top">
          <img src="to-top.svg" alt="back-to-top">
          <p>
            Back 
            <br>
            Up
          </p>
        </a>
      </div>
    </div>
  </div>
</footer>


<script src="js/formhandler.min.js"></script>

<script src="js/vendor.min.js"></script>

<script src="js/script.min.js"></script></body>
</html>
