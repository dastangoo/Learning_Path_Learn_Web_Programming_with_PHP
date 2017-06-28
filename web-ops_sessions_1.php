<?php
// Managing Web Operations: Managing Sessions
// session_start() or set "session.auto_start = 1" in php.ini
// 1st time: sets a cookie PHPSESSID
// 2nd time: looks for the cookie and reads session info
session_start();
if (isset($_POST['first_name'])) {
  $first = strip_tags($_POST['first_name']);
  $_SESSION['first'] = $first;
}
else {
  $first = 'Guest';
}
if (isset($_POST['family_name'])) {
  $last = strip_tags($_POST['family_name']);
  $_SESSION['last'] = $last;
}
else {
  $last = $user;
}
$fullName = "$first $last";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf=8" />
    <title>Sessions</title>
  </head>
  <body>
    <h1>Sessions</h1>
    Welcome <?php echo htmlspecialchars($fullName); ?>
    <form name="postForm" method="post">
      <table width=60%>
        <tr>
          <th>First Name</th><td><input type="text" name="first_name" /></td>
        </tr>
        <tr>
          <th>Family (last) Name</th><td><input type="text" name="family_name" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td><td><input type="submit" /></td>
        </tr>
      </table>
    </form>
    NOTE: session dave never appear as inbound data!
    <?php phpinfo(INFO_VARIABLES); ?>
  </body>
</html>
