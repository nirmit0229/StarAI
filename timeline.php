<?php 
session_start();

    if ($_SESSION['user']==true) {
        # code...
          $sub_event1 = $_SESSION['sub_event1'];
        $sub_event2 = $_SESSION['sub_event2'];
        $sub_event3 = $_SESSION['sub_event3'];
        $sub_event4 = $_SESSION['sub_event4'];
        $sub_event5 = $_SESSION['sub_event5'];
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
  <link rel="stylesheet" href="css/font-awesome.css" />
  <!-- Main Stylesheets -->
  <link rel="stylesheet" href="css/alter.css" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/timeline.css" rel="stylesheet" />

  
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


<section class="timeline" style="background-image: url('backgrounds/cta-background.jpg'); margin-top: 50px;">


  <?php 

  if(isset($_GET['person_id']))  {

      $conn = mysqli_connect("localhost", "root", "", "starai");
                        // Check connection
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        }

        $ID = mysqli_real_escape_string($conn, $_GET['person_id']);  
        $_SESSION['ID'] = $ID;

        // echo "  <div>  <h1>My Life</h1> </div>";

      $sql = "SELECT  `person_id`, `birth_date`, `birth_time`, `place_of_birth`, `sex`, `timezone`, `email`, `record_created` FROM `person` WHERE person_id = '$ID'";
      
                            $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          echo "<br><br><p style='font-size:45px; color:#17a2b8;'>My Timeline</p><br>";
                        echo "<p style='font-size:22px;'> Birth Date: " . $row["birth_date"] . "</p>";
                        echo "<p style='font-size:22px;'> Birth Time: " . $row["birth_time"] . "</p>";
                        echo "<p style='font-size:22px;'> Birth Place: " . $row["place_of_birth"] . "</p>";
                        echo "<p style='font-size:22px;'> Sex: " . $row["sex"] . "</p>";
                        echo "<p style='font-size:22px;'> email: " . $row["email"] . "</p>";
                        echo "<br><br>";
                        
                    }

                }


                $sql = "SELECT  `person_id`, `area`, `event`, `sub_event`, `event_type`, `event_date`, `event_description` FROM `event` WHERE person_id = '$ID' ORDER BY `event_date`";
      
                            $result = $conn->query($sql);

                             echo "<div class='container-time'>";
                            // echo "<div class='top-section'>
                            //   <h1>Your Timeline</h1>
                            // </div>";

                            echo "<div class='timeline'>      <div class='line'></div>";


                        if ($result->num_rows > 0) {
                        // output data of each row
                          //$i = "1";

                       
                        
                        while($row = $result->fetch_assoc()) {
                        // echo "<p style='font-size:45px; color:#17a2b8;'>Event ".$i.": </p> <br>";

                        $event = $row['event'];
                        $area = $row['area'];
                        $sub_event = $row['sub_event'];
                        $event_description = $row['event_description'];
                        $date = $row['event_date'];

                        // echo "<p style='font-size:23px;'> Area: " . $row["area"] . "</p> ";
                        // echo "<p style='font-size:23px;'> Event: " . $row["event"] . "</p>";
                        // echo "<p style='font-size:23px;'> Sub Event: " . $row["sub_event"] . "</p>";
                        // echo "<p style='font-size:23px;'> Event type: " . $row["event_type"] . "</p>";
                        // echo "<p style='font-size:23px;'> Event date: " . $row["event_date"] . "</p>";
                        // echo "<p style='font-size:23px;'> Event description: " . $row["event_description"] . "</p> <br><br>";


                              echo "<div class='section'>";
                                echo "<div class='bead'></div>
                                <div class='content-time'>
                                  <h2 class='primary'>" . $row["event_date"] . "</h2>
                                  <p> Area: " . $row["area"] . "</p>
                                  <p> Event: " . $row["event"] . "</p>
                                  <p> Sub Event: " . $row["sub_event"] . "</p>
                                  <p> Event description: " . $row["event_description"] . "</p>";

                     echo "<a href='update.php?person_id={$ID}&event={$event}&event_description={$event_description}&area={$area}&event_date={$date}'><button class='btn btn-primary'>Edit</button></a><br><br><br><br>"; 


                               echo " </div>
                              </div>";

                        //$i++;

                                              
                    }

                 

                }  

                   echo "</div></div>";

                echo "<a href='add_event.php?person_id={$ID}'>
                <button class='btn btn-primary'>Add new event</button></a>
                <br><br>";          


               echo "<a href='download.php?person_id={$ID}'>
                <button class='btn btn-primary'>Download</button></a>
                <br><br>";

                //echo " <button class='btn btn-primary' value='Copy Url' onclick='Copy();' style='margin-bottom:20px;'>Copy URL</button>";


        }
        
        



if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $link = "https";
else
    $link = "http";
  
// Here append the common URL characters.
$link .= "://";
  
// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];
  
// Append the requested resource location to the URL
$link .= $_SERVER['REQUEST_URI'];
      
// Print the link
//echo $link;



//echo "<input type='text' value='www.starailab.com?person_id={$ID}' id='myInput' style='display: none;''>
//<button class='btn btn-primary' onclick='myFunction()' style='padding-bottom: 20px;'>Copy text</button>";

  ?>

<input type="text" class="" value=" <?php echo $link; ?> " id="myInput" style="width: 30%;">
<button class="btn btn-primary" onclick="myFunction()" style="margin-bottom: 20px;">Copy Link to My Data</button>

<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>



<!--   <div class="container-time">
    <div class="top-section">
      <h1>Your Timeline</h1>
    </div>

    <div class="timeline">
      <div class="line"></div>

      <div class="section">
        <div class="bead"></div>
        <div class="content-time">
          <h2>WEb design</h2>
          <p>sfwefwefwefwefwefwefwefwefwe
          fwefwefwefwefwefwefweef</p>
        </div>
      </div>
</div>
</div> -->

    





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


<script src="js/formhandler.js"></script>

<script src="js/timeline.js"></script>

<script src="js/vendor.js"></script>

<script src="js/script.js"></script></body>
</html>
