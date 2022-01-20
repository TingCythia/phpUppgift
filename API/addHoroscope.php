<?php 

session_start();
require ("./horoscopeList.php");

    if($_SERVER["REQUEST_METHOD"]) {

        if($_SERVER["REQUEST_METHOD"] === "POST") {
            
            if(!isset($_SESSION["horoscop"])) {
                $_SESSION["horoscop"] = serialize(get_Horoscop($_POST["date"]));  
                echo json_encode(true);
                exit;
               
            } else {
                echo json_encode(false);
                exit;
            }
        } else{
            echo json_encode("Wrong Post");
            exit;
        }
    }else {
        echo json_encode("Wrong Request");
        exit;
    } 
        
 
?>