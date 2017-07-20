<?php
$pass = "secretpassword";
$hashed = password_hash($pass, PASSWORD_DEFAULT);
echo $hashed;
