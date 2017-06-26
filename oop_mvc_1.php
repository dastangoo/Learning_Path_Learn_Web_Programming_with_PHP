<?php
// Managing the Code -- OOP: Introducing the MVC Design Pattern

include './classes/Controller.php';

$controller = new Controller();
echo $controller->showUserInfo(1);
