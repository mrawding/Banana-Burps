<?php

$cookie_name = "Highscore";
$cookie_value = 0;
$curent_score[] = explode("x=",$_SERVER["QUERY_STRING"]);
setcookie($cookie_name, $cookie_value);
echo json_encode $current_score[0];
//echo json_encode $current_score[0][1];
//if(!isset($_COOKIE[$cookie_name])) {
  //  echo json_encode $cookie_value;
//} else {
 //   if($_COOKIE[$cookie_value] < $score){
   //     $cookie_value = $score;
     //   setcookie($cookie_name, $cookie_value);
       // echo json_encode $_COOKIE[$cookie_value];
    //}
//}
    
    header('HTTP/1.1 200 OK');
    header('Content-Type: application/json');
   // echo json_encode($results);
?>
