<?php
header('Content-Type: application/json');
$cookie_name = "Highscore";
$cookie_value = 0;
$request_body = file_get_contents('php://input');
$score = json_decode($request_body);
//$score_int = $score["score"];
$score_key = "score";
setcookie($cookie_name, $cookie_value);
$score_int = $score->$score_key;

//echo json_encode $current_score[0][1];
if(!isset($_COOKIE[$cookie_name])) {
    echo json_encode($_COOKIE[$cookie_name]);
} else {
    if($_COOKIE[$cookie_value] <= $score_int){
        $cookie_value = $score_int;
         setcookie($cookie_name, $cookie_value);
         
    }
    echo json_encode($_COOKIE[$cookie_name]);
}

    
    header('HTTP/1.1 200 OK');
  
   // echo json_encode($results);
?>
