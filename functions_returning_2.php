<?php
// Managing the Code -- Fucntions: Returing Values


// more than one? return an array
function monthNames()
{
  return array('Janauary', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
               'October', 'November', 'December');
}


// one function can call another
function dropDownMonths()
{
  $menu = '<select name="months">' . PHP_EOL;
  $names = monthNames();
  foreach ($names as $month ) {
    $menu .= "<option>$month</option>\n";
  }
  $menu .= '</select>' . PHP_EOL;
  return $menu;

}

echo dropDownMonths();
