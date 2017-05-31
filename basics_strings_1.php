<?php
$street = 'Main Street';
$number = 248;
$city = 'Toronoto';
$province = 'Ontario';

$address = $number . ' ' . $street . ', ' . $city . ', ' . $province;
echo "<br />Full Address Using '.' :<br /> $address";

$address = sprintf('%d %s, %s, %s', $number, $street, $city, $province);
echo "<br />Full Address Using sprintf :<br /> $address"; 
