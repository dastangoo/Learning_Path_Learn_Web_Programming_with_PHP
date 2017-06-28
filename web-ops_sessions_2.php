<?php
// Managing Web Operations: Managing Sessions
// session data is retained by default for 180 minutes
// this can be changed by setting "session.cache_expire = xxx" php.ini parameter
session_start();
if (isset($_SESSION['first']) && isset($_SESSION['last'])) {
  $fullName = $_SESSION['first'] . ' ' . $_SESSION['last'];
}
else {
  $fullName = 'Guest User';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <title>Sessions</title>
  </head>
  <body>
    <h1>Sessions</h1>
    Welcome <?php echo htmlspecialchars($fullName); ?>
    <br />NOTE: session data never appears as inbound data!
    <?php phpinfo(INFO_VARIABLES); ?>
  </body>
</html>
