<?php
require 'db.php';
header('Content-Type: application/json; charset=utf-8');

$sql = "SELECT id, slug, name FROM categories ORDER BY id";
$res = $mysqli->query($sql);

$rows = [];
while ($r = $res->fetch_assoc()) $rows[] = $r;

echo json_encode(['ok'=>true, 'data'=>$rows], JSON_UNESCAPED_UNICODE);
