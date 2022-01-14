<?php 
session_start();

    if ($_SESSION['user']==true) {
        # code...
        $sub_event1 = $_SESSION['sub_event1'];
        $sub_event2 = $_SESSION['sub_event2'];
        $sub_event3 = $_SESSION['sub_event3'];
        $sub_event4 = $_SESSION['sub_event4'];
        $sub_event5 = $_SESSION['sub_event5'];


        // $checked1 = $_SESSION['checked1'];
        // $checked2 = $_SESSION['checked2'];
        // $checked3 = $_SESSION['checked3'];
        // $checked4 = $_SESSION['checked4'];
        // $checked5 = $_SESSION['checked5'];
        // $checked6 = $_SESSION['checked6'];
        // $checked7 = $_SESSION['checked7'];
        // $checked8 = $_SESSION['checked8'];
        // $checked9 = $_SESSION['checked9'];
        // $checked10 = $_SESSION['checked10'];
        // $checked11 = $_SESSION['checked11'];
        // $checked12 = $_SESSION['checked12'];
        // $checked13 = $_SESSION['checked13'];
        // $checked14 = $_SESSION['checked14'];
        // $checked15 = $_SESSION['checked15'];
        // $checked16 = $_SESSION['checked16'];
        // $checked17 = $_SESSION['checked17'];
        // $checked18 = $_SESSION['checked18'];
        // $checked19 = $_SESSION['checked19'];
        // $checked20 = $_SESSION['checked20'];
        // $checked21 = $_SESSION['checked21'];
        // $checked22 = $_SESSION['checked22'];


        // $checkeda1 = $_SESSION['checkeda1'];
        // $checkeda2 = $_SESSION['checkeda2'];
        // $checkeda3 = $_SESSION['checkeda3'];
        // $checkeda4 = $_SESSION['checkeda4'];
        // $checkeda5 = $_SESSION['checkeda5'];
        // $checkeda6 = $_SESSION['checkeda6'];
        // $checkeda7 = $_SESSION['checkeda7'];

    }
    else{
        header("location:index.php");
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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

  <p class="p">Use the menu to select the area of life, event type on the left, and specify details of the event on the right. After you enter your events you will be able to view and download your Life Timeline. Because we do not save any personally identifiable information, please click "Copy URL" to save the URL for your entry to be able to come back to view and edit your data in the future.</p>


  <script src="submit.js"></script>

  <form method="POST">
    
          <div class="wrapper1">
        <div class="radio_tabs">
          <label class="radio_wrap" data-radio="radio_1">
            <input type="radio" name="areas" value="relationships" class="input" required>
            <span class="radio_mark">
              Relationships
            </span>
          </label>
            
    
          <label class="radio_wrap" data-radio="radio_2">
            <input type="radio" name="areas" class="input" value="health" required>
            <span class="radio_mark">
             Health
             </span> 
          </label>
          
          <label class="radio_wrap" data-radio="radio_3">
            <input type="checkmark" name="areas" class="input" value="financial" required>
<!--             <span class="radio_mark"> -->
              Financial
<!--             </span> -->
          </label>
          <label class="radio_wrap" data-radio="radio_4">
            <input type="checkmark" name="areas" class="input" value="career" required>
         <!--    <span class="radio_mark"> -->
              Career
<!--             </span> -->
          </label>
          <label class="radio_wrap" data-radio="radio_5">
            <input type="checkmark" name="areas" class="input" value="spiritual" required>
<!--             <span class="radio_mark"> -->
              Spiritual
<!--             </span> -->
          </label>
          <label class="radio_wrap" data-radio="radio_6">
            <input name="areas" class="input" value="travel" required>
            <span class="radio_mark">
              Travel
            </span>
          </label>
          <label class="radio_wrap" data-radio="radio_7">
            <input type="checkmark" name="areas" class="input" value="other" required>
<!--             <span class="radio_mark"> -->
              Other
<!--             </span> -->
          </label>
        </div>

        <div class="content">

          <div class="radio_content radio_1">
            <label class="container1">Romantic
                <input type="radio" name="radio" id="radio" value="romantic"   onchange="SubmitFormData();" required>
                <!-- <span class="checkmark"></span> -->
            </label>

            <label class="container1">Family
                <input type="radio" name="radio" id="radio" value="family"   onchange="SubmitFormData();" required>
               <!--  <span class="checkmark"></span> -->
            </label>

            <label class="container1">Professional
                <input type="radio" name="radio" id="radio" value="profession" onchange="SubmitFormData();" required>
                <!-- <span class="checkmark"></span> -->
            </label>

            <label class="container1">Friends
                <input type="radio" name="radio" id="radio" value="friends"  onchange="SubmitFormData();" required>
               <!--  <span class="checkmark"></span> -->
            </label>

          </div>

          <div class="radio_content radio_2">
            <label class="container1">Illness
                <input type="radio" name="radio" id="radio" value="illness" onchange="SubmitFormData();" required>
                <!-- <span class="checkmark"></span> -->
            </label>

            <label class="container1">Accident
                <input type="radio" name="radio" id="radio" value="accident" onchange="SubmitFormData();" required>
            <!--     <span class="checkmark"></span> -->
            </label>

            <label class="container1">Habbit
                <input type="radio" name="radio" id="radio" value="habbit" onchange="SubmitFormData();" required>
          <!--       <span class="checkmark"></span> -->
            </label>
          </div>

          <div class="radio_content radio_3">
            <label class="container1">Gains
                <input type="radio" name="radio" id="radio" value="gains"  onchange="SubmitFormData();" required>
               <!--  <span class="checkmark"></span> -->
            </label>

            <label class="container1">Losses
                <input type="radio" name="radio" id="radio" value="loss" onchange="SubmitFormData();" required>
            <!--     <span class="checkmark"></span> -->
            </label>

            <label class="container1">Decisions
                <input type="radio" name="radio" id="radio" value="decision" onchange="SubmitFormData();" required>
               <!--  <span class="checkmark"></span> -->
            </label>
          </div>

          <div class="radio_content radio_4">
            <label class="container1">Job/Position
                <input type="radio" name="radio" id="radio" value="job"  onchange="SubmitFormData();" required>
               <!--  <span class="checkmark"></span> -->
            </label>

            <label class="container1">Study
                <input type="radio" name="radio" id="radio" value="study" onchange="SubmitFormData();" required>
      <!--           <span class="checkmark"></span> -->
            </label>

            <label class="container1">Award/Recognition
                <input type="radio" name="radio" id="radio" value="award" onchange="SubmitFormData();" required>
              <!--   <span class="checkmark"></span> -->
            </label>
          </div>

          <div class="radio_content radio_5">
            <label class="container1">Started spiritual practice
                <input type="radio" name="radio" id="radio" value="spiritualpractice" onchange="SubmitFormData();" required>
              <!--   <span class="checkmark"></span> -->
            </label>

            <label class="container1">Met spiritual master
                <input type="radio" name="radio" id="radio" value="spiritualmaster" onchange="SubmitFormData();" required>
                <!-- <span class="checkmark"></span> -->
            </label>

            <label class="container1">Siginificant spiritual experience
                <input type="radio" name="radio" id="radio" value="spiritualexperience" onchange="SubmitFormData();" required>
              <!--   <span class="checkmark"></span> -->
            </label>
          </div>

          <div class="radio_content radio_6">
            <label class="container1">For Studies
                <input type="radio" name="radio" id="radio" value="forstudies"  onchange="SubmitFormData();" required>
               <!--  <span class="checkmark"></span> -->
            </label>

            <label class="container1">For Work
                <input type="radio" name="radio" id="radio" value="forwork" onchange="SubmitFormData();" required>
              <!--   <span class="checkmark"></span> -->
            </label>

            <label class="container1">For relationship
                <input type="radio" name="radio" id="radio" value="forrelation" onchange="SubmitFormData();" required>
               <!--  <span class="checkmark"></span> -->
            </label>
            <label class="container1">For pleasure
                <input type="radio" name="radio" id="radio" value="forpleasure" onchange="SubmitFormData();" required>
             <!--    <span class="checkmark"></span> -->
            </label>
          </div>

          <div class="radio_content radio_7">
            <label class="container1">Children
                <input type="radio" name="radio" id="radio" value="children" onchange="SubmitFormData();" required>
            <!--     <span class="checkmark"></span> -->
            </label>

            <label class="container1">Other
                <input type="radio" name="radio" id="radio" value="other"  onchange="SubmitFormData();" required>
               <!--  <span class="checkmark"></span> -->
            </label>
          </div>
          
        </div>
      </div>  


   
     <!-- <input type="button" id="SubmitFormData" onchange="SubmitFormData();" id="radio" value="Submit" /> -->
   </form>
   <!-- <br/>
   Your data will display below..... <br />
   ==============================<br /> -->
   <div id="results">
      <!-- All data will display here  -->
   </div>


  



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

<script src="js/vendor.js"></script>

<script src="js/script.js"></script></body>
</html>
