<?php 
$servername = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "blog";

$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("DB connect failed: " . $conn->connect_error);
}
if (!$conn->set_charset("utf8mb4")) {
    die("Error loading character set utf8mb4: " . $conn->error);
} 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);