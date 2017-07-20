<?php
$existing_hash = '$2y$10$xzaUnd522MFW1rLlTx7oHeTJmN8cjPyWLRazXtVYoonVpXRAEYKW2';
$pass = "secretpassword";

if (password_verify($pass, $existing_hash)) {
  echo "All good";
}
else {
  echo "Go away";
}
