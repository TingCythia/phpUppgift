<?php 

session_start();

require "./horoscopeList.php";

if(isset($_SERVER["REQUEST_METHOD"])) {

    if($_SERVER["REQUEST_METHOD"] === "GET") {

        if(isset($_SESSION["horoscop"])) {

        echo json_encode(unserialize($_SESSION["horoscop"]));
        } else {
            echo json_encode("");
        }
    } else {
        echo json_encode("not a Get method");
    }
} else {
    echo json_encode("No valid request");
}

?>