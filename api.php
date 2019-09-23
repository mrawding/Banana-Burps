<?php

    //this is the basic way of getting a database handler from PDO, PHP's built in quasi-ORM
    $dbhandle = new PDO("sqlite:scrabble.sqlite") or die("Failed to open DB");
    if (!$dbhandle) die ($error);
    $query = "SELECT rack, words FROM racks WHERE length=8 and weight <= 10 order by random() limit 0, 1";
    $statement = $dbhandle->prepare($query);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $rack = $results[0]["rack"];
    $racks  = [];
    for($i = 0; $i < pow(2, strlen($rack)); $i++){
	    $ans = "";
	    for($j = 0; $j < strlen($rack); $j++){
		    //if the jth digit of i is 1 then include letter
		    if (($i >> $j) % 2) {
		     $ans .= $rack[$j];
		    }
	    }
	    if (strlen($ans) > 1){
  	      $racks[] = $ans;	
    	}
    }
    $words = [];
    for each($racks as $value){
	     $query = "SELECT rack, words FROM racks WHERE rack = :val";
   	     $statement = $dbhandle->prepare($query);
	     $statement->bindValue(':val', $value);
  	     $statement->execute();
	     $result = $statement->fetchAll(PDO::FETCH_ASSOC);
	     $words[] = $result[0]["words"];
    }
    $words = array_unique($words);
    $racks = array_unique($racks);
    echo json_encode($words);
   
    header('HTTP/1.1 200 OK');
    //this lets the browser know to expect json
    header('Content-Type: application/json');
    //this creates json and gives it back to the browser
   

?>
