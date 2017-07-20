<?php

$db = new PDO('mysql:host=localhost;dbname=films', 'username', 'password');
$sql = 'SELECT * FROM film WHERE title = :film and language_id = :lang';
$stmt = $db->prepare($sql);
$stmt -> setFetchMode(PDO::FETCH_ASSOC);
$stmt -> bindValue(":lang", 1);
$stmt -> bindValue(":film", "ACADEMY DINOSAUR");
$stmt -> execute();
$row = $stmt->fetch();
print_r($row);

$stmt -> bindValue(":film", "ANTITRUST TOMATOES");
$stmt -> execute();
$row = $stmt->fetch();
print_r($row);
}
