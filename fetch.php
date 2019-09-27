<?php
    session_start();
    $curent_score = $_GET["x"];
    echo json_encode($current_score);
    if (!isset($_SESSION["HighScore"])){
    $_SESSION["HighScore"] = 0;
    }
    else{
    if($current_score > $_SESSION["HighScore"]){
        $_SESSION["HighScore"] = $currrent_score;
    }
    }
   // echo json_encode($_SESSION["HighScore"]);
    header('HTTP/1.1 200 OK');
    header('Content-Type: application/json');
   // echo json_encode($results);
?>
