<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="css/alter.css" />

</head>
<body>


    <?php

        require_once('vendor/autoload.php');
        require_once('user_connection.php');

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->SetDefaultBodyCSS('background', "url('backgrounds/cta-background.jpg')");

        if(isset($_GET['person_id']))  {

            $conn = mysqli_connect("localhost", "root", "", "starai");
                            // Check connection
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }

            $ID = mysqli_real_escape_string($conn, $_GET['person_id']);  
            $_SESSION['ID'] = $ID;

            $sql = "SELECT  `person_id`, `birth_date`, `birth_time`, `place_of_birth`, `sex`, `timezone`, `email`, `record_created` FROM `person` WHERE person_id = '$ID'";

            $data .= '<img src="logos/logo_horizontal.png" alt="logo" /><br><br>';



            $data .= '<h1 style="text-align: center; color:#ecaa1e; font-size: 30px;">Your Timeline:</h1>';
            $mpdf->WriteHTML($data);
            
                                $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $data= "<br>";
                            $data .= "<p style='font-size:22px; text-align: center;'> Birth Date: " . $row["birth_date"] . "</p>";
                            $data .= "<p style='font-size:22px; text-align: center;'> Birth Time: " . $row["birth_time"] . "</p>";
                            $data .= "<p style='font-size:22px; text-align: center;'> Birth Place: " . $row["place_of_birth"] ." </p>";
                            $data .= "<p style='font-size:22px; text-align: center;'> Sex: ". $row["sex"] . "</p>";
                            $data .= "<p style='font-size:22px; text-align: center;'> email: " . $row["email"] . "</p>";
                            $data .= "<br><br>";
                            
                        }

                        $mpdf->WriteHTML($data);

                    }


                    $sql = "SELECT  `person_id`, `area`, `event`, `sub_event`, `event_type`, `event_date`, `event_description` FROM `event` WHERE person_id = '$ID'";
            
                                $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                                $i = "1";
                            while($row = $result->fetch_assoc()) {
                            $data= "<h3 style='text-align: center; color:#17a2b8; font-size: 25px;'>Event ".$i.": </h3>";

                            $event = $row['event'];
                            $area = $row['area'];
                            $sub_event = $row['sub_event'];
                            $event_description = $row['event_description'];

                            $data .= "<p style='font-size:23px; text-align: center;'> Area: " . $row["area"] . "</p>";
                            $data .= "<p style='font-size:23px; text-align: center;'> Event: " . $row["event"] . "</p>";
                            $data .= "<p style='font-size:23px; text-align: center;'> Sub Event: " . $row["sub_event"] . "</p>";
                            $data .= "<p style='font-size:23px; text-align: center;'> Event type: " . $row["event_type"] . "</p>";
                            $data .= "<p style='font-size:23px; text-align: center;'> Event date: " . $row["event_date"] . "</p>";
                            $data .= "<p style='font-size:23px; text-align: center;'> Event description: " . $row["event_description"] . "</p> <br><br>";
                            $i++;

                            $mpdf->WriteHTML($data);

                                                    
                        }

                    }  

                }

                $mpdf->Output('Timeline.pdf','D');

    ?>

</body>
</html>