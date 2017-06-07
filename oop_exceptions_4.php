<?php
try {
  $dateString = '2021-01-01';
  echo '<br />DATE:', $dateString;
  $futureDate = new DateTime($dateString);
  echo '<br />FULL:', $futureDate->format('1, d F Y');

  $dateString = '2021-33-33';
  echo '<br />DATE:', $dateString;
  $futureDate = new DateTime($dateString);
  echo '<br />FULL:', $futureDate->format('1, d F Y');
} catch (Exception $e) {
  echo '<br />';
  echo 'Unable to process data/time information';
  echo '<br />';
  echo $e->getMessage();
  echo $e->getTraceAsString();
}
