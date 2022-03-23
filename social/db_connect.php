

<?php
$dbhost="localhost";

$dbuser="root";
$dbpass= "Topy@2030";
$dbname="social_db.sql";

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error){
  die("could not connect to the DB!".$conn->connect_error);
}

?>
