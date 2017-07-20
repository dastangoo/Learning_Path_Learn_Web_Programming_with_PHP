<?php
$email[] = "a@example.com";
$email[] = "Hi there";
$email[] = "Thanks for registering, hope you like it";

// old syntax
mail($email[0], $email[1], $email[2]);
mail(...$email);
