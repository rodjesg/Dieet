<?php

// Bij de Windows opgegving is er geen wachtwoord nodig. 
$servername = "127.0.0.1";
// Online heb je een andere username & password Diuser & F-ww.
$username = "root";
$password = "root";
$database = "Dieet";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
