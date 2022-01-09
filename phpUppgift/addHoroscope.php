<?php 

session_start();
require "./horoscopeList.php";

    if(isset($_SERVER["REQUEST_METHOD"])) {

        if($_SERVER["REQUEST_METHOD"] === "POST") {
            
            if(!isset($_SESSION["horoscop"])) {

                if (isset($_POST["Date"])) {
                    $horoscop = get_Horoscop($_POST["Date"]);
                    $_SESSION["horoscop"] = serialize($horoscop);
                    echo json_encode(true);
                } else {
                    echo json_encode("Date is not set in body");
                }
            } else {
                echo json_encode(false);
            }
        } else {
            echo json_encode("not a Post method");
        }
    } else {
        echo json_encode("No valid request");
    }
    
 
?>