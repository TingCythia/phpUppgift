<?php
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == 'DELETE') {
    if (isset($_SESSION["horoscop"])) {
        unset($_SESSION["horoscop"]);
        echo json_encode(true);
    } else {
        echo json_encode(false);
    }
  }
?>