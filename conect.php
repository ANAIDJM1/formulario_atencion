<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'valencia_reviews');
define('DB_PASSWORD', 'W2jfFl9UHRawb');
define('DB_NAME', 'valencia_reviews');

/* Attempt to connect to MySQL database */
$conection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($conection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
