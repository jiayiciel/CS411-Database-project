<?php
 
// get the q parameter from URL
$q = $_REQUEST["q"];
 
//127.0.0.1/imdb
//'mysql://root:cs411fa2016@127.0.0.1/imdb'
//typedb://username:password@host/yourdbname
 
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
 
$sql = "SELECT * FROM `moviesInTheUS` as m WHERE m.`movie_location` LIKE '%" .$q."%' LIMIT 10";
 
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["movie_title"] . "<br>" . PHP_EOL;
    }
} else {
    echo "0 results";
}
$conn->close();
 
?>