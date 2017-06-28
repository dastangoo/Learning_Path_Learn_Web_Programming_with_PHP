<?php
// Managing Web Operations: Managing Sessions
// you can store anything you want in a session
// BUT ... if you don't include the class defintion, watch the var_dump()

session_start();
$object = $_SESSION['object'];
$array = $_SESSION['array'];
// unset($_SESSION['array'])
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf=8">
    <title>Sessions</title>
  </head>
  <body>
    <h1>Sessions</h1>
    Add 2 + 2: <?php echo $object->add(2, 2); ?>
    <br />
    <?php var_dump($object); ?>
    <br />
    <?php var_dump($object); ?>
    <?php phpinfo(INFO_VARIABLES); ?>
  </body>
</html>
