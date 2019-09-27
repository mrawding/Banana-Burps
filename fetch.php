<?php
    session_start();
    $curent_score = json_decode($_GET["x"], false);
    $_SESSION("HighScore") = 0;
    if($current_score > $_SESSION("HighScore")
    $_SESSION("HighScore") = $currrent_score;
    echo json_encode($_SESSION("HighScore"));
    header('HTTP/1.1 200 OK');
    header('Content-Type: application/json');
   // echo json_encode($results);
?>
