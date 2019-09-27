<?php
session_start();
$current_score = [];
$curent_score[] = explode("x=",$_SERVER['QUERY_STRING']);
if (!isset($_SESSION["highscore"])){
    $_SESSION["highscore"] = 0;
} else {
    if((int)$current_score[0][1] > $_SESSION["highscore"]){
            $_SESSION["highscore"] = (int)$currrent_score[0][1];
         }
}
    
    
    echo json_encode($_SESSION["highscore"]);
    header('HTTP/1.1 200 OK');
    header('Content-Type: application/json');
   // echo json_encode($results);
?>
