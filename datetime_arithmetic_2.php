<?php
date_default_timezone_set('Asia/Tehran');
// Working with Date and Time -- Performing Date Arithmetic
// you can also use DateTime::add() and sub()


echo '<table width=60%>';

// create date
$date = new DateTime();
echo '<tr><th>Today</th><td>', $date->format('l, d F Y h:i A'), '</td></tr>';


// create "intervals" and add 1 week
// p = period; W = week
$interval = new DateInterval('p1W');
$date->add($interval);
echo '<tr><th>+1 Week</th><td>', $date->format('l, d F Y h:i A'), '</td></tr>';

// subtract 3 months and 2 days
// p = period; M = month; D = day
$interval = new DateInterval('p3M2D');
$date->sub($interval);
echo '<tr><th>-3 months 2 days</th><td>', $date->format('l, d F Y h:i A'), '</td></tr>';

echo '</table>';
