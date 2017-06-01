<?php
function ucNames(&$fname, &$mname = '', &$lname = '')
{
  $fname = ucfirst($fname);
  $mname = ucfirst($mname);
  $lname = ucfirst($lname);

  return TRUE;
}


$first = 'alfred';
$middle = 'e';
$last = 'neuman';

printf('<br />NAME BEFORE: %s %s %s', $first, $middle, $last);
ucNames($first, $middle, $last);
printf('<br />NAME AFTER: %s %s %s', $first, $middle, $last);
