<?php

    //this is the basic way of getting a database handler from PDO, PHP's built in quasi-ORM
    $dbhandle = new PDO("sqlite:scrabble.sqlite") or die("Failed to open DB");
    if (!$dbhandle) die ($error);
    $query = "SELECT rack, words FROM racks WHERE length=8 and weight <= 10 order by random() limit 0, 1";
    $statement = $dbhandle->prepare($query);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $rack = $results[0]["rack"];
    echo $rack;
    //$query1 = "SELECT words FROM racks WHERE rack=.$rack";
    //$statement1 = $dbhandle->prepare($query1);
    //$statement1->execute();
    //$results1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
    //echo json_encode($results1);
    //function findPossibleWords($results)
    //{
      //  $query1 = "SELECT rack, words FROM racks WHERE length <= 3 and LIKE $results";
        //$statement1 = $dbhandle->prepare($query1);
        //$statement1->execute();
        //$results1 = $statement->fetchAll(PDO::FETCH_ASSOC);
        //echo json_encode($results1);
    //}
    
   // findPossibleWords($results);
    //this part is perhaps overkill but I wanted to set the HTTP headers and status code
    //making to this line means everything was great with this request
    header('HTTP/1.1 200 OK');
    //this lets the browser know to expect json
    header('Content-Type: application/json');
    //this creates json and gives it back to the browser
   

?>
