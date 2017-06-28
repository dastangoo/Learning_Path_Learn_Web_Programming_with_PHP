<?php
date_default_timezone_set('Asia/Tehran');

// Workint with Date and Time: Using the DateTime Class

// syntax: $dateTimeObject = new DateTime();
// if no date string, uses current time (i.e. "now")

// set up date object representing today
$dates['normal'] = new DateTime();

// set up date object representing today
$dates['yesterday'] = new DateTime('yesterday');
$dates['third saturday match 2020'] = new DateTime('third saturday match 2020');
$dates['28 March 2013'] = new DateTime('28 March 2013');

// set a timestamp of 10 January 2013
$dates['timestamp'] = new DateTime();
$timeStamp = mktime('0, 0, 0, 1, 10, 2013');
$dates['timestamp']->setTimestamp($timeStamp);

// display results
echo '<table width=60%>';
foreach ($dates as $key => $value) {
  // $dateTimeObject->format(format_string) works just like date(format_string)
  printf('<tr><th>%s</th><td>%s</td></tr>', $key, $value->format('l, d M Y'));
}

echo '</table';
