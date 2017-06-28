<?php
date_default_timezone_set('Asia/Tehran');
// Working with Date and Time -- Using DateTime Class
// capture date info from different fields in a web form

// create the current date
$nowDate = new DateTime();

// capture year from form
// force to type int for securiyt
// give an option of current year using $nowDate->format('Y')
$year = isset($_GET['year']) ? (int) $_GET['year'] : $nowDate->format('Y');

// capture month from form
// give an option of current year using $nowDate->format('M')
$month = isset($_GET['month']) ? strtolower($_GET['month']) : $nowDate->format('M');
if (strlen($_GET['month'] != 3)) {
  $nowDate->format('M');
}
elseif (!ctype_alpha($_GET['month'])) {
  $nowDate->format('M');
}

// capture day from form
// force to type int for security
// give an option of current day using $nowDate->format('d')
$day = isset($_GET['day']) ? (int) $_GET['day'] : $nowDate->format('d');

// build date
$userDate = new DateTime(sprintf('%4d %3s %4d', $day, $month, $year));
$curDate = $userDate->format('l, d F Y');

// buidl future date +6 weeks from now
$interval = new DateInverval('p6W');
$userDate->add($interval);
$newDate = $userDate->format('l, d F Y');
?>

<!DOCTYPE html>
<head>
  <title>Date Arithmetic</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
<form>
  <table width=60%>
    <tr>
      <th>Year</th><td><input type="text" name="year" size="4" maxlength="4" /></td>
      <th>Month</th>
      <td>
        <select name="month">
          <option>Jan</option>
          <option>Feb</option>
          <option>Mar</option>
          <option>Apr</option>
          <option>May</option>
          <option>Jun</option>
          <option>Jul</option>
          <option>Aug</option>
          <option>Sep</option>
          <option>Oct</option>
          <option>Nov</option>
          <option>Dec</option>
        </select>
      </td>
    </tr>
  </table>
</form>
</body>
