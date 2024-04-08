<?php
/* My File To Connect Me To A Table Called "Student" In My Database*/
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Buisness";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>