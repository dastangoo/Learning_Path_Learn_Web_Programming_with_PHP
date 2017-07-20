<?php
$clean_data = filter_input_array(INPUT_POST, array(
  // each field in turn, with desired defintion
  'name' => FILTER_SANITIZE_STRING,
  'email' => FILTER_VALIDATE_EMAIL
));

var_dump($clean_data);
