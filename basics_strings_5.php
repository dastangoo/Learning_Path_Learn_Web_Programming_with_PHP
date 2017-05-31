<?php
// Understanding the Basics: Working with Strings
// use str_replace() or str_ireplace() to replace portions of a string

// assign a value
$text1 = 'The quick brown fox jumped over the fence. Quick as a wink he was gone.';

// replace 'wink' with 'turtle'
$text2 = str_replace('wink', 'turtle', $text1);

// replace 'quick' with 'slow'
// NOTE: 2nd 'slow' is lowercase!
$textSlow1 = str_replace('quick', 'slow', $text2);

// replace 'quick' with 'slow' case insensitive
// NOTE: 2nd 'slow' is lowercase!
$textSlow2 = str_ireplace('quick', 'slow', $text2);

// locate position of the 'Quick' using strpos()
$pos = strpos($text2, 'Quick');

// split string using substr()
$string1 = trim(substr($text2, 0, $pos));
$string2 = trim(substr($text2, $pos));

// glue back together with replacements
// NOTE: we use "ucfirst()" instead of "ucwords()" to only replace 1st character!
$nextText = str_ireplace('quick', 'slow', $string1) . ' ' . ucfirst(str_ireplace('quick', 'slow', $string2));


// display the results:
// NOTE: use 'single quotes' for text and "double quotes" if you need variables to expanded
echo '<table border="1">';
echo "<tr><th>Original</th><td>$text1</td></tr>";
echo "<tr><th>Turtle</th><td>$text2</td></tr>";
