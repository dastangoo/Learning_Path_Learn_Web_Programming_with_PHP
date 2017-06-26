<?php
// Sample SELECT using mysqli
$user = 'class';
$pass = '123456';
$dbh = new mysqli('localhost', $user, $pass, 'class');
foreach ($dbh->query('SELECT name FROM `users`') as $row ) {
  echo implode(':', $row) . PHP_EOL;
}
