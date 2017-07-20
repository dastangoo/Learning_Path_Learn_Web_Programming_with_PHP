<?php
$message = "hai";
$decorated = \MyApp\decorate($message);

echo $decorated;

$user1 = new \MyApp\User(42);

use \MyApp\User;
$user2 = new User(42);

use \MyApp\User as Human;
$user3 = new Human(42);
