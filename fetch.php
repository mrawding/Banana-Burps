<?php
    header("Content-Type: application/json; charset=UTF-8");
    $curent_score[] = explode("x=",$_SERVER['QUERY_STRING']);
    session_start();
    
    echo json_encode($curent_score[1]);
    if (!isset($_SESSION["HighScore"])){
    $_SESSION["HighScore"] = 0;
    }
    else{
    if($current_score[0] > $_SESSION["HighScore"]){
        $_SESSION["HighScore"] = $currrent_score[0];
    }
    }
   // echo json_encode($_SESSION["HighScore"]);
    header('HTTP/1.1 200 OK');
    header('Content-Type: application/json');
   // echo json_encode($results);
?>
