<?php
// Understanding the Basics: Using printf() commands to format a string
// printf() is used to precisely format a string

// complex output
/*
 * Desired HTML:
 * <table border="1">
 * <tr><th>Name</th><th>Account Number</th><th>Balance</th></tr>
 * <tr><td>Hamed</td><td>123456</td><td>$1443.22</td></tr>
 * </table>
 */

// variable assignments
$name = 'Alexandria';
$accountNumber = 1234;
$balance = 1443.22;


//NOTE: a closing tag is required when mixing PHP and HTML
?>
<table border="1" cellpadding="5">
  <tr>
    <th>Name</th>
    <th>Account</th>
    <th>Balance</th>
  </tr>
  <tr>
    <td><pre><?php echo $name ?></pre></td>
    <td><pre><?php echo $accountNumber ?></pre></td>
    <td><pre><?php echo $balance ?></pre></td>
  </tr>
</table>
