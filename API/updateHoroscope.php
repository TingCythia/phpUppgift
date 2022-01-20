<?php 

session_start();
require "./horoscopeList.php";

if ($_SERVER["REQUEST_METHOD"]) {

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

            if ($_POST['date']) {
              
                if($_SESSION["horoscop"]){
                $horoscop = get_Horoscop($_POST['date']);
                $_SESSION["horoscop"] = serialize($horoscop);
                echo json_encode(true);
            } else {
                echo json_encode(false);
                exit;
            }
        }else{
            echo json_encode(false);
            exit;
        }
    }else{
       echo json_encode("Wrong request");
       exit;
    }
}

?>