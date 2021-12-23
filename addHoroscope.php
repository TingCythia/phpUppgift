<?php 

session_start();
require ("HoroscopeList.php");

    if(isset($_SERVER["REQUEST_METHOD"])) {

        if($_SERVER["REQUEST_METHOD"] === "POST") {
            
            if(!isset($_SESSION["horoscop"])) {

                $_SESSION["horoscop"] = serialize(getHoroscope($_POST["dates"]));  
                echo json_encode(true);
                exit;
               
            } else {
                echo json_encode(false."Horoscope already existed.");
                exit;
            }

        } else {
                echo json_encode("Not a POST method");
                exit;
            }
    } else {
        echo json_encode("Not a valid request");
        exit;

    }
        
 
?>