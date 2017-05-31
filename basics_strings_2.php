<?php
$untrimmedstring = ' This is a string with spaces on the end.    ';
$lengthUntrimmed = strlen($untrimmedstring);
$trimmedString = trim($untrimmedstring);
$lengthTrimmed = strlen($trimmedString);
printf('<br />String Before --->|%s|<---', $untrimmedstring);
printf('<br />String After --->|%s|<---', $trimmedString);
printf('<br />Length Before ---> %d', $lengthUntrimmed);
printf('<br />Length After ---> %d', $lengthTrimmed);
