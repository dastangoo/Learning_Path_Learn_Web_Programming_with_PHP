<?php
$password = 'secret';
$salt = 'salt';

$hash = md5($password);
echo $hash;
$hash_salted = md5($password + $salt);
echo $hash;
