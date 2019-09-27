<?php
session_start();
$current_score = [];
$curent_score[] = explode("x=",$_SERVER['QUERY_STRING']);
if (!isset($_SESSION["highscore"])){
    $_SESSION["HighScore"] = "0";
} else {
    if($current_score[0][1] > $_SESSION["highscore"]){
            $_SESSION["highscore"] = $currrent_score[0][1];
         }
}
    
    
    echo json_encode($_SESSION["HighScore"]);
    header('HTTP/1.1 200 OK');
    header('Content-Type: application/json');
   // echo json_encode($results);
?>
