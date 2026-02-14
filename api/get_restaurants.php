<?php
header('Content-Type: application/json');
require 'db.php'; 
$sql = "SELECT * FROM restaurants";
$result = $mysqli->query($sql);
$data = [];
while($row = $result->fetch_assoc()) { $data[] = $row; }
echo json_encode($data);