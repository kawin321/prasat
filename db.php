<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'sims';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}
?>
