<?php
// Sample SELECT using PDO query()

// database username
$user = 'class';
// database password
$pass = '123456';
// data source = mysql driver, localhost, databse = class
$dsn = 'mysql:host=localhost;dbname=class';

// PDO class represents the connection
$dbh = new PDO($dsn, $user, $pass);

// SQL Statement
$sql = 'SELECT * FROM `users` ORDER BY `state_province`, `city`;';

// Use query() for "one-time" SQL requests
// PDO::FETCH_ASSOC = return results in the form of an associattive array
echo '<h3>Users Sorted by State and City</h3>', '<hr />', PHP_EOL;
echo '<table border=1>', PHP_EOL;
foreach ($dbh->query($sql, PDO::FETCH_ASSOC) as $row ) {
  // each $row = an associative array representing one row in the database
  // the key = the column name
  echo '<tr><td>', implode('</td><td>', $row), '</td></tr>', PHP_EOL;
}

// closes the database connection
echo '</table>', PHP_EOL;
$dbh = NULL;
