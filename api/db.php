<?php
// db.php
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'xp_safefood'; // แก้ชื่อตัวแปรให้ตรงกัน

// ใช้ $DB_NAME ให้ตรงกับที่ประกาศไว้ด้านบน
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($mysqli->connect_error) {
    http_response_code(500);
    die('DB connection failed: ' . $mysqli->connect_error);
}

$mysqli->set_charset('utf8mb4');
?>