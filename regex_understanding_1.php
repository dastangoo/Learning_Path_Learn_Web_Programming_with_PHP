<?php
// Using Regular Expression: Understanding the Three Regular Expression Command Sets
// example of validation

// $_GET is an associative array created by PHP to represent parameters in the URL
// check to see if set; if so, assign $_GET to $name; otherwise assign '' to $name
$name = isset($_GET['username']) ? $_GET['username'] : '';

// check to see if username is set

if (!$name) {
  $message = '';
}
// Here is an example of a pattern which searches for alphabetic and numeric characters
elseif (preg_match('/^\w+$/', $name)) {
  $message = 'Username is OK';
}
// otherwise assume username is invalid
else {
  $message = 'Username is INVALID';
}

echo $message;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PHP and MySQL</title>
    <style>
      .container {
        background-image: url('images/BG.jpg');
        background-position: top left;
        background-repeat: no-repeat;
        width: 1280px;
        height: 720px;
      }
    </style>
  </head>
  <body topmargin="0" leftmargin="0">
    <div class="container">
      <form action="#" method="get">
        <input type="text" name="username" value="">
        <input type="submit" name="submit" value="Submit">
      </form>
    </div>
  </body>
</html>
