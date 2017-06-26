<?php
// Sample SELECT using PDO query()

// database username
// database username
$user = 'class';
// database password
$pass = '123456';
// data source = mysql driver, localhost, databse = class
$dsn = 'mysql:host=localhost;dbname=class';

// use try { // code } catch (PDOException $e) { // code } to trap errors
try {
  // PDO attributes start with PDO::ATTR_*
  // This example turns on error reporting
  $pdc = new PDO($dsn, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

  // "outer" SQL statement to get a list of user names and IDs
  $sqlUsers = 'SELECT `user_id`, `name` FROM `users` ORDER BY `name`';

  // prepared statement
  // NOTE: SUM('sale_price') AS s
  
} catch (Exception $e) {

}
