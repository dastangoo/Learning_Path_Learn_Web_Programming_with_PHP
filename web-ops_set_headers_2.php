<?php
// Managing Web Operations: Setting Headers and Performing Redirection
// header(header_string, replace T or F, status_code)

// read file into $jpg
$filename = './pic.JPG';
$jpg = file_get_contents($filename);

// sets content type
header('Content-Type: image/jpeg');

// sets length
header('Content-Lenght: ' . strlen($jpg));

// sets disposition
header('Content-Disposition: inline; filename="' . $filename . '"');

// display graphic
echo $jpg;
?>
