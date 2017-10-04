<?php
 
// get the q parameter from URL
$q = $_REQUEST["q"]; // q is location
$conf = $_REQUEST["conf"]; //conf is crime rate
 
//echo "q is " . $q;
 
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
 
$sql = "SELECT * FROM `actualCrimeRates` as m WHERE m.`city_state` = '" .$q."'";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // output data of each row
    echo "Your city already exists in the table!";
} else {
    $insert = "INSERT INTO `actualCrimeRates` VALUES ('" .$conf. "', '" .$q. "')"; //first param should be cRate, second should be location
    $ins = $conn->query($insert);
    echo "Inserted (" .$conf. ", " .$q. ") into actualCrimeRates table.";
}
 
 
$conn->close();
 
?>