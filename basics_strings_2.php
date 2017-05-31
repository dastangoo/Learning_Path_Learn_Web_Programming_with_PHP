<?php
// Understanding the Basics: Working with Strings
// trim() removes space from *both* beginning and end of a string

// assing a value
$untrimmedstring = ' This is a string with spaces on the end.    ';

// use strlen() to get the length of the untrimmed string
$lengthUntrimmed = strlen($untrimmedstring);

// now apply trim()
$trimmedString = trim($untrimmedstring);

// get the length of the trimmed string
$lengthTrimmed = strlen($trimmedString);

// dispaly the results:
printf('<br />String Before --->|%s|<---', $untrimmedstring);
printf('<br />String After --->|%s|<---', $trimmedString);
printf('<br />Length Before ---> %d', $lengthUntrimmed);
printf('<br />Length After ---> %d', $lengthTrimmed);
