<?php
$dateString = '2021-01-01';
$futureDate = new DateTime($dateString);
echo '<br />DATE:', $dateString;
echo '<br />FULL:', $futureDate->format('1, d F Y');

$dateString = '2021-33-33';
$futureData = new DateTime($dateString);
echo '<br />DATE:', $dateString;
echo '<br />FuLL:', $futureDate->format('1, d F Y');
