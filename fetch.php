<?php
    $dbhandle = new PDO("sqlite:scrabble.sqlite") or die("Failed to open DB");
    if (!$dbhandle) die ($error);
    $json_queries = $_SERVER['QUERY_STRING'];
    $php_obj = json_decode(json_queries);
    printr($php_obj);
    echo($php_obj[0]->text);
    $query = "SELECT rack, words FROM racks WHERE words LIKE '%$in%'";
    $statement = $dbhandle->prepare($query);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    header('HTTP/1.1 200 OK');
    header('Content-Type: application/json');
   // echo json_encode($results);
?>
