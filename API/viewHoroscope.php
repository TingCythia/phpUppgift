<?php 

session_start();


if(isset($_SERVER["REQUEST_METHOD"])) {

    if($_SERVER["REQUEST_METHOD"] === "GET") {

        if(isset($_SESSION["horoscop"])) {

            $horoscop = json_encode(unserialize($_SESSION["horoscop"]));
            echo $horoscop;
            
        } else {
            echo json_encode(false);
            exit;
        } 
        
    }

} 