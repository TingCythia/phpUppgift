<?php 

    session_start();

    if(isset($_SERVER["REQUEST_METHOD"])) {

        if($_SERVER["REQUEST_METHOD"] === "POST") {
            
            if (isset($_POST["dates"])) {

                if(isset($_SESSION["horoscop"])) {

                require("HoroscopeList.php");

                $_SESSION["horoscop"] = serialize(getHoroscope($_POST["dates"])); 

                echo json_encode(unserialize($_SESSION["horoscop"]));
                }

            } else {
                echo json_encode("False");
            } 
        } 
    } 
    
?>