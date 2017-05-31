<?php
// Understanding the Basics: Debugging an Applicaiton
// reading error messages

// generate a "notice"
echo $undefinedVariable;

// generate a "warning"
$text = 'Test';
echo strpos($text, 'Test', 5);

// generate a "warning"
echo 22/0;

// generate a "parse" error
$error = 'This is a string which doesn't have the ' escaped properly!';

// generate both a warning and a fatal error
// NOTE: "require" and a related command "include" is discussed in another lesson 

require 'some_file.txt';
