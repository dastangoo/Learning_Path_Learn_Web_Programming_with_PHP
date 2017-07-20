<?php

$db = new PDO('mysql:host=localhost;dbname=films', 'username', 'password');
$sql = 'SELECT * FROM country';
$stmt = $db->query($sql);
while (($row = $stmt->fetch()) !== false) {
  echo $row['country'] . "\n";
}
