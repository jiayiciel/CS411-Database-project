<?php
 
// get the q parameter from URL
$q = $_REQUEST["q"];
 
$servername = "fa16-cs411-57.cs.illinois.edu";
$username = "watcher";
$password = "cs411fa2016";
$dbname = "imdb";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
$sql =  "SELECT m.`movie_title`, m.`movie_location`, c.`keyword` FROM `movieCrimes` as c INNER JOIN `moviesInTheUS` as m ON c.`movie_id` = m.`movie_id` WHERE m.`movie_title` LIKE '" .$q."%' LIMIT 10";
 
$result = $conn->query($sql);
 
 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["movie_title"] . ", " . $row["movie_location"] . ", " . $row["keyword"] . "<br>" . PHP_EOL;
    }
} else {
   echo "0 results";
}
$conn->close();
 
?>